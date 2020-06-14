<?php
session_start();
include('connect.php');
if($_SESSION['user']!='admin@gmail.com') header('location:login.php');
else
{
	echo "Hello: ".$_SESSION['user'];
	echo "<a href='exit.php'>Thoát</a>";
?>
<title>Hiển thị</title>
<style>
.grid-container
{display:grid; background-color:#F9C;width:500px; margin-left:200px; grid-gap:10px; padding:10px}
.grid-container > div
{ font-family:"Courier New", Courier, monospace;
  font-size:18px;
  border:1px solid #F09;
  text-align:left;
  background-color:rgba(255,255,255,0.6)
}
</style>
</head>
<body>
<h2 align="center"><B>DANH SÁCH KHÁCH HÀNG</B></h2><br>
<div class="grid-container">
<?php
   
   $sql="select * from dangky";
   $run=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($run))
   {
?>
<div> ID:<?php echo $row['ID'];?><br>
      Name:<?php echo $row['name'];?><br>
      Email:<?php echo $row['email'];?><br />
      Address:<?php echo $row['address'];?>
</div>	   
<?php	    
	}
 ?>
</div>
<?php }?>
</body>
</html>