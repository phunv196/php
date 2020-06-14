<?php //B1. Lẫy mã truyền từ trang hiển thị sang
include ('connect.php');
$layma=$_GET['maque'];
echo "<h2>$layma</h1>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php // B2. Lấy dữ liệu từ database
$sql_select="select * from quequan where ID_ad='$layma'";
$run_select=mysqli_query($conn,$sql_select);
$row_select=mysqli_fetch_array($run_select);
?>
<?php // B3. Đổ dữ liệu vào form?>
<form method="post">
<input type="text" name="txtten" value="<?php echo $row_select['Address']?>" />
<input type="submit" name="ok" value="CẬP NHẬT" />
</form>
<?php //B4. Update dữ lệu trong databse
  if(isset($_POST['ok']))
 {
	 if(empty($_POST['txtten'])) echo "chưa nhập dữ liệu";
	 else {
 $sql="update quequan set Address='".$_POST['txtten']."' where ID_ad=$layma";
 $run=mysqli_query($conn,$sql);
 if($run) header('location:List_quequan.php');
	 }
 }
?>
</body>
</html>