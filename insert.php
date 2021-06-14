<?php

$con=mysqli_connect("localhost","root","","project");
$tp=0;
if($con)
{
	$file=$_FILES['csvfile']['tmp_name'];
	$handle=fopen($file,"r");
	$j=0;
	$p=-1;
	$d_count=0;
	echo "<br><br><b>The Excecuted queries are......</b><br><br>";
	while(($cont=fgetcsv($handle,10000000,","))!==false){
		$table=rtrim($_FILES['csvfile']['name'],".csv");
		if($j==0){
			$query="CREATE TABLE $table($cont[0] VARCHAR(100)";
			//mysqli_query($con,$query);
			if(strcasecmp($cont[0],"Password")==0)
				$p=0;
			for($i=1;empty($cont[$i])!=TRUE;$i++){
				$query .= ",$cont[$i] VARCHAR(200)";
				//$count++
				if(strcasecmp($cont[$i],"Password")==0)
				$p=$i;
			}
			$query .= ");";
			echo $query,"<br>";
			mysqli_query($con,$query);
			$d_count=$i;
		}
		else{
			if($p==0)
			$cont[0]=password_hash($cont[0],PASSWORD_DEFAULT);
			$query="insert into $table values ('$cont[0]'";
			for($i=1;$i<$d_count;$i++){
				if($i==$p){
				$text = password_hash($cont[$i],PASSWORD_DEFAULT);
				$query .=" ,'$text'";
				}
				else
				$query .= " ,'$cont[$i]'";
			}
			$query .= ");";
			echo $query,"<br>";
			mysqli_query($con,$query);
		}
		$j++;
	}

}

else{
echo "Connection Failed";

}

?>
