<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn=mysqli_Connect('localhost','root','','reg');
	@$sql="SELECT * FROM product_info WHERE car_id='".$_GET['car_id']."'";
	$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
	@$i=$row['image'];
	<div>
		<div style="width: 50%">
			<img src="<?php echo($i) ?>" style="width: 200px ;height: 120px; margin: 50px;border: solid black 2px ">
		</div>
		<div style="width: 50%">
			<h3><?php echo() ?></h3>

			<button>Booking Confirmed</button>
		</div>
	</div>

</body>
</html>