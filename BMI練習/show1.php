<?php
	//此網頁取得的並定義變數
	$heigh=$_POST['h'];		//*身高(公分) 
	$weight=$_POST['w'];	//*體重(公斤)
//	var_dump($heigh , $weight);//*測試顯示變數

	//顯示輸入變數狀態
	echo '身高: '.$heigh;	
	echo 'cm<br>';	
	echo '體重: '.$weight;	
	echo 'KG<br>';

	//開始計算BMI
	echo 'BIM試算:';

	if(is_numeric($weight)&&is_numeric($heigh)){
	   	$heigh=$heigh / 100 ;			//轉換公尺
	   	$bmi=$weight / ($heigh*$heigh);		//BMI公式
	   	$bmi=round($bmi,0);			//取小數點第0位
	   	echo'<br>'   ;
	   	echo'BMI='	.$bmi;			//印出BMI

		//2次判斷並顯示BMI範圍 18~24正常 ; 17包含以下是過輕; 25包含以上是過重
	   	if($bmi>=18.5	&&	$bmi<=24 ){
			echo'正常範圍';
		}else{
			echo'不正常範圍';
			if($bmi<18.5){
				echo'-->過輕!';
			}else{
				echo'-->過重!';
			}	
		}
	

	}
	else{
		echo'錯誤輸入!!';
	}
?>
<br>
<a href="index.php">回輸入頁</a>