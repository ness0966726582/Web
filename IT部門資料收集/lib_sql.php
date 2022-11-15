<?php
//檢查資料庫登入帳號+密碼
function checkSQL($h, $i){
	$account = $h;	$pwd = $i;
	$reslut = '成功登入';
 
	return  array($reslut,$account, $pwd); 
 }

//連線Server & Log-in
function conn(){
	$dbhost = 'localhost';  	// mysql伺服器主機地址
	$dbuser = 'root';           	// mysql使用者名稱
	$dbpass = '';          		// mysql使用者名稱密碼
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{  	die('連線失敗: ' . mysqli_error($conn));	}
	echo '連線成功<br />';
	return $conn;
}

//選擇DB & Table
function sentSQL($a, $b, $c, $d, $e, $f, $g){
	
	$conn=conn();			//引用函式取得連線
	mysqli_query($conn , "set names utf8");	// 設定編碼，防止中文亂碼
	$db="aaa";			//DB 名稱
	$table="mytable";			//Table 名稱

	$id=$a; 		$name=$b; 	
	$gender=$c; 	$phone=$d; 
	$onboard=$e; 	$mail=$f; 
	$other=$g;
	
	//定義寫入資料位置
	$sql = "INSERT INTO mytable"."(a1, b1, c1, d1, e1, f1, g1) "."VALUES "."('$id','$name','$gender','$phone','$onboard','$mail','$other')";
	
	//選擇資料庫名 
	mysqli_select_db( $conn, $db);
	//連線與寫入+判斷
	$retval = mysqli_query( $conn, $sql );
	if(! $retval )
	{	  die('無法插入資料: ' . mysqli_error($conn));	}
	echo "資料插入成功\n";
	$reslut="已完成上傳";
	mysqli_close($conn);		//結束	
	
	return array($reslut,$conn, $db); 
}

?>