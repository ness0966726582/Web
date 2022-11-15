<?php
	session_start();		//開始新的或恢復現有的會話
	if(!ISSET($_SESSION['user_id'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<center><h1>WELCOME USER</h1></center>
		<hr style="border-top:1px dotted #ccc;"/>
		<a class="btn btn-danger" href="logout.php">logout</a>
		<a class="btn btn-danger" href="IT/home.php"> 資訊部 </a>
	</div>

</body>	
</html>