<?php
include('connect.php');
$sql="delete from sanpham where code='".$_GET['ma']."'";
$run=mysqli_query($conn,$sql);
if($run) header('location:Admin.php');
else echo "not delete";
?>