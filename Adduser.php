<?php  include('connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm mới khách hàng</title>
<style>
.container {
	background-color:#FCF;margin-left:200px;font-size:16px;
	width:500px;height:400px;font-family:"Courier New", Courier, monospace;padding:0; color:#00F}
.text1{color:#30C; margin: 20px 0px 0px 120px; float:left; font-size:22px; width:400px; }
.text2{color:#00F; float:left; width:150px; height:20px; margin-top:10px; margin-left:20px;}
.inputtext{width:200px; height:30px; margin-top:5px; margin-left:50px; border-radius:5px}
.inputradio{width:13px; height:20px; margin-top:5px; margin-left:50px; color:#F00}
.select{width:150px; height:30px; font-family:"Courier New", Courier, monospace; margin-top:5px; border-radius:5px; margin-left:50px;}
.inputsubmit{width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#F0C; color:#00C; font-size:18px; margin-top:5px; border-radius:5px;margin-left:150px;}
</style>
</head>
<body>
<form method="post">
  <div class="container">
   <div class="text1"><B>THÊM MỚI KHÁCH HÀNG</B></div>
   <div class="text2">Tên khách hàng </div>
   <div><input type="text" name="txtten" class="inputtext" />
   </div>
   <div class="text2">Giới tính</div>
   <div><input type="radio" name="txtgt" value="Nam" class="inputradio" checked="checked" />Nam
   </div>
   <div><input type="radio" name="txtgt" value="Nữ" class="inputradio" />Nữ </div>
   <div class="text2">Quê quán</div>
   <div> <select name="txtquequan" class="select">
   <option>Chọn quê</option>
      <?php 
	  $sql_option="select * from quequan";
      $run_option=mysqli_query($conn,$sql_option);
      while($row_option=mysqli_fetch_array($run_option))
          {	
	     ?>
      <option value="<?php echo $row_option['Address'];?>">		            <?php echo $row_option['Address']; ?>
      </option>
      <?php }?>
   </select>
   </div>
   <div class="text2">Số điện thoại </div>
   <div><input type="text" name="txtdt" class="inputtext"/>
   </div>
   <div class="text2">Email</div>
   <div><input type="text" name="txtemail" class="inputtext"/>
   </div>
   <div class="text2">Sở thích</div>
   <div><input type="checkbox" name="txtst[]" value="Game" class="inputradio" checked="checked" />Game
  <input type="checkbox" name="txtst[]" value="Music" class="inputradio"/>Music</div>
  <div><input type="checkbox" name="txtst[]" value="Film" class="inputradio"/>Film
   <input type="checkbox" name="txtst[]" value="Travel" class="inputradio"/>Travel</div> 
   <div><input type="submit" name="ok" value="Thêm mới" class="inputsubmit"/></div>
  </form>
  <?php
  if(isset($_POST['ok']))
  {
    //Đặt tên cho đối tượng trên form
	$ten=$_POST['txtten'];
	$gioitinh=$_POST['txtgt'];
	$quequan=$_POST['txtquequan'];
	$dienthoai=$_POST['txtdt'];
	$email=$_POST['txtemail'];
	$sothich=$_POST['txtst'];
	//Lưu sở thích là check box
	$luust="";
	foreach($sothich as $dem)
	{ $luust .=$dem; }
	//Kiểm tra email có trùng không
	/*1. Lấy dữ liệu trong databse bằng câu lệnh select */
	$sql_email="select * from dangky where email='$email'";
	/*2. Thực thi câu lệnh */
	$run_email=mysqli_query($conn,$sql_email);
	/*3. Đếm số bản ghi trong database có thỏa mãn không */
	$num_email=mysqli_num_rows($run_email);
	/*4. Kiểm tra có bản ghi thỏa mãn không */
	if($num_email>0) echo "Email đã tồn tại";
	else
	{
	//Ktra nhap du lieu
	if(empty($ten)||empty($dienthoai)||empty($email)) echo "Bạn chưa nhập dữ liệu";
	else
	{
	// thuc thi sql
	$sql="insert into dangky(name, gender, address, phone, email, hobby) values ('$ten','$gioitinh','$quequan','$dienthoai','$email','$luust')";
	$sql_dn="insert into dangnhap (email,pass) values ('$email', '12345')";
	$run_dn=mysqli_query($conn,$sql_dn);
	$run=mysqli_query($conn,$sql);
	if($run){header('location:login.php');}
	else echo "<script>alert('Không thêm mới được')</script>";
  }
  }
  }
  ?>
</div>
</body>
</html>