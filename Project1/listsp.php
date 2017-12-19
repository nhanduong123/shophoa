<?php
 //include "config.php";
 //include "autoload.php";
 //include "./class/db.class.php";
 //include "./class/sanpham.class.php";
 $hoa = new sanpham();
$data = $hoa->getAll();
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
        
<?php } 
