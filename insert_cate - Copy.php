<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
 Category <input type="text" name="txtcate" placeholder="Enter Category">
 <input type="submit" name="ok" value="Add Category" />
</form>
<?php
 include('function.php');
 if(isset($_POST['ok']))
 {
	 if(empty($_POST['txtcate']))echo "Chưa nhập dữ liệu";
	 else
	 {
		$run=insert_cate($_POST['txtcate']);
		if($run) header('location:cate.php');
		else echo "Not Finish";
	 }
 }
?>
</body>
</html>