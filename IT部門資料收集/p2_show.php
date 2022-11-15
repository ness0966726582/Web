<?php
	include 'lib_list.php';		//清單呈現類--引用
	include 'lib_sql.php';		//資料庫類--引用

	$myList = getList();		//引用lib.php 的 getList()---->維護清單也在這  
	$myLogin=checkSQL($_POST['h'],$_POST['i']);	//引用lib_sql.php的checkSQL()	--->檢查會員
?>

<html>
	<head>	<title>成員輸入顯示</title>	</head>
	<body>
	<div>	<?php	echo $myList;	//顯示清單頁	?></div>
	<div>
		帳號:		<?php	 echo $myLogin[1];	?><br>
		密碼:		<?php	 echo$myLogin[2];	?><br>
		

	<div>	登入結果:		<?php	 echo $myLogin[0];	?></div>
	</div><br>
	
	</body>
</html>

