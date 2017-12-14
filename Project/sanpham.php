<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Shophoa24h.cf</title>
<!-- InstanceEndEditable -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap3/js/w3.js"></script>
  <script src="bootstrap3/js/jssor.slider.min.js"></script>
  	
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
	 
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
	ul#crop li:hover ul#down {display: block;}
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
  	<img src="image/banner.jpg" width="100%">
  </div>
</div>
<!-- InstanceBeginEditable name="NoiDung" -->
<link rel="stylesheet" href="bootstrap3/css/sanpham.css">
<link rel="stylesheet" href="bootstrap3/css/font-awesome.min.css">
<?php
 //include "config.php";
 //include "autoload.php";
 include "menu.php";
 $hoa = new sanpham();
 $key=$_GET["id"];
$data = $hoa->getsp($key);
//$row = $data->fetch(PDO::FETCH_ASSOC);
foreach($data as $row)
{	//var_dump($data);
?>
<div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"><img src="<?php echo $row["Hinhanh"];?>" alt="">
      </div> 
      <!-- THEM HINH ANH VAO SAN PHAM CHUA CO HINH NEN KO THEM -->
      <div class="tab-pane" id="pic-2"><img src="image/chucmung/hoa2.PNG" alt="aibiet">
      </div> 
      <div class="tab-pane" id="pic-3"><img src="image/chucmung/hoa3.png" alt="aibiet">
      </div> 
      <div class="tab-pane" id="pic-4"><img src="image/chucmung/hoa4.PNG" alt="aibiet">
      </div> 
      <div class="tab-pane" id="pic-5"><img src="image/chucmung/hoa7.png" alt="aibiet">
      </div> 
     </div> 
     <ul class="preview-thumbnail nav nav-tabs"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align=center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial"></div><div class="menu-icon"><span></span></div> 
      <!-- DUOI DAY THEM HINH PHAI GIONG THEO THU TU O TREN -->
      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="image/hoabinh/hoa1.png" alt="aibiet"></a>
      </li> 
      <li><a data-target="#pic-2" data-toggle="tab"><img src="image/hoabinh/hoa8.png" alt="aibiet"></a>
      </li> 
      <li><a data-target="#pic-3" data-toggle="tab"><img src="image/hoabinh/hoa2.PNG" alt="aibiet"></a>
      </li> 
      <li><a data-target="#pic-4" data-toggle="tab"><img src="image/hoabinh/hoa7.PNG" alt="aibiet"></a>
      </li> 
     </ul> 
    </div> 
    <div class="details col-md-6"> 
     <h3 class="product-title"><?php echo $row["Tensp"]; ?></h3> 
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
      </div> <span class="review-no">Mã Sản Phẩm : <strong><?php echo $row["Masp"]; ?></strong></span> 
     </div> 
     <p class="product-description">Mô tả : <?php echo $row["Mota"]; ?> <br> Nhà Cung Cấp :<strong><?php echo $row["Tenncc"] ?></strong> 
     <br> Loại Sản Phẩm :<strong> <?php echo $row["Tenct"]; ?></strong> </p> 
     <h4 class="price">Giá bán: <?php echo $row["Dongia"]; ?> VND</h4> 
     <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(999 bình chọn)</strong>
     </p> 
     <div class="action"> <a href="#" target="_blank">            
     <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button>            
     </a> <a href="#" target="_blank">            
     <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>           
      </a> 
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div> 
<?php } ?>



<!-- InstanceEndEditable -->
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>

</body>
<!-- InstanceEnd --></html>
