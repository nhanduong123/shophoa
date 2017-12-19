
	<?php
	include "config.php";
 	include "autoload.php";
	include "./class/db.class.php";
	include "./class/loai.class.php";
	include "./class/chitietloaisp.class.php";
	//NAP MENU CHINH
	$loaisp= new loai();
	$data = $loaisp->getAll();
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
        <li><a href="index.php">Trang Chủ</a></li>
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
          			<a href="./danhmucsp.php?id=<?php echo $row1["Maloaict"]; ?>"><?php echo $row1["Tenct"];?></a>
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
        <li><a href="dangnhap.php"><span class="glyphicon glyphicon-user"></span>Tài Khoản</a></li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ Hàng</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<?php  ?>