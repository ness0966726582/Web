<?php
	session_start(); 			//開始新的或恢復現有的會話
	session_destroy();			//銷毀註冊到會話的所有數據
	header('location: index.php');		//發送原始 HTTP 標頭
?>