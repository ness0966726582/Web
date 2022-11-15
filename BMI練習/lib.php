<?php 
function getBMI($h, $w){
  //1.給予兩個參數--->h=身高cm ; w=體重KG
  //2.輸出參數--->b=BMI值 ; c=BMI狀態
	
	if(is_numeric($h) && is_numeric($w) ){
		$h=$h/100;      	//轉公尺
		$b=$w/($h*$h);      	//BMI公式
		$b=round($b, 0);	//取小數點第0位      
		$c='';   
		if($b>=18.5 && $b<=24 ){	$b=$b; $c='正常範圍';	
		}
		else{	if($b<18.5){	$b=$b; $c='過輕';	
			}
			else{	$b=$b; $c='過重';	
			}	
		}
	}
	else{ 	$b='錯誤輸入'; $c='無';	
	}
	return array($b, $c);			//回傳數值+狀態#
}
//結束--->BMI計算

?>