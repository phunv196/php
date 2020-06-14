<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Product</title>
<link rel="stylesheet" type="text/css" href="style_listpro.css" />
</head>

<body>
<div class="container"><!--Container-->
<div class="top">
  <div class="texttop"><h3>SHOP VAN VAN</h3></div>
  <div id="menu">
        <ul>
           <li><a href ="Adduser.php">Đăng ký</a></li>
           <li><a href ="login.php">Đăng nhập</a></li>
        </ul></div><!--Top-->
</div>
<div><!--Center-->
  <div class="product">
    <?php 
	 include('connect.php');
	 $page=1; //Gán trang hiện tại là 1
	 $limit=8; //Gán số phần tử tối đa tại mỗi trang là 8
	 $sql="select * from sanpham";
	 $run=mysqli_query($conn,$sql);
	 $num=mysqli_num_rows($run);//Đếm số bản ghi có trong data
	 $totalpage=ceil($num/$limit); //Tính tổng số trang
	 if(isset($_GET['page'])) $page=$_GET['page'];
	 if($page<1) $page=1;
	 else if($totalpage<$page) $page=$totalpage;
	 $start=($page-1)*$limit; //Xác dịnh điểm bắt đầu của trang
	 $sql_page="select * from sanpham limit $start,$limit";
	 $run_page=mysqli_query($conn,$sql_page);
	 while($row=mysqli_fetch_array($run_page))
	 {
	?>
    <div class="item">
       <img src="img/<?php echo $row['picture'];?>" width="120px" height="150px" /></br>
         <?php echo $row['name'];?>
         <?php echo $row['money'];?>
      <a href="des_product?ct=<?php echo $row['code'];?>">Chi tiết</a>
      </div> 
    <?php }?>
     
     </div>
     </div>
     <div class="botom">
     <div class="page">
     <?php 
      for($i=1;$i<=$totalpage; $i++)
	  {
		  if($i==$page) echo '<span>'.$i.'</span>';
		  else
		  echo '<a href="List_Product.php?page='.$i.'"> '.$i.'</a>';
	   }
	  ?>
        </div> <!--Phân trang-->
     <p>Design VanVan 2020</p></div><!--botom-->
</div>
</body>
</html>