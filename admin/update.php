<html>
<head>
<link rel="stylesheet" href="admin_home.css">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>

</head>
<body>
<div class="back_img">
<div class="back">
<div class="form">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
$sql="SELECT * FROM product_info WHERE car_id='".$_GET['car_id']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$a=$row['car_id'];
$b=$row['car_name'];
$c=$row['reg_year'];
$d=$row['fuel_type'];
$e=$row['seats'];
$f=$row['image'];
$g=$row['rent'];
$c1=$row['ac'];
$c2=$row['automatic_gear'];
$c3=$row['air_bag'];
?>
<?php
if(isset($_POST['submit']))
{
$car_name=$_POST['car_name'];
$reg_year=$_POST['reg_year'];
$fuel_type=$_POST['fuel_type'];
$seats=$_POST['seats'];
$image=$_POST['image'];
$rent=$_POST['rent'];
$a1=$_POST['x1'];
$a2=$_POST['x2'];
$a3=$_POST['x3'];
$sq="UPDATE product_info SET rent='$rent' ,seats='$seats' ,car_name='$car_name' ,reg_year='$reg_year' ,fuel_type='$fuel_type' ,ac='$a1' ,automatic_gear='$a2' ,air_bag='$a3' WHERE car_id='".$_GET['car_id']."'";
$rs=mysqli_query($conn,$sq);
if($rs)
{
echo "<script> alert('successful');</script>";
}
else{
echo "<script> alert('not');</script>";
}
}
?>
<form method="post">
<table>
<tr>
<td>Car ID</td>
<td><input type="text" name="car_id" value='<?php echo $a ?>' readonly ></td>
</tr>
<tr>
<td>Car Name</td>
<td><input type="text" name="car_name" value='<?php echo $b ?>'></td>
</tr>

<tr>
<td>Reg. Year</td>
<td><input type="text" name="reg_year" value='<?php echo $c ?>'></td>
</tr>

<tr>
<td>Fuel type</td>
<td><input type="text" name="fuel_type" value='<?php echo $d ?>'></td>
</tr>

<tr>
<td>Rent</td>
<td><input type="text" name="rent" value='<?php echo $g ?>'></td>
</tr>
<tr>
<td>Seats</td>
<td><input type="text" name="seats" value='<?php echo $e ?>'></td>
</tr>
<tr>
<td>Image</td>
<td><input type="text" name="image" value='<?php echo $f ?>'></td>
</tr>
<tr>
<td>A/C</td>
<td><input type="text" name="x1" value='<?php echo $c1 ?>'></td>
</tr>
<tr>
<td>Automatic gear</td>
<td><input type="text" name="x2" value='<?php echo $c2 ?>'></td>
</tr>
<tr>
<td>Air bags</td>
<td><input type="text" name="x3" value='<?php echo $c3 ?>'></td>
</tr>
</table>
<input type="submit" value="Update" name="submit">
</form>
</body>
</html>