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
	include "menu.php"; // THEM MENU
	//CODE XU LY
	$data = null;
	//include "config.php";
	//include "autoload.php";
	$loai = new db();
	
	if(isset($_POST["SignUp"]))
	{
		$tentv;$taikhoan;$matkhau;$sdt;$diachi;$email;
		if (isset($_POST["tentv"]))
			$tentv = $_POST["tentv"];
		if (isset($_POST["taikhoan"]))
			$taikhoan = $_POST["taikhoan"];
		if (isset($_POST["matkhau"]))
			$matkhau = $_POST["matkhau"];
		if (isset($_POST["sdt"]))
			$sdt = $_POST["sdt"];
		if (isset($_POST["diachi"]))
			$diachi = $_POST["diachi"];
		if (isset($_POST["email"]))
			$email = $_POST["email"];
		$query="select * from thanhvien where thanhvien.taikhoan=taikhoan";
		$data=$loai->queryXuatthanhvien1($query, $taikhoan);
		//print_r($data);
		
		function kttv($taikhoan1){
			$loai = new db();
			$query="select * from thanhvien where thanhvien.taikhoan=taikhoan";
		$data=$loai->queryXuatthanhvien1($query, $taikhoan1);
			foreach($data as $key=>$value){
				if($value['Taikhoan']==$taikhoan1){
					return false;
				}
				
			}
			return true;
		}
		
			if(kttv($taikhoan,$data)==false)
				{
				?>
					<script type="text/javascript">
                        alert ("Tài khoản đã tồn tại!!!");
                    </script>
                <?php }
			else{
			
				$query=	"insert into thanhvien (tentv, taikhoan, matkhau, sdt, diachi, email, maquyen)
				values (:tentv,:taikhoan,:matkhau,:sdt,:diachi,:email,'tv')";
				$data=$loai->querySignUp($query,$tentv,$taikhoan,$matkhau,$sdt,$diachi,$email);
				?>
				<script type="text/javascript">
					   alert ("Đăng ký thành công!!!");
				</script>
				<?php
			}
			
			
	}
	?>	
<link href="bootstrap3/css/dangky.css" rel="stylesheet">

      <form class="form-dk" action="dangky.php" method="post">
        <h2 class="form-signin-heading">Đăng Ký</h2>
        <label for="ten" class="sr-only">Họ và Tên</label>
        <input type="text" id="ten" class="form-control"  name="tentv" placeholder="Tên" required autofocus>
        <label for="tk" class="sr-only">Tài Khoản</label>
        <input type="text" id="tk" class="form-control"  name="taikhoan" placeholder="Tài Khoản" required autofocus>
        <label for="mk" class="sr-only">Mật Khẩu</label>
        <input type="password" id="mk" class="form-control" name="matkhau" placeholder="Mật Khẩu" required >
        <label for="sdt" class="sr-only">Số Điện Thoại</label>
        <input type="number" id="sdt" class="form-control" name="sdt" placeholder="Số Điện Thoại" required >
        <label for="dc" class="sr-only">Địa Chỉ</label>
        <input type="text" id="dc" class="form-control" name="diachi" placeholder="Địa Chỉ" required autofocus >
        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required autofocusn >
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="SignUp" >Đăng Ký</button>
      </form>
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
