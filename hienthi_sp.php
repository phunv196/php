<?php 
	 include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>select</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean">
    <div class="container"><a class="navbar-brand" href="#">Company Name</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li role="presentation" class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#">Dropdown </a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" class="dropdown-item" href="#">First Item</a><a role="presentation" class="dropdown-item" href="#">Second Item</a><a role="presentation" class="dropdown-item" href="#">Third Item</a></div>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="photo-gallery">
    
        <div class="container">
            <div class="intro">
                <h2 class="text-center">DANH SÁCH SẢN PHẨM</h2>
                <p class="text-center">Sản phẩm Shop VANVAN </p>
            </div>
            <div class="row photos">
             <?php 
	 
	 $sql="select * from sanpham";
	 $run=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_array($run))
	 {
	?>
    <div class="col-sm-6 col-md-4 col-lg-3 item">
    <a data-lightbox="photos" href="des_product.php?des=<?php echo $row['code']?>"><img class="img-fluid" src="img/<?php echo $row['picture']?>">
    </a>
    <?php echo $row['name'];?></br>
    <?php echo $row['money'];?>
    <a href="des_product.php?des=<?php echo $row['code']?>">Chi tiết </a>
                </div>
      <?php }?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>