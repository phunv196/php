<?php
session_start();
if(empty($_SESSION['user'])) header('location:login.php');
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiển thị</title>
<style>
.container {background-color:#FCF;margin-left:200px;font-size:16px; width:500px;height:400px;font-family:"Courier New", Courier, monospace;padding:0; color:#00F}
.text1{color:#30C; margin: 20px 0px 0px 120px; float:left; font-size:22px; width:400px; }
.text {width: 250px; height:35px; margin-left:140px; margin-top:20px; border-radius:5px; font-family:"Courier New", Courier, monospace;  }
.sub{width:120px; height:30px; margin-left:170px; margin-top:10px; background-color:#F0C; color:#00C; font-size:16px; border-radius:10px;font-family:"Courier New", Courier, monospace;}
</style>
</head>

<body><div class="container">
<form method="post">
<div class="text1"><B>ĐỔI MẬT KHẨU</B></div>
<div><input type="pass" name="txtpassht" placeholder="Nhập mật khẩu ban đầu" class="text"></div>
<div><input type="pass" name="txtnewpass" placeholder="Nhập mật khẩu mới" class="text"></div>
<div><input type="pass" name="txtrepass" placeholder="Nhập lại mật khẩu mới" class="text"></div>
<div><input type="submit" name="ok" value="CHANGE PASS" class="sub"><a href="exit.php">Thoát</a></div>
<div>
</form>
<?php
include('connect.php');
if(isset($_POST['ok']))
{
	$passht  =$_POST['txtpassht'];
	$newpass =$_POST['txtnewpass'];
	$repass  =$_POST['txtrepass'];//Gán biến trên form
    $session =$_SESSION['user'];//Gán biến cho Session
	if($newpass==$repass)//Kiểm tra mật khẩu và nlmk có trùng
	{
    $sql     ="select * from Dangnhap where email='$session'";
    $run     =mysqli_query($conn,$sql);
    $row     =mysqli_fetch_array($run);
	$passdata=$row['pass'];//Lấy ra password trong database
	if($passht==$passdata)
	{
		$sql_pass="update Dangnhap set pass='$newpass'";
		$run_pass=mysqli_query($conn,$sql_pass);
		if($run_pass) echo "Cập nhật mật khẩu thành công";
		else echo "Không đổi mật khảu được";
	}
	else echo "Mật khẩu hiện tại không đúng!";
	}
	else echo "Mật khẩu mới và nhập lại mật khẩu phải trùng nhau!";
	
}
?>
<?php }?>
</div>
</body>
</html>