<?php 

//清單維護在這
function getList(){
	$a=	'<ul>
			<li><a href="index.php">首頁</a></li>
			<li><a href="p1.php">建檔-新進人員</a></li> 
			<li><a href="p2.php">登入畫面</a></li> 
			<li><a href="p3.php">--尚無--</a></li>
			<li><a href="p4.php">--尚無--</a></li> 
			<li><a href="p5.php">--尚無--</a></li> 
			<li><a href="p6.php">--尚無--</a></li>
		</ul>';

	return($a);
}

function getData($a, $b, $c, $d, $e, $f, $g){
	
	$all = array($a, $b, $c, $d, $e, $f, $g);
	return array($all[0],$all[1],$all[2],$all[3],$all[4],$all[5],$all[6]);			//回傳數值+狀態#
}
?>