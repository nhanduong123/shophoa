
	<?php
	include "config.php";
 	include "autoload.php";
	include "./class/db.class.php";
	include "./class/loai.class.php";
	include "./class/chitietloaisp.class.php";
	include "./class/sanpham.class.php";
	include "./class/cart.class.php";
	include "dinhdanggiohang.php";
	//NAP MENU CHINH
	$loaisp= new loai();
	$data = $loaisp->getAll();
	@session_start();
	$ten;
	if(isset($_SESSION['tenthanhvien']))
	{
		$ten=$_SESSION['tenthanhvien'];
	}
	if(isset($_GET['addgiohang']))
	{
		$id=$_GET['addgiohang'];
		if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang']))
		{
			$count= count($_SESSION['giohang']);
			$flag=false;
			for($i=1;$i<$count;$i++)
			{
				if($_SESSION['giohang'][$i]['Masp']==$id)
				{
					$_SESSION['giohang'][$i]["Soluong"] +=1;
					$flag=true;
					break;
				}
			}
			if($flag==false)
			{
				$_SESSION['giohang'][$i]['Masp']=$id;
				$_SESSION['giohang'][$i]["Soluong"] =1;
			}
		}
		else
		{
			$_SESSION['giohang']=array();
			$_SESSION['giohang'][0]['Masp']=$id;
			$_SESSION['giohang'][0]["Soluong"] =1;
		}
		 header("Location: thanhvien.php");
	}
?>
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
        <li><a href="thanhvien.php">Trang Chủ</a></li>
        <?php foreach($data as $row){ 
		$id=$row["Maloai"];
		$chitiet= new chitietloaisp();
		//$count=$chitiet->countrow($id);
		?>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $row["Tenloai"]?>
      	 <span class="caret"></span></a>
       
        	<?php 
			//for($i=1; $i<=$count;$i++)
				
			//{ 	
			$data1 = $chitiet->gettenct($id);
			echo '<ul class="dropdown-menu" id="down">';
			foreach($data1 as $row1):
				//var_dump($data1);
				?>
             
         		 <li>
          			<a href="./danhmucspthanhvien.php?id=<?php echo $row1["Maloaict"]; ?>"><?php echo $row1["Tenct"];?></a>
         		</li>
        	
         <?php endforeach;
		 echo "</ul>";
			//}
		 ?>
         
      </li>
     
      </li> 
     
      <?php } ?>
       <!-- <li><a href="dangnhap.php">Thanh Toán</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Chào <?php echo $ten; ?></a></li>
        <li><a href="dangxuat.php">Đăng Xuất</a></li>
        
        <!-- GIO HANG -->
        
        <li>
				<a href="giohang.php?key=<?php 
				//for(int
				//echo $_GET['addgiohang']; 
				
				?>">
					<strong class="active-color">
					<i class="glyphicon glyphicon-shopping-cart">&nbsp;</i>
							<?php if(isset($_SESSION['giohang']))
							{ echo count($_SESSION['giohang']); }
							else echo 0;
							//echo $addcart->getNumItem();
							//echo $addcart->show();

							?>
					</strong>
						loại hoa
						&nbsp;|&nbsp;
					<strong class="active-color">
                   			
						<?php
							//$hoa = new sanpham();
//							//$data2= $hoa->getsp(); 
//						if(isset($_SESSION['giohang']))
//							{
//								$tongtien=0;
//								for($i=0;$i<count($_SESSION['giohang']);$i++)
//								{	$gia=0;
//									$key=$_SESSION["$i"]["Masp"];
//									$data2= $hoa->getsp($key);
//									foreach($data2 as $col)
//									{
//										
//										$gia=$col['Dongia'];
//										
//									}
//									$sl=$_SESSION[$i]['Soluong'];
//									$tien=$sl*$gia;
//								}
//								echo $tongtien+=$tien;
							// }?>
					</strong>
				</a>
	
        </li>
        <!--END GIO HANG -->
      </ul>
      </ul>
    </div>
  </div>
</nav>
<?php  ?>