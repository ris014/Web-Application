<html>
<head>
	<title>csv insert</title>
<style>
body {
  background-image: url('img2.jfif');
  background-repeat: repeat;
  background-attachment: fixed;  
  background-size: auto;
}
div {
  background-color: lightgrey;
  width: 500px;
  height:200px;
  top:15%;
  left:25%;
  position: absolute;
  margin-top:-50px;
  margin-left:-50px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
<body><div><br><br>
<form action="insert.php" method="post" enctype="multipart/form-data" >
<input type="file" name="csvfile" required="required" accept=".csv"/>
<input type="submit" value="upload" style="height:50px; width:100px; display:inline-block;" />
</form>
<h4> &nbsp &nbsp Please Upload CSV files only....</h4>
</div>
</body>
<html>