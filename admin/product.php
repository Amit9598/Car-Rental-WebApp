<html>
<head>
<link rel="stylesheet" href="admin_home.css">
</head>
<body>

<?php include('header.html'); ?>
<div class="back_img">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$a=$_POST['image'];
@$b=$_POST['car_name'];
@$c=$_POST['rent'];
@$d=$_POST['reg_year'];
@$e=$_POST['fuel_type'];
@$f=$_POST['seats'];
@$g=$_POST['c1'];
@$h=$_POST['c2'];
@$i=$_POST['c3'];
$sql="INSERT INTO product_info VALUES ('','$a','$b','$c','$d','$e','$f','$g','$h','$i')";
$res=mysqli_query($conn,$sql);
if($res){
echo "<script>alert('successful');</script>";
}
else{
echo "<script>alert('failed');</script>";
}
}
?>
<div class="back">
<div class="form">
<form method="post">
<center>Enter Product Details</center>
<br>
<input type="text" name="car_name" placeholder="CAR NAME" required ><br>
<input type="text" name="rent" placeholder="RENT per day" required ><br>
<input type="text" name="reg_year" placeholder="reg. year" required ><br>
<input type="text" name="seats" placeholder="No. of Seats" ><br>
Fuel Type:-<br>
<input type="radio" name="fuel_type" value="Petrol" >petrol<br>
<input type="radio" name="fuel_type" value="CNG" >CNG<br>
<input type="radio" name="fuel_type" value="Diesel" >Diesel<br>
Image<input type="file" name="image"><br>
Accessories:-
<br>
<input type="checkbox" name="c1" value="1">A/C<br>
<input type="checkbox" name="c2" value="1">Automatic gear shift<br>
<input type="checkbox" name="c3" value="1">Air bags<br>
<input type="submit" value="Submit" name="submit">
</form>
</div>
</div>
</div>
<?php include('footer.html') ?>
</body>
</html>