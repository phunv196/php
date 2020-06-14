<?php
include('connect.php');
$layma=$_GET['maque'];
echo "<h1>$layma</h1>";
$sql="delete from quequan where ID_ad=$layma";
$run=mysqli_query($conn,$sql);
if($run)header('location:List_quequan.php');
else echo "Not finish";
?>