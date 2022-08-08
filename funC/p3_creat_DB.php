<?php
//若使用_GET 參數-->將會顯示於URL上
//echo $_POST['a'];
//echo "<br>";
//echo $_POST['b'];
//echo "<br>";
//echo $_POST['c'];
//echo "<br>";
//echo $_POST['d'];
//echo "<br>";

//specify the server name and here it is localhost
$server_name = $_POST['a'];

//specify the username - here it is root
$user_name = $_POST['b'];

//specify the password - it is empty
$password = $_POST['c'];

//specify the DB Name - it is empty
$new_db = $_POST['d'];


//說明:建立資料庫名mycompany --->若資料庫"已存在", 將會出現錯誤資訊
// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password);

// Checking the  connection
if (!$connection) {
  die("Failed ". mysqli_connect_error());
}
echo "Connection established successfully." . "n";

//sql query to create a database named mycompany
$query = "CREATE DATABASE ".$new_db;			//插入""$new_db於字串內
if (mysqli_query($connection, $query)) {
  echo "A new database called mycompany is successfully created!";
} else {
  echo "Error:" . mysqli_error($connection);
}

mysqli_close($connection);









?>
