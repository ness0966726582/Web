<?php
	include 'lib.php';
	$bmi = getBMI($_POST['h'],$_POST['w']);	
?>

<html>
	<head>
	</head>
	<body>
	<div>BMI:<?php	echo $bmi[0];	?></div>
	<div>STATUS:<?php	echo $bmi[1];	?></div>
	<br>
	<a href="index.php">回輸入頁</a>
	</body>
</html>

