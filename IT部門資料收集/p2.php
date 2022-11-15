<?php
	include 'lib_list.php';
	$myList = getList();		//引用lib.php 的 getList()---->維護清單也在這
?>

<!doctype html><html lang="zh-Hant-TW">
<head>	<title>登入頁面</title>	</head>

<body>
<div>	<?php	echo $myList;	//顯示清單頁	?></div>

新進人員建檔:
		<form action='p2_show.php' method='post'>
			<input type='test' name='h' placeholder='帳號'>
			<input type='test' name='i' placeholder='密碼'>

			<br>
			<button type='reset'>重設</button>
			<button type='submit'>登入</button>
		</form>

</body>