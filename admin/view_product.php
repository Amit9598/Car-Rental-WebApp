<html>
<head>
<link rel="stylesheet" href="admin_home.css">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>
<body>
<?php include'header.html'; ?>
<table>
<tr>
<th>car_name</th>
<th>rent</th>
<th>reg_year</th>
<th>seats</th>
<th>fuel_type</th>
<th>image</th>
<th>a/c</th>
<th>automatic gear</th>
<th>air bags</th>
</tr>
<?php
session_start();
$conn=mysqli_Connect('localhost','root','','reg');
@$id=$_GET['car_id'];

$sql="SELECT * FROM product_info";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
$_SESSION['car_id']=$id;
$id=$_SESSION['car_id'];
?>
<tr>
<td><?php echo $row['car_name']; ?></td>
<td><?php echo $row['rent']; ?>/day</td>
<td><?php echo $row['reg_year']; ?></td>
<td><?php echo $row['seats']; ?></td>
<td><?php echo $row['fuel_type']; ?></td>
<td><?php echo $row['image']; ?></td>
<td><?php echo $row['ac']; ?></td>
<td><?php echo $row['automatic_gear']; ?></td>
<td><?php echo $row['air_bag']; ?></td>

<td><a href="update.php?car_id=<?php echo $row['car_id']; ?>">
<input type="button" value="Update" ></a></td>
<td>
<a href="delete.php?car_id=<?php echo $row['car_id']; ?>"><input type="submit" value="Delete"></td>
</tr>
<?php } ?>
</table>
<?php include'footer.html'; ?>
</body>
</html>