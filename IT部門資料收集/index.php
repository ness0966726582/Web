<?php
	include 'lib_list.php';
	$myList = getList();		//引用lib.php 的 getList()---->維護清單也在這
?>

<!doctype html><html lang="zh-Hant-TW">
<head>	<title>IT部門資料收集</title>	</head>

<body>
<div>	<?php	echo $myList;	//顯示清單頁	?></div>




</body>
