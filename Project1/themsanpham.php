<?php
	$data = null;
	include "config.php";
	include "autoload.php";
	$loai = new db();
	
	if(isset($_POST["themsanpham"]))
	{
		$masp;$mancc;$maloai;$tensp;$mota;$hinhanh;$soluong;$dongia;
		if (isset($_POST["masp"]))
			$masp = $_POST["masp"];
		if (isset($_POST["mancc"]))
			$mancc = $_POST["mancc"];
		if (isset($_POST["maloaict"]))
			$maloaict = $_POST["maloaict"];
		if (isset($_POST["tensp"]))
			$tensp = $_POST["tensp"];
		if (isset($_POST["mota"]))
			$mota = $_POST["mota"];
		if (isset($_POST["hinhanh"]))
			$hinhanh = $_POST["hinhanh"];
		if (isset($_POST["soluong"]))
			$soluong = $_POST["soluong"];
		if (isset($_POST["dongia"]))
			$dongia = $_POST["dongia"];
		$query="select * from sanpham where sanpham.masp=masp";
		$data=$loai->queryXuatsanpham($query, $masp);
		function ktsp($masp1){
			$loai = new db();
			$query="select * from sanpham where sanpham.masp=masp";
			$data=$loai->queryXuatsanpham($query, $masp1);
			foreach($data as $key=>$value){
				if($value['Masp']==$masp1){
					return false;
				}
				
			}
			return true;
		}
		
			if(ktsp($masp,$data)==false)
				{
				?>
					<script type="text/javascript">
                        alert ("Sản phẩm đã có!!!");
                    </script>
                <?php }
			else{
			
				$query=	"insert into sanpham (masp, mancc, maloaict, tensp, mota, hinhanh, soluong, dongia)
				values (:masp,:mancc,:maloaict,:tensp,:mota,:hinhanh,:soluong,:dongia)";
				$data=$loai->queryThemsp($query,$masp,$mancc,$maloaict,$tensp,$mota,$hinhanh,$soluong,$dongia);
				?>
				<script type="text/javascript">
					   alert ("Thêm thành công!!!");
				</script>
				<?php
			}
				
	}
	?>

<!DOCTYPE html>
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
  <script src="bootstrap3/js/w3.js"></script>
  <script src="bootstrap3/js/jssor.slider.min.js"></script>
  <script src="bootstrap3/js/owl.carousel.min.js"></script>
    <script src="bootstrap3/css/sanphamnoibat.css"></script>
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
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	ul#crop li:hover ul#down {display: block;}
  </style>
</head>
<body>
<div class="navbar-collapse>
<div class="jumbotron">
  <div class="container text-center">
  	<img src="image/banner.jpg" width="100%">
  </div>
</div>
</div>"
<nav class="navbar navbar-inverse" id="mynav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="crop">
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lý Sản Phẩm
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="down">
          <li><a href="themsanpham.php">Thêm sản phẩm</a></li>
          <li><a href="xoasanpham.php">Xóa sản phẩm</a></li>
          <li><a href="capnhatsp.php">Cập nhật sản phẩm</a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lý Thành Viên
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="down">
          <li><a href="xoathanhvien.php">Xóa thành viên</a></li>
          <li><a href="capnhattv.php">Cập nhật thành viên</a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lý Nhà Cung Cấp
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="down">
          <li><a href="themnhacungcap.php">Thêm nhà cung cấp</a></li>
          <li><a href="xoanhacungcap.php">Xóa nhà cung cấp</a></li>
          <li><a href="capnhatncc.php">Cập nhật nhà cung cấp</a></li>
        </ul>
      </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lý Đơn Đặt Hàng
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="down">
          <li><a href="xoadonhang.php">Xóa đơn hàng</a></li>
          <li><a href="xemdonhang.php">Xem đơn hàng</a></li>
        </ul>
      </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span>Admin</a></li>
        <li><a href="index.php">Đăng Xuất</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--SLIDE SHOW -->
<div style="margin:0;padding:0;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; background-color: #FFF;">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script type="text/javascript" src="bootstrap3/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap3/js/jssor.slider.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

		.title_sanpham {width: 100%; float: left; position: relative;text-align: center;}
        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>

    <!-- SILIDE SHOW END -->
    <!-- DANH SACH SAN PHAM BAN CHAY  -->
    <link href="bootstrap3/css/dangky.css" rel="stylesheet">
<div class="container">

      <form class="form-dk" action="themsanpham.php" method="post">
        <h2 class="form-signin-heading">Thêm Sản Phẩm</h2>
        <label for="tsp" class="sr-only">Tên sản phẩm</label>
        <input type="text" id="tsp" class="form-control" name="tensp" placeholder="Tên sản phẩm" required autofocus>
        <label for="masp" class="sr-only">Mã Sản Phẩm</label>
        <input type="text" id="masp" class="form-control" name="masp" placeholder="Mã sản phẩm" required>
        <label for="ml" class="sr-only">Mã Loại</label>
        <input type="text" id="ml" class="form-control" name="maloaict" placeholder="Mã loại" required>
        <label for="mancc" class="sr-only">Mã Nhà Cung Cấp</label>
        <input type="text" id="mancc" class="form-control" name="mancc" placeholder="Mã Nhà cung cấp" required>
        <label for="mota" class="sr-only">Mô Tả</label>
        <input type="text" id="mota" class="form-control" name="mota" placeholder="Mô tả" required>
        <label for="sl" class="sr-only">Số Lượng</label>
        <input type="text" id="mota" class="form-control" name="soluong" placeholder="Số lượng" required>
        <label for="dongia" class="sr-only">Đơn Giá</label>
        <input type="text" id="dongia" class="form-control" name="dongia" placeholder="Đơn giá" required autofocus>
        <label for="hinh" class="sr-only">Hình Ảnh</label>
        <input type="file" id="hinh" class="form-control" name="hinhanh" value="Chọn hình">
        <button class="btn btn-lg btn-primary btn-block" name="themsanpham" type="submit">Thêm Sản Phẩm</button>
      </form>

    </div>
    <br>
    <br>
    <br>
    <br>
	<br>
    <br>
    <br>
    
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>

</body>
</html>
