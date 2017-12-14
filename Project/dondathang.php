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
 include "menuthanhvien.php";
?>
<link href="bootstrap3/css/dangky.css" rel="stylesheet">
<div class="container">
      <form class="form-dk" action="dondathang.php" ng-app="donhangapp" method="post">
        <h2 class="form-signin-heading">Đặt Hàng</h2>
        <label for="tsp" class="sr-only">Địa chỉ</label>
         <input type="text" id="dc" class="form-control" name="diachi"  placeholder="Địa chỉ nhận hàng" required autofocus>
        <label for="ten" class="sr-only">Tên người nhận</label>
        <input type="text" id="ten" class="form-control" name="tennhan" placeholder="Tên Người nhận"  ng-minlength="6" required>
        <label for="email" class="sr-only">Địa chỉ email</label>
        <input id="email" class="form-control" name="email"  type="email" placeholder="Địa chị email" required>
        <label for="sdt" class="sr-only">Số điện thoại</label>
         <input type="number" id="sdt" class="form-control" name="sdt" type="number" placeholder="Số điện thoại" required autofocus>
          <label for="mota" class="sr-only">Mota</label>
         <input type="text" id="mota" class="form-control" name="mota" type="text" placeholder="Mô tả" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" name="donhang" type="submit">Đặt hàng</button>
      </form>
</div>
</br>
</br>

 
<?php
@session_start();
$dc=''; $ten=''; $mail=''; $dt=''; $mota='';
if (isset($_POST["diachi"])) $dc=$_POST["diachi"];
if (isset($_POST["tennhan"])) $ten=$_POST["tennhan"];
if (isset($_POST["email"])) $mail=$_POST["email"];
if (isset($_POST["sdt"])) $dt=$_POST["sdt"];
if (isset($_POST["mota"])) $mota=$_POST["mota"];
if(isset($_SESSION['idthanhvien'])) $idthanhvien=$_SESSION['idthanhvien'];
//$ngay='CURRENT_TIMESTAMP';
//$trangthai=1;
$tv= new db();

$sql = "INSERT INTO `donhang` (`matv`, `tennguoinhan`, `sdt`, `diachi`, `email`, `ngaydat`, `trangthai`) 
			VALUES (:idthanhvien, :ten, :sdt, :diachi, :email,CURRENT_TIMESTAMP,'1')";
$tv->queryadddonhang($sql,$idthanhvien,$ten,$dt,$dc,$mail);
//var_dump($tv);
if(isset($tv))
{	
	for($i=0;$i<count($_SESSION['giohang']);$i++)
	{
	$sp= new sanpham();
	$id1=$sp->layid();
	$datagia=$sp->laygia();
	$gia=$datagia[0]['Dongia'];
	$idlay=$id1[0]['max(madh)'];
	$spdat=$_SESSION['giohang'][$i]["Masp"];
	$sld=$_SESSION['giohang'][$i]["Soluong"];
	$xl=new db();
	$sql1="INSERT INTO `chitietdonhang` (`madh`, `masp`, `soluong`, `tongtien`, `mota`) 
				VALUES ('$idlay', '$spdat', '$sld', '$gia', '$mota')";
	$xl->query($sql1);
	//unset();
	}

}
else
{
	echo "ko them dc cai gi het";
}
?>
<script>
	//alert("dat mua thanh cong ban se chuyen ve trang chu !");
	//location.replace("thanhvien.php"); 
</script> 
<?php
	//unset($_SESSION['giohang']);
	//header("Location : thanhvien.php");
?>
<!-- InstanceEndEditable -->
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>

</body>
<!-- InstanceEnd --></html>
