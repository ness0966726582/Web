<?php
//說明:建立資料庫名mycompany --->若資料庫"已存在", 將會出現錯誤資訊

//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password);

// Checking the  connection
if (!$connection) {
  die("Failed ". mysqli_connect_error());
}
echo "Connection established successfully." . "n";

//sql query to create a database named mycompany
$query = "CREATE DATABASE mycompany";
if (mysqli_query($connection, $query)) {
  echo "A new database called mycompany is successfully created!";
} else {
  echo "Error:" . mysqli_error($connection);
}

mysqli_close($connection);
?>