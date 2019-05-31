<html>
<head>
<link rel="stylesheet" href="home.css">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>
<body>
<?php include('header.php') ?>
<div class="car">
<div class="block1">
<div class="bar">
<form method="post">
<input type="text" name="search" placeholder="Search" >
<br>
Range:-<br>
<input type="radio" name="range" value="0" selected>All<br>
<input type="radio" name="range" value="499">Upto Rs.499<br>
<input type="radio" name="range" value="799">Rs.500-799<br>
<input type="radio" name="range" value="999">Rs.800-999<br>
<input type="radio" name="range" value="2500">Above Rs.1000 <br>
<input type="submit" value="Search">

<br>

</div>
</div>
<div class="block2">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$id=$_GET['car_id'];
@$sql="SELECT * FROM product_info";
@$x=$_POST['search'];
@$y=$_POST['range'];
@$u=$y;
if($y==2500){
@$l=1000;
}
else if($y==499){
@$l=0;
}
else if($y==799){
@$l=500;
}
else if($y==999){
@$l=800;
}
else{
@$l=0;
@$u=2500;
}

$sql="SELECT * FROM product_info WHERE (car_name LIKE '$x%') AND (rent BETWEEN $l AND $u)";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
$_SESSION['car_id']=$id;
$id=$_SESSION['car_id'];
?>
<div class="item">
<div class="image"><img src="<?php echo $row['image']; ?>"></div>
<div class="details">
<h2><?php echo $row['car_name']; ?></h2>
<p>Rent:-<?php echo $row['rent']; ?>/day</p>
<p>Reg. Year:- <?php echo $row['reg_year']; ?></p>
<p>Fuel Type:- <?php echo $row['fuel_type']; ?></p>
<p>No. of seats:- <?php echo $row['seats']; ?></p>
Accessories:-<br>
<table>
<tr>
<td width="300px">A/C</td>
<td width="100px"><?php if($row['ac']==1){ ?>
<img src="right.png">
<?php
}
else{
?>
<img src="wrong.png">
<?php } ?></td>
</tr>
<tr>
<td width="300px">Automatic gear shift</td>
<td width="100px"><?php if($row['automatic_gear']==1){ ?>
<img src="right.png">
<?php
}
else{
?>
<img src="wrong.png">
<?php } ?></td>
</tr>
<tr>
<td width="300px">Air bags</td>
<td width="100px"><?php if($row['ac']==1){ ?>
<img src="right.png">
<?php
}
else{
?>
<img src="wrong.png">
<?php } ?></td>
</tr>
</table>
</div>

<a href="booking.php?car_id=<?php echo $row['car_id']; ?>">
<input type="button" value="Book Now" ></a>

</div>
<?php } ?>
</div>
</div>
<?php include('footer.html') ?>
</body>
</html>