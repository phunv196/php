<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload File</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="txtfile" />
<input type="submit" name="ok" value="Thực thi" />
</form>
<?php
  if(isset($_POST['ok']))
  {
	$tmp=$_FILES['txtfile']['tmp_name'];
	$name=$_FILES['txtfile']['name'];
    $upload=move_uploaded_file($tmp,'img/'.$name);
	
	if($upload)
	{echo "File tạm: ".$tmp."<br>"."Tên ảnh: ".$name;
	 }
	
	else echo "<script>alert('Upload ảnh không thành công')</script>";
  
  }
?>
<img src="img/<?php echo $name?>" width="50px" height="50px" style="border-radius:50px">
</body>
</html>
