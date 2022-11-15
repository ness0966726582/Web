<?php 

//清單維護在這
function getList(){
	$a=	'<a class="btn btn-danger" href="http://127.0.0.1/funC/LoginPage/logout.php">logout</a>
		<a class="btn btn-danger" href="p1.php">Creat new Rack ID</a>
		<a class="btn btn-danger" href="p2.php">IT-room page</a>
		<a class="btn btn-danger" href="p3.php">IoT page</a>
		';

	return($a);
}

function getData($a, $b, $c, $d, $e, $f, $g){
	
	$all = array($a, $b, $c, $d, $e, $f, $g);
	return array($all[0],$all[1],$all[2],$all[3],$all[4],$all[5],$all[6]);			//回傳數值+狀態#
}
?>