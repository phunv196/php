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
           <li><a href ="Admin.php">Sản phẩm</a></li>
           <li><a href ="list_user.php">Khách hàng</a></li>
        </ul></div><!--Top-->
</div>
<div><!--Center-->
  <div class="product">
    <?php 
	 include('connect.php');
	 $page=1;
	 $limit=8; // Số bản ghi trên mỗi trang 
	 $sql="select * from sanpham";
	 $run=mysqli_query($conn,$sql); 
	 $num=mysqli_num_rows($run);// Số bản ghi trong database
	     $totalpage=ceil($num/$limit); // tong so trang
	     if(isset($_GET['page']))
	            $page=$_GET['page'];
		 if($page<1) {$page=1;} //Giới hạn trang từ 1..n
		else if($page>$totalpage) { $page=$totalpage;}
			$start=($page-1)*$limit;
	 $sql_select="select * from sanpham limit $start,$limit";
	 $run_select=mysqli_query($conn,$sql_select);
	 while($row=mysqli_fetch_array($run_select))
	 {
	?>
    <div class="item">
       <img src="img/<?php echo $row['picture'];?>" width="120px" height="150px" /></br>
         <?php echo $row['name'];?>
         <?php echo $row['money'];?><br />
      <a href="del_product.php?ma=<?php echo $row['code'];?>" onclick="if(confirm('Bạn có chắc chắn xóa?'))returntrue; else return false;">Delete</a>
      <a href="edit_product.php?ma=<?php echo $row['code'];?>">Edit</a>
      </div> 
    <?php }?>
     
     </div>
     
     </div>
     <div class="botom">
	 <div class="page"> <!--hiển thị trang-->
        
		<?php 
		for($i=1; $i<=$totalpage;$i++)
	    { 
         if($i==$page)
		     { echo '<span>'.$i.'</span>'.' ';}
		else 
		      {
				  echo '<a href="Admin.php?page='.$i.'">'.$i.'</a>';
			  }
		}
		if($page<$totalpage && $totalpage>1)
		echo '<a href="Admin.php?page='.($page+1).'">.Next.</a>';				 
	?>			 		 
     </div>  <!--hết hiển thịtrang-->
	 <p>Design VanVan 2020</p></div><!--botom
</div>
</body>
</html>