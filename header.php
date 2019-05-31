<html>
<head>
<link rel="stylesheet" href="home.css">
</head>
<body>
<div class="header">
<img src="logo.svg">
<ul class="navbar">
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="cars.php">Cars</a></li>
<li><a href="contact.php">Contact</a></li>
<li class="login">
<?php 
session_start();
if(@$_SESSION["username"]!="")
{
echo @$_SESSION["username"];
?>
<ul class="drop">
<li><a href="profile.php">Profile</a></li>
<li><a href="signout.php">Sign out</a></li>
</ul>
<?php
}
else{
?>
<a href="login.php">Login</a>
<?php
}
?>
</li>
</ul>
</div>
</body>
</html>