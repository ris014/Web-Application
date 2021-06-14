# Web-Application
Create a web application with an option to upload a CSV file of 1 lakh or more records, where the application should read the records, process it, and push to the database table. The CSV file will have a header row that denotes the database table column names and rows which represent the values of the database table. After the upload of the CSV file, only the database table should be created dynamically based on the header names of the CSV file and the insert of row values should be carried out later. In case if there are any header named as “password”, the value should be encrypted dynamically and saved in the database.


#Files
1. index.php - webpage design
2. insert.php - database connection

#recuriement
1. csv file the content has no whitespace and all values are separated by commas.
2. database : xampp

#steps
1. open index.php file using your local host
2. upload csv file
3. parallelly open phpmyadmin 
4. now you can see dynamically created database with encrypted password column
