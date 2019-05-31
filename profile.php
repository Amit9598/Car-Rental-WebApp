<html>
<body>
<?php include('header.php'); ?>
<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$sql="select * from signup";
$res=mysqli_query($conn,$sql);
@$row=mysqli_fetch_array($res);
@$a=$row['Name'];
@$b=$row['username'];
@$c=$row['Email'];
@$d=$row['password'];
@$e=$row['city'];
?>
<form method="post">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="name" value='<?php echo $a ?>' ></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value='<?php echo $b ?>' ></td>
</tr><tr>
<td>Email</td>
<td><input type="text" name="email" value='<?php echo $c ?>' ></td>
</tr><tr>
<td>Password</td>
<td><input type="text" name="password" value='<?php echo $d ?>' ></td>
</tr><tr>
<td>City</td>
<td><input type="text" name="city" value='<?php echo $e ?>' ></td>
</tr>
</table>
</form>
<?php include('footer.html'); ?>
</body>
</html>