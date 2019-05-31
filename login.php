<html>
<head>
<link rel="stylesheet" href="home.css">
</head>
<body>
<?php include('header.php'); ?>
<div class="back_img">
<div class="back">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$username=$_GET['username'];
if(isset($_POST['submit']))
{
@$a=$_POST['username'];
@$b=$_POST['password'];
@$sql="Select * from signup where username='$a' AND password='$b'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$c=mysqli_num_rows($res);
if($c==1){
$_SESSION['username']=$a;
$a=$_SESSION['username'];
header("location:cars.php");
}
else{
echo "<script>alert('Incorrect Username or Password');</script>";
}
}
?>
<center>
<div class="contact_form">
<form method="post">
<input type="text" name="username" placeholder="Username"><br>
<input type="password" name="password" placeholder="Password"><br>
<input type="submit" value="login" name="submit">
<a href="register.php"><input type="button" value="Register" name="submit"></a>
</form>
</div>
</center>
</div>
</div>
<?php include('footer.html'); ?>
</body>
</html>