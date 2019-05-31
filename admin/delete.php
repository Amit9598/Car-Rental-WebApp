<?php
$conn=mysqli_Connect('localhost','root','','reg');
$sql="DELETE FROM `product_info` WHERE car_id='".$_GET['car_id']."'";
$res=mysqli_query($conn,$sql);
if($res){
echo "<script>alert('delete successful');</script>";
}
else{
echo "<script>alert('delete failed');</script>";
}
?>