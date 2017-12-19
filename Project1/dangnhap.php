<?php
	
	?>
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
	@session_start();
	include "menu.php";
	// CODE XU LY
	
	$data = null;
	$loai = new db();
	if(isset($_POST["Login"]))
	{	
		$taikhoan;$matkhau;
		if (isset($_POST["taikhoan"]))
			$taikhoan = $_POST["taikhoan"];
		if (isset($_POST["matkhau"]))
			$matkhau = $_POST["matkhau"];
	
		$data = $loai->queryLogin("select * from thanhvien where taikhoan like :taikhoan and Matkhau like :matkhau",$taikhoan,$matkhau);
	}
	//END CODE XU LY
			if($data != null){
					 $_SESSION['idthanhvien']=$data['0']['Matv'];
	 					$_SESSION['tenthanhvien']=$data['0']['Tentv'];
				//echo $data['0']['Maquyen'];
				//print_r ($data);
				//print_r($data['0']);
				if($data['0']['Maquyen'] == 'admin')
				{
					//header('Location:admin.php');
					?>
                    <script>
					location.replace("admin.php"); 
                    </script>
                    <?php 
                    	
				}
				else
				{
					//print_r($data['0']['Tentv']);
					//$tentv=$data['0']['Tentv'];
					//print_r($ten);
					//header('Location:thanhvien.php?tentv=$tentv');
					//header('Location:thanhvien.php');
					?>
                    <script>
					location.replace("thanhvien.php"); </script>
                    <?php
				}
			}
			?>
<link href="bootstrap3/css/dangnhap.css" rel="stylesheet">
<form class="form-signin" action="dangnhap.php" method="post">
        <h2 class="form-signin-heading">Đăng Nhập</h2>
        <label for="TK" class="sr-only">Tài Khoản</label>
        <input type="text" id="TK" class="form-control" name="taikhoan" placeholder="Tài Khoản" required autofocus>
        <label for="MK" class="sr-only">Mật Khẩu</label>
        <input type="password" id="MK" class="form-control" name="matkhau" placeholder="Mật Khẩu" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lưu Tài Khoản
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="Login" type="submit">Đăng Nhập</button>
        <a href="dangky.php">Đăng ký tài khoản mới</a>
</form>
<br>
<br>
<br>
<br>
<br>
<br>



<!-- InstanceEndEditable -->
<footer class="container-fluid text-center">
  <p>Shop Hoa 24h</p>  
  <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
  <p>Liên Hệ: 01234567890</p>
</footer>

</body>
<!-- InstanceEnd --></html>
