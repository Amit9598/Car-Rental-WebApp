<html>
<head>
<link rel="stylesheet" href="home.css">
<script>
function luck(){
var a=document.f1.rent.value;
var b=document.f1.lease_duration.value;
var c=a*b;
document.f1.total_rent.value=c;
}

function kick(){
var a=document.f1.delivery_date.value;
var b=document.f1.lease_duration.value;

document.f1.pickup_date.value="<?php
$date=date_create("a");
date_add($date,date_interval_create_from_date_string("b"));
echo date_format($date,"y-m-d");
?>";
}
</script>
</head>
<body>
<?php include('header.php'); ?>

<div class="back_img">
<div class="back">
<div class="contact_form">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$sql="SELECT * FROM product_info WHERE car_id='".$_GET['car_id']."'";
if(@$_SESSION["username"]!="")
{
@$user=$_SESSION["username"];
}
else{
@$user="Null";
}
$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
@$i=$row['car_name'];
@$j=$row['rent'];
@$id=$row['car_id'];
if(isset($_POST['submit']))
{
@$A=$_POST['lease_duration'];
@$B=$_POST['total_rent'];
@$C=$_POST['contact_no'];
@$D=$_POST['delivery_date'];
@$E=$_POST['delivery_address'];
@$F=$_POST['pickup_date'];
@$G=$_POST['payment_mode'];
$si="INSERT INTO booking(car_id, username, lease_duration, pickup_date, total_rent, contact_no, delivery_date, delivery_address, payment_mode) VALUES('$id', '$user', '$A','$F','$B','$C','$D','$E','$G')";
$ri=mysqli_query($conn,$si);
if($ri==1){
?>
<script>alert("Booking confirmed");</script>
<?php
}
else{
echo "not";
}
}
?>

<form method="post" name="f1">
<table>
<tr>
<td>Car Name</td>
<td><input type="text" name="car_name" value='<?php echo $i ?>' readonly></td>
</tr>
<tr><td>Rent</td>
<td><input type="text" name="rent" value='<?php echo $j ?>' ></td>
</tr>
<tr>
<td>Lease Duration</td>
<td><input type="text" name="lease_duration" onkeyup="luck()" ></td>
</tr>
<tr>
<td>Total Rent</td>
<td><input type="text" name="total_rent" readonly></td>
</tr>
<tr>
<td>Contact number</td>
<td><input type="text" name="contact_no" ></td>
</tr>
<tr>
<td>Delivery Date</td>
<td><input type="date" name="delivery_date"  ></td>
</tr>
<tr>
<td>Delivery Address</td>
<td><input type="text" name="delivery_address" ></td>
</tr>
<tr>
<td>Pickup Date</td>
<td><input type="text" name="pickup_date" onfocus="kick()" readonly></td>
</tr>
<tr>
<td>Mode of payment</td>
<td><input type="radio" name="payment_mode" value="COD" >COD<br>
<input type="radio" name="payment_mode" value="Card" >Card<br>
<input type="radio" name="payment_mode" value="E-Wallet" >E-Wallet
</td>
</tr>

</table>

<input type="submit" name="submit" value="Confirm Booking"><br>
</form>
</div>
</div>
</div>

</body>
</html>