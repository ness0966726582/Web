<?php	////服務器連線檢查
	$conn=mysqli_connect("localhost", "root", "", "db_register_login");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>