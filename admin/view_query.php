<html>
<head>
<link rel="stylesheet" href="admin_home.css">
</head>
<body>
<?php include('header.html'); ?>
<table>
<tr>
<th>query_no</th>
<th>Name</th>
<th>E-mail</th>
<th>Contact Number</th>
<th>Message</th>
</tr>
<?php
$conn=mysqli_Connect('localhost','root','','reg');
$sql="SELECT * FROM contact";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>

<tr>
<td><?php echo $row['query_no']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['contact_no']; ?></td>
<td><?php echo $row['message']; ?></td>
<td>
<a href="tel:+<?php echo $row['contact_no']; ?>">
<input type="button" value="Send Message"></a></td>
<td>
<a href="mailto:<?php $row['email']; ?>?Subject=regarding%20your%20query" target="_top"><input type="button" value="Send Email"></a></td>
</tr>
<?php } ?>
</table>
<?php include('footer.html'); ?>
</body>
</html>

