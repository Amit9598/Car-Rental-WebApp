<html>
<head>
<link rel="stylesheet" href="admin_home.css">
</head>
<body>
<?php include('header.html'); ?>
<table>
<tr>
<th>order_no</th>
<th>username</th>
<th>car_id</th>
<th>lease_duration</th>
<th>total_rent</th>
<th>contact_no</th>
<th>delivery_date</th>
<th>delivery_address</th>
<th>pickup_date</th>
<th>payment_mode</th>
</tr>
<?php
$conn=mysqli_Connect('localhost','root','','reg');
$sql="SELECT * FROM booking";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>

<tr>
<td><?php echo $row['order_no']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['car_id']; ?></td>
<td><?php echo $row['lease_duration']; ?></td>
<td><?php echo $row['total_rent']; ?></td>
<td><?php echo $row['contact_no']; ?></td>
<td><?php echo $row['delivery_date']; ?></td>
<td><?php echo $row['delivery_address']; ?></td>
<td><?php echo $row['pickup_date']; ?></td>
<td><?php echo $row['payment_mode']; ?></td>
</tr>
<?php } ?>
</table>
<?php include('footer.html'); ?>
</body>
</html>



