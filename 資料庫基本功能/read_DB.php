<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aaa";
 
// 建立連線
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("連線失敗: " . mysqli_connect_error());
}
 
$sql = "SELECT id, account, password FROM myTable1";		//注意表選擇 "欄位" 與 "資料表" 的正確!
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 輸出資料
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - 帳號: " . $row["account"]. " - 密碼: " . $row["password"]. "<br>";
    }
} else {
    echo "0 結果";
}
 
mysqli_close($conn);
?>