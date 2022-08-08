<?php
//若使用_GET 參數-->將會顯示於URL上
//echo $_POST['a'];
//echo "<br>";
//echo $_POST['b'];
//echo "<br>";
//echo $_POST['c'];
//echo "<br>";


//specify the server name and here it is localhost
$server_name = $_POST['a'];

//specify the username - here it is root
$user_name = $_POST['b'];

//specify the password - it is empty
$password = $_POST['c'];

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password);

// Checking the  connection
if (!$connection) {
  die("Failed ". mysqli_connect_error());
}
echo "Connection established successfully";
?>
