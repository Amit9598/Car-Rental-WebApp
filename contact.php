<html>
<head>
<link rel="stylesheet" href="home.css">
</head>
<body>
<?php include('header.php'); ?>
<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$a=$_POST['name'];
@$b=$_POST['email'];
@$c=$_POST['contact_no'];
@$d=$_POST['message'];
$sql="INSERT INTO contact VALUES('','$a','$b','$c','$d')";
$res=mysqli_query($conn,$sql);
if($res){
echo "<script>alert('message sent');</script>";
}
else{
echo "<script>alert('message not sent');</script>";
}
}
?>
<div class="back_img">
<div class="back">
<div class="contact_form">
<form method="post">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="name" required ></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type="email" name="email" required ></td>
</tr>
<tr>
<td>Contact Number</td>
<td><input type="text" name="contact_no" required ></td>
</tr>
<tr>
<td>Message</td>
<td><textarea rows='5' cols='30' name="message" required ></textarea>  </td>
</tr>
</table>
<input type="submit" name="submit" value="Submit">
</form>
</div>
<div class="reg">
<h3><u>Contact Us</u></h3>
<p>E-mail:- amit@gmail.com<br>
Contact No.:- 9818514402</p>
</div>
</div>
</div>
<?php include('footer.html'); ?>
</body>
</html>
