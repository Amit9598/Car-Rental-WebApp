<html>
<head>
<link rel="stylesheet" href="home.css">
</head>
<body>
<?php include('header.php'); ?>
<div class="back_img">
<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$name=$_POST['name'];
@$email=$_POST['email'];
@$username=$_POST['username'];
@$password=$_POST['password'];
@$gender=$_POST['gender'];
@$city=$_POST['city'];
@$ref=$_POST['ref_code'];
@$number=$_POST['number'];

$sql="Insert Into signup Values('$name','$email','$username','$password','$gender','$city','$ref','$number')";
$res=mysqli_query($conn,$sql);
}
?>

<div class="back">
<center>
<div class="contact_form">
<form name="f1" method="post">
<center>SIGN UP NOW</center>
<br>
<input type="text" name="name" placeholder="NAME" required ><br>
<input type="email" name="email" placeholder="EMAIL" required ><br>
<input type="text" name="username" placeholder="Username" required ><br>
<input type="password" name="password" placeholder="password" required ><br>
<input type="radio" value="male" name="gender">Male
<input type="radio" value="female" name="gender">Female
<select  name="city" placeholder="select city" required>
<option value="jaipur">Jaipur</option>
<option value="delhi">Delhi</option>
<option value="jodhpur">Jodhpur</option>
<option value="lucknow">Lucknow</option>
</select><br>
<input type="text" name="ref_code" placeholder="Ref Code(if any)" ><br>
<input type="text"  name="number" pattern=[0-9]{10} placeholder="number" required >
<hr>
<input type="submit" value="SIGN UP" name="submit">
</form>
</div>
</center>
</div>
</div>
<?php include('footer.html'); ?>
</body>
</html>