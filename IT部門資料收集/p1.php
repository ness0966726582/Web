<?php
	include 'lib_list.php';
	$myList = getList();		//引用lib.php 的 getList()---->維護清單也在這
?>

<!doctype html><html lang="zh-Hant-TW">
<head>	<title>IT部門資料收集</title>	</head>

<body>
<div>	<?php	echo $myList;	//顯示清單頁	?></div>

新進人員建檔:
		<form action='p1_show.php' method='post'>
			<input type='test' name='a' placeholder='ID'>
			<input type='test' name='b' placeholder='Name'>
			<input type='test' name='c' placeholder='Gender'>
			<input type='test' name='d' placeholder='Phone'><br><br>
			<input type='test' name='e' placeholder='On Board'>
			<input type='test' name='f' placeholder='Company Mail'>
			<input type='test' name='g' placeholder='Other'><br>
			<br>
			<button type='reset'>重設</button>
			<button type='submit'>送出</button>
		</form>

</body>