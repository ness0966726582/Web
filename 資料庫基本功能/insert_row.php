<?php
//設定連線
$dbhost = 'localhost';  // mysql伺服器主機地址
$dbuser = 'root';            // mysql使用者名稱
$dbpass = '';          // mysql使用者名稱密碼
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{  	die('連線失敗: ' . mysqli_error($conn));	}
echo '連線成功<br />';

// 設定編碼，防止中文亂碼
mysqli_query($conn , "set names utf8");

//寫入的參數 
$a1 = '學習 Python';
$b1 = 'ITREAD01.COM';
$c1 = '2016-03-06';

//"INSERT INTO 表名稱"."欄位名稱". "VALUES "."寫入資料";
$sql = "INSERT INTO mytable".	"(a1, b1, c1) "."VALUES "."('$a1','$b1','$c1')";
 
 
//選擇資料庫名 
mysqli_select_db( $conn, 'AAA' );
//連線與寫入+判斷
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{	  die('無法插入資料: ' . mysqli_error($conn));	}
echo "資料插入成功\n";

//結束
mysqli_close($conn);
?>