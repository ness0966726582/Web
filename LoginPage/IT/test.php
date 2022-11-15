<?php
$user = 'root';
$pass = '';
$db = 'aaa';

$con = mysqli_connect("localhost", $user, $pass, $db);
  $sql = "SELECT  `BrandName` FROM `parkinglot` WHERE 1;";
  $car_brands = mysqli_query ($con, $sql);

?>
Car Brands:
<select Brand Name='NEW'>
<option value="">--- Select ---</option>

<?php            while ($cat = mysqli_fetch_array($car_brands,MYSQLI_ASSOC)):;	?>

<option value="	<?php 	echo $cat['BrandName'];                ?>	">
                               	<?php 	echo $cat['BrandName'];	    ?>	
</option>

 <?php              endwhile;                ?>

</select>
<input type="submit" name="Submit" value="Select" />