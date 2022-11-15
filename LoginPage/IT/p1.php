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
	<h3 class="text-primary">建立新機櫃</h3>
	<?php	echo $myList;	//顯示清單頁	?>
	</div>

	<div class="col-md-3 well">
	<h3 class="text-primary">此頁說明:</h3>
	
	</div>

	<div class="col-md-9 well">
	<h3 class="text-primary">資料庫預設:</h3>
	<form action="p1_insert_row.php" method="post">
 		
<p>
		Key in your mySQL Server:<br>
		<input type="text" name="a" value="localhost"/ >
		<br>
		User Name + Password:
		<br>
		<input type="text" name="b" value="root"/ >
		<input type="text" name="c" placeholder="Key in your Password"/ >
		<br>
		<br>
		DB Name+ Table Name:<br>
		<input type="text" name="d" value="db_property"/ >
		<input type="text" name="e" value="rack"/ >
		<br>
		<br>

		<h3 class="text-primary">參數輸入:</h3>
		Title Name + Values   :
		<br>
		<input type="text" name="f" value="rack_id"/>
		<input type="text" name="f1" placeholder="Value1"/ ><br>

		<input type="text" name="g"  value="building"/ >
		<input type="text" name="g1" placeholder="Value2"/ ><br>

		<input type="text" name="h" value="floor"/ >
		<input type="text" name="h1" placeholder="Value3"/ ><br>

		<input type="text" name="i" value="area_name"/ >
		<input type="text" name="i1" placeholder="Value4"/ ><br>

		<input type="text" name="j" value="model_type"/ >
		<input type="text" name="j1" placeholder="Value5"/ ><br>

		<input type="text" name="k" value="rack_name"/ >
		<input type="text" name="k1" placeholder="Value6"/ ><br>		
		</p>
	
		<p>
		<button type='submit' >送出</button>
		<button type='reset' >重設</button>
		</p>
	</form>
	</div>
	
</body>	
</html>