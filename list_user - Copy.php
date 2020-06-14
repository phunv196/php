<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thông tin khách hàng</title>
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
<div class="container">
<form method="post" enctype="multipart/form-data">
<div class="text1"> CẬP NHẬT THÔNG TIN CÁ NHÂN </div>
<div class="text2"> Ảnh đại diện</div> 
<div><input type="file" name="txtfile" size="300px" class="inputtext" /></div>
<div><input type="submit" name="ok" value="Thực hiện" class="inputsubmit" /></div>
</form>
<?php
if(isset($_POST['ok']))
{
	$session=$_SESSION['user'];
	$tmp=$_FILES['txtfile']['tmp_name'];
	$name=$_FILES['txtfile']['name'];
	$upload=move_uploaded_file($tmp,'img/'.$name);
	$sql="update dangky set img='$name' where email='$session' ";
	$run=mysqli_query($conn,$sql);
	$sql_select="select * from dangky where email='$session'";
	$run_select=mysqli_query($conn,$sql_select);
	$row_select=mysqli_fetch_array($run_select);
}
?>

<br>
<div class="text2">Tên khách hàng</div>
<div class="text2"> <?php echo $row_select['name']?> </div>
<div class="text2">Ảnh đại diện</div>
<div class="text2"><img src="img/<?php echo $row_select['img'];?>" width="50px" height="50px" style="border-radius:30px"></div>

</div>
</body>
</html>