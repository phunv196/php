<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.container
{width:450px; height:250px; background-color:#FCF; margin-left:100px;}
.text
{font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
font-size:24px; margin-top:20px; float:left; margin-left:10px}
.inputtext
{ width:200px; height:25px;
margin-top:20px; background-color:#F3C; margin-left:10px;}
.iputsubmit
{width:100px; height:30px; margin-left:10px; margin-top:20px; background-color:#F3C}
</style>
</head>

<body>
<div class="container">
<form method="post">
<div class="text">Nhập giá trị n</div>
<div><input type="text" name="txttext" class="inputtext"></div>
<div><input type="submit" name="ok" value="Tính toán" class="iputsubmit" /></div>
</form>
<?php
   if(isset($_POST['ok']))
   {
	   $n=$_POST['txttext'];
   echo "Dãy số từ 1 đến ".$n."<br>";
	   for($i=1; $i<=$n;$i++)
	   {if($i%2==0)
	      echo "<font color='#0000FF'>".$i."</font>"." ";
	   else echo "<font color='#FF0000'>".$i."</font>"." ";} 
	}
?>
</div>
</body>
</html>