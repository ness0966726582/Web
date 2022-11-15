<?php

//開始-->取得印出p6.php的輸入文字或數值
	//echo $_POST['a'];		//mySQL Server
	//echo "<br>";
	//echo $_POST['b']; 		//User Name
	//echo $_POST['c'];		//Password
	//echo "<br>";
	//echo $_POST['d'];		//DB Name
	//echo $_POST['e'];		//Table Name
//結束

//開始-->定義變數
	$serverName = $_POST['a'];
	$userName = $_POST['b'];
	$userPassword = $_POST['c'];
	$dbName = $_POST['d'];
	$tableName = $_POST['e'];

	$title1 = $_POST['f'];	
	$title2 = $_POST['g'];
	$title3 = $_POST['h'];
	$title4 = $_POST['i'];
	$title5 = $_POST['j'];
	$title6 = $_POST['k'];

	$value1 = $_POST['f1'];
	$value2 = $_POST['g1'];
	$value3 = $_POST['h1'];
	$value4 = $_POST['i1'];
	$value5 = $_POST['j1'];
	$value6 = $_POST['k1'];
//結束

//功能一
//開始-->檢查連線
	$conn = mysqli_connect($serverName, $userName, $userPassword);
	if(! $conn )
	{  	die('連線失敗: ' . mysqli_error($conn));	}
	echo '連線成功<br />';
//結束

//功能二
//開始-->資料庫寫入+防止中文亂碼
	mysqli_query($conn , "set names utf8");
	
	//插入目標+內容
	$sql = "INSERT INTO $tableName"."($title1, $title2, $title3, $title4, $title5, $title6) "."VALUES "."('$value1', '$value2', '$value3', '$value4', '$value5', '$value6')";
 
	//選擇資料庫名 
	mysqli_select_db( $conn, $dbName );
	
	//判斷是否正確寫入
	$retval = mysqli_query( $conn, $sql );
	if(! $retval )
	{	  die('無法插入資料: ' . mysqli_error($conn));	}
	echo "資料插入成功\n";

	mysqli_close($conn);

?>
