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
//echo $_POST['e'];
//echo "<br>";

//specify the server name and here it is localhost
$server_name = $_POST['a'];
//specify the username - here it is root
$user_name = $_POST['b'];
//specify the password - it is empty
$password = $_POST['c'];
//specify the DB Name - it is empty
$new_db = $_POST['d'];
//specify the DB Name - it is empty
$new_Table = $_POST['e'];

$colum1 = $_POST['f'];	
$columType1 = $_POST['f1'];
$colum2 = $_POST['g'];	
$columType2 = $_POST['g1'];
$colum3 = $_POST['h'];	
$columType3 = $_POST['h1'];


// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$new_db);

//建TABLE SAMPLE--->$query = "CREATE TABLE  .$new_Table(id int,name varchar(244),count int)";
//呈上引用變數賦予數值使用"$new_Table" + "$colum1~3" + "$columType1~3"
$query = "CREATE TABLE  $new_Table($colum1 $columType1,$colum2 $columType2,$colum3 $columType3)";     //建立TABLE!!!!!!!
if (mysqli_query($connection, $query)) {
  echo "Table is successfully created in $new_db database.";		//顯示成功將TABLE建入DB
} else {
  echo "Error:" . mysqli_error($connection);
}

//close the connection
mysqli_close($connection);



?>
