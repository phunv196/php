<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tổng dãy số </title>
</head>

<body>
<form method="post">
   Số n: <input type="text" name="txtn" />
   <input type="submit" name="ok" value="Tính toán" />
</form>
<?php
  if(isset($_POST['ok']))
  {
	  //bài 1: in ra dãy số 
	  /*$n=$_POST['txtn'];
	  for($i=1;$i<=$n;$i++)
	  {
	     echo $i ." ";
	  }*/
	  // bài 2: Tổng dãy số
	  $n=$_POST['txtn'];
	  $tong=0;
	  for($i=1;$i<=$n;$i++)
	  {
		  $tong = $tong + $i;
	   }
	   echo "Tổng dãy số là: ".$tong ." ";
	   // bài 3: In ra dãy số số chẵn màu đỏ, số lẻ mà xanh
	   
	   //bài 4: Cho biết thứ mấy trong tuần
	   
	   //bài 5: Cho biết xếp loại học tập gì 
	  
  }
?>
</body>
</html>