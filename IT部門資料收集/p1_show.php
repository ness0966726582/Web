<?php
	include 'lib_list.php';		//清單呈現類--引用
	include 'lib_sql.php';		//資料庫類--引用

	$myList = getList();		//引用lib.php 的 getList()---->維護清單也在這

	$myData = getData($_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g']);	//引用lib_list.php的getData()
	$myUpdate=sentSQL($_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g']);	//引用lib_sql.php的sentSQL()	
?>

<html>
	<head>	<title>成員輸入顯示</title>	</head>
	<body>
	<div>	<?php	echo $myList;	//顯示清單頁	?></div>
	<div>
		ID:		<?php	 echo $myData[0];	?><br>
		Name:		<?php	 echo $myData[1];	?><br>
		Gender:		<?php	 echo $myData[2];	?><br>
		Phone:		<?php	 echo $myData[3];	?><br>
		On Board:		<?php	 echo $myData[4];	?><br>
		Company Mail:	<?php	 echo $myData[5];	?><br>
		Other:		<?php	 echo $myData[6];	?><br>

	<div>	上傳結果:		<?php	 echo $myUpdate[0];	?></div>
	</div><br>
	
	</body>
</html>

