<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

//specify the database name - "My_company"
$database_name = "mycompany";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

//sql query to create a table named Service with three columns
$query = "CREATE TABLE  Service(id int,name varchar(244),count int)";     //!!!!!!!建立TABLE!!!!!!!
if (mysqli_query($connection, $query)) {
  echo "Table is successfully created in My_Company database.";
} else {
  echo "Error:" . mysqli_error($connection);
}

//close the connection
mysqli_close($connection);
?>