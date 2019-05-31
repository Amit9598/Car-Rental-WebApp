<html>
<head>
<link rel="stylesheet" href="admin_home.css">
</head>
<body>
<div class="back_img">
<div class="back">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$a=$_POST['username'];
@$b=$_POST['password'];
$sql="Select * from admin where username='$a' AND password='$b'";
$res=mysqli_query($conn,$sql);
$c=mysqli_num_rows($res);
if($c==1){
header('location:admin_home.php');
}
else{
echo "not";
}
}
?><center>
<div class="form">
<form method="post">
<input type="text" name="username" placeholder="Username" ><br>
<input type="password" name="password" placeholder="Password" ><br>
<input type="submit" value="login" name="submit">
</form>
</div>
</center>
</div>
</div>
</body>
</html>