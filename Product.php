<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Product</title>
<link rel="stylesheet" type="text/css" href="style_sp.css" />
</head>

<body>
<div class="container">
   <div class="top">
           <div class="texttop"><h2>SHOP VANVAN</h2></div>
   </div>
   <div class="center">
 <form method="post" enctype="multipart/form-data">
     <div class="textcenter"> Name Product</div>
         <div><input type="text" name="txtname" class="inputcenter" /></div>
     <div class="textcenter"> Code Product</div>
          <div><input type="text" name="txtcode" class="selectcenter" /></div>
     <div class="textcenter"> Category</div>
          <div>
          <select class="selectcenter" name="txtcate">
             <option>Choice category</option>
          </select>
          </div>
     <div class="textcenter"> Money</div>
          <div><input type="text" name="txtmoney" class="selectcenter" /></div>
     <div class="textcenter"> Description</div>
          <div><textarea class="textareacenter" name="txtdes"></textarea></div>
     <div class="textcenter"> Picture</div>
          <div><input type="file" name="txtpic" class="inputcenter" /></div>
     <div><input type="submit" class="submit" name="ok" value="Add Product" /></div>
    </form>
   <?php
   include('connect.php');
   if(isset($_POST['ok']))
   {
   move_uploaded_file($_FILES['txtpic']['tmp_name'],'img/'.$_FILES['txtpic']['name']);
  $sql="insert into sanpham values('".$_POST['txtname']."','".$_POST['txtcode']."','".$_POST['txtcate']."','".$_POST['txtmoney']."','".$_POST['txtdes']."','".$_FILES['txtpic']['name']."')";
  $run=mysqli_query($conn,$sql);
  if($run) echo "<script>alert('Succecful!')</script>";
  else echo "<script>alert('Not Succecful!')</script>";
   }
   ?> 
   </div>
   <div class="textbottom">Design by vanvan</div>
</div>
</body>
</html>