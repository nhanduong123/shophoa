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
<?php 
 include "menu.php";
 $key=$_GET["id"];
$hoa = new sanpham();
$data = $hoa->getdanhmucsp($key);
//var_dump($data);
//echo($key);
?>
<div class="container" > 
 <?php foreach($data as $row)
		{
		?> 
        <div class="col-sm-4">
        	<div class="row">
            		<div class="panel panel-success">
  						<div class="panel-heading">
    						<div class="panel-body">
     						 	<div  class="panel-footer">
        							<div class="panel-heading"><a href="./sanpham.php?id=<?php echo $row["Masp"]; ?>"><?php echo $row["Tensp"]; ?></a></div>
        							<div class="panel-body"><a href="./sanpham.php?id=<?php echo $row["Masp"]; ?>"><img src="<?php echo $row["Hinhanh"]; ?>" class="img-responsive"></a></div>
       								 <div class="panel-footer" align="center"> 
                                     
                                     	<div><a href="#"><?php echo $row["Dongia"]; ?> VND</a></div>
                                     	<div><a href="dangnhap.php"> <button type="button" class="btn btn-danger">Đặt Mua</button></a></div>
                                        </div>
      							</div>
    						</div>
               			 </div>
                </div>
   			 </div>
   		</div>  
<?php } ?>
</div>

<!-- InstanceEndEditable -->
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>

</body>
<!-- InstanceEnd --></html>
