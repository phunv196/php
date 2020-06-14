<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style>
.container {background-color:#FCF;margin-left:200px;font-size:16px;width:500px;height:400px;font-family:"Courier New", Courier, monospace;padding:0; color:#00F}
.text1{color:#30C; margin: 20px 0px 0px 120px; float:left; font-size:22px; width:400px; }
.text2{color:#30C; margin: 10px 0px 0px 150px; float:left; font-size:18px;}
.text {width: 250px; height:35px; margin-left:140px; margin-top:20px; border-radius:5px; font-family:"Courier New", Courier, monospace; }
.sub{width:100px; height:30px; margin-left:220px; margin-top:15px; background-color:#F0C; color:#00C; font-size:20px; border-radius:10px;font-family:"Courier New", Courier, monospace;}
a{text-decoration:none; color:#30C;}
</style>
</head>

<body>
<div class="container">
<form method="post">
<div class="text1" ><B>LOGIN</B></div>
<div><input type="text" name="txtten" placeholder="Enter email" class="text"></div>
<div><input type="pass" name="txtpass" placeholder="Enter Password" class="text"></div>
<div><input type="submit" name="ok" value="Login" class="sub"></div>
<div class="text2"><a href="">Forgot password?</a></div>
<div class="text2"><a href="./Adduser.php">Create new account_Signup!</a></div>
</form>
<?php
include('connect.php');
   if(isset($_POST['ok']))
   {
	   $user=$_POST['txtten'];
	   $pass=$_POST['txtpass'];
	   if(empty($user)||empty($pass)) echo "Bạn chưa nhập dữ liệu";
	  else 
	   {
	   $sql="select * from dangnhap where email='$user'";
	   $run=mysqli_query($conn,$sql);
	   $num=mysqli_num_rows($run);
	   $row=mysqli_fetch_array($run);
	   if($row['email']=='admin@gmail.com')
	   {
		 $_SESSION['user']='admin@gmail.com';
		 header('location:list.php');
	   }
	   else
	   {
		   if($num==1)
		   {
		     $_SESSION['user']=$user;  
	         $pw=$row['pass'];
		     if($pass==$pw) header('location:list_user.php');
	         else echo "Sai mật khẩu!";
	        }
	        else echo "Sai tên đăng nhập!";
	     }
   }
   }
   
    ?>
</div>
</body>
</html>