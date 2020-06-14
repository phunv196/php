<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<input type="text" name="txtten" placeholder="Nhập tên quê quán" />
<input type="submit" name="ok" value="thêm mới" />
</form>
<?php
 include ('connect.php');
 if(isset($_POST['ok']))
 {
	 if(empty($_POST['txtten'])) echo "chưa nhập dữ liệu";
	 else {
 $sql="insert into quequan(Address) values ('".$_POST['txtten']."')";
 $run=mysqli_query($conn,$sql);
 if($run) header('location:List_quequan.php');
	 }
 }
?>
</body>
</html>