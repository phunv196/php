<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<style>
.product
{margin-top:50px;
background-color:#FF9;}
.product>.item
{
 width:150px;
 background-color:#C36;
 padding:20px;
 float:left;
}
.product>.item>img
{width:150px;
 height:150px;}
</style>

</head>

<body>
<div class="product">
 <?php 
	 include('connect.php');
	 $sql="select * from sanpham";
	 $run=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_array($run))
	 {
	?>
    <div class="item">
       <img src="img/<?php echo $row['picture'];?>" /></br>
         <?php echo $row['name'];?>
         <?php echo $row['money'];?>
      <a href="des_product?ct=<?php echo $row['code'];?>">Chi tiết</a>
     </div>
    <?php }?>
  </div>
</body>
</html>