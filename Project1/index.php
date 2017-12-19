
<html lang="en">
<head>
  <title>Shophoa24h.cf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap3/css/sanphamnoibat.css">
  <link rel="stylesheet" href="bootstrap3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="bootstrap3/js/w3.js"></script>
  <script src="bootstrap3/js/jssor.slider.min.js"></script>
  <script src="bootstrap3/js/owl.carousel.min.js"></script>
    <script src="bootstrap3/css/sanphamnoibat.css"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
		
      margin-bottom: 0px;
      border-radius: 10px;
	 
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	ul#crop li:hover ul#down {display: block;}
	#title { 
	width:250px;	
	margin-top:25px;
	margin-bottom:auto;
	margin-left:auto;
	margin-right:auto;
	}
  </style>
  
</head>
<body>
<div class="navbar-collapse>
<div class="jumbotron">
  <div class="container-fluid text-center">
  	<img src="image/banner.jpg" width="100%">
  </div>
</div>"
<?php 
include "menu.php";
?>
<!--MENU-->
<!--END MENU -->
<!--SLIDE SHOW -->
<?php include "slideshow.php";?>

 <!-- SILIDE SHOW END -->
 <!-- DANH SACH SAN PHAM BAN CHAY  -->
    <div class="title_sanpham">
       <div class="panel panel-primary" id="title">
      <div class="panel-heading"> 
        <h3>Hoa nổi bật</h3>
      </div>
       </div>
    </div>
    <?php include "sanphambanchay_list.php"  ?> 
    <!-- HET DANH SACH SAN PHAM BAN CHAY  -->  
    <br>
    </div>
    <div class="title_sanpham">
       <div class="panel panel-primary" id="title">
      <div class="panel-heading"> 
        <h3>Các Loại Hoa   </h3>
      </div>
       </div>
    </div>
	<?php include "listsp.php" ?>
 </div>
 <br>
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>
</div>
</body>
</html>
