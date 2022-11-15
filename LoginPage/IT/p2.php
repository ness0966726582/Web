<?php
	include 'lib_list.php';
	$myList = getList();		//引用lib.php 的 getList()---->維護清單也在這
?>
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
	<div class="col-md-12 well">
		<h3 class="text-primary">IT-room page</h3>
		<?php	echo $myList;	//顯示清單頁	?>
	</div>

</body>	
</html>