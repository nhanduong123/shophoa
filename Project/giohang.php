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
session_start();
include "menuthanhvien.php";
include "dinhdanggiohang.php";
$hoa = new sanpham();
$masp='Masp';
$sl='Soluong';
if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
$data1=$_SESSION['giohang'];
//print_r($data1);
?> <!-- ttieu de-->
<div class="page-block page-block-bottom cream-bg grid-container">
	<div class="content-holder grid-100">
    
		<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
			<div class="well-box-middle grid-60 tablet-grid-60">Sản Phẩm</div>
				<div class="well-box-middle align-center grid-10 tablet-grid-10">Số lượng</div>
					<div class="well-box-middle align-center grid-15 tablet-grid-15">Giá</div>
						<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Tổng Giá</div>
		</div>
<!-- end tieu de -->
	
	<?php
	$s=0;
	$tongtien=0;
foreach($data1 as $values )
{	
	$key=$values['Masp'];
	$data = $hoa->getsp($key);
	$t=$values['Soluong'];
	//var_dump($data);
//session_destroy();
?>

       
 <?php 
		//for($i=0;$i<=count($data1);$i++)
		foreach($data as $row)
		{
			 	$t1=$row['Dongia'];
							?>
    <!-- SAN PHAM HIEN THI -->
            <div class="cart-product well-table light-bg">
            	<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
            	<a href="sanphamtv.php?id=<?php ?>" title="Tommy Mancini">
            <img src="<?php echo $row['Hinhanh'];?>" alt="" />
            </a>
            </div>
            <div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
            <div class="cart-product-info">
            
            <div class="cart-product-title">
            <a href="./sanphamtv.php?id=<?php echo $row["Masp"]; ?>" title="tenhoa" class="header-font dark-color active-hover"><strong><?php echo $row['Tensp']; ?></strong></a>
            <a href="./danhmucspthanhvien.php?id=<?php echo $row["Maloaict"]; ?>" title="sửa sản phẩm" 
            class="cart-product-category middle-color dark-hover"><?php echo $row['Tenct'];?></a>
            </div>
            
            <div class="cart-product-options">
            
            </div>
            
            </div>
             
            </div>
            
            <div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
            <input type="text" name="product-quantity[]" 
            class="text-input product-quantity dark-color light-bg" value="<?php echo $values['Soluong'];?>" onclick="$(this).select()" />
            </div>
            <div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
            <strong><?php $t2=$t1; echo number_format($t2); ?></strong>
            </div>
            <div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
            <strong><?php  $s=$t*$t1; $tongtien+=$s; $s1=$s; echo number_format($s1);
			?></strong>
            </div>
            <a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" 
            target="_blank" onClick="<?php unset($row['Masp']);?>"><span class="cancel"></span></a>
            </div>
 <?php //} 
		}
	}
	$_SESSION['tongtien']=$tongtien;
	var_dump($_SESSION['tongtien']);
	}else
	{
		echo "bạn chưa đặt sản phẩm";
	}
	
		?>
<!--- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="well-shadow well-box last light-bg align-right">
<dl class="cart-total clearfix">
<dt class="uppercase dark-color">Thành Tiền:</dt>
<dd class="active-color"><?php echo number_format($tongtien);?> VND</dd>
</dl>
<a href="dondathang.php" class="button-normal button-with-icon light-color active-gradient dark-gradient-hover">
Đặt Hàng <span><i class="glyphicon glyphicon-shopping-cart""></i></span>
</a>
</div>
        
    <!-- END -->

</div>

<!-- InstanceEndEditable -->
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>

</body>
<!-- InstanceEnd --></html>
