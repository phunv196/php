<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chủng loại sản phẩm</title>
<style>
.grid-container
  {   display:grid;
	  background-color:#FFC;
	  padding:10px;
	  width:250px;
	  height:350px;
	  margin-left:300px;
  }
.grid-container > div
  {   background-color:rgba(255,255,2500,0.5);
	  font-family:"Courier New", Courier, monospace;
	  font-size:18px;
	  margin-top:10px;
	  text-align:center
  }
</style>
</head>

<body>
<a href="insert_cate.php">Thêm mới loại sản phẩm </a>
<div class="grid-container">
<div><form method="post"><input type="search" name="txt_se">
<input type="submit" name="ok" value="Search"></form></div>
<div><!--Product -->	
  <div> <!--Product item -->
     <?php 
	 include('function.php');
      $row=select_cate();
     foreach($row as $num)
      {echo $num['namecate']."<br>";
	 
	?><br>
     <a href="Delete_quequan.php?maque=<?php echo $row['ID_ad'];?>" onclick="if(confirm('Bạn có chắc chắn xóa không?')) return true; else return false;">Delete</a>
     <a href="Edit_quequan.php?maque=<?php echo $row['ID_ad']?>">Edit</a>
     <?php }?>
</div>


</div>
</body>
</html>