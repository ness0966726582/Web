<!---Web畫面開始--->
<a href="index.php">首頁</a></li>
    
<form action="p5_add_colum.php" method="post">
 	<p>
	Key in your mySQL Server:<br>
	<input type="text" name="a" value="localhost"/ ><br>
	Key in your User name:<br>
	<input type="text" name="b" value="root"/ ><br>
	Key in your User password:<br>
	<input type="text" name="c" placeholder="Key in your Password"/ ><br>
	Key in your Creat new DB:<br>
	<input type="text" name="d" placeholder="Key in your DB Name"/ ><br>
	Key in your Creat new Table:<br>
	<input type="text" name="e" placeholder="Key in your Table Name"/ ><br>
	
	Key in your Creat new colum:<br>
	<input type="text" name="f" placeholder="Key in your Colum1"/ >
	<select name="f1">
    		<option value=""selected>請選擇欄位屬性</option>
    		<option value="int">int</option>
    		<option value="varchar(244)" >varchar(244)</option>
	</select><BR>

	<input type="text" name="g" placeholder="Key in your Colum2"/ >
	<select name="g1">
    		<option value=""selected>請選擇欄位屬性</option>
    		<option value="int">int</option>
    		<option value="varchar(244)">varchar(244)</option>
	</select><BR>

	<input type="text" name="h" placeholder="Key in your Colum3"/ >
	<select name="h1">
    		<option value=""selected>請選擇欄位屬性</option>
    		<option value="int">int</option>
    		<option value="varchar(244)" >varchar(244)</option>
	</select><BR>
	</p>
 	
	<p>
	<button type='submit' >送出</button>
	<button type='reset' >重設</button>
	</p>
</form>

<!---Web畫面結束--->
