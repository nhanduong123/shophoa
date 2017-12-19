<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
// include "config.php";
 //include "autoload.php";
// include "./class/db.class.php";
 include "./class/sanpham.class.php";
 $hoa = new sanpham();
$data = $hoa->getspHot();

 ?>
 <div class="container">  
 <div class="row"> 
  <div class="col-md-12"> 
   <div id="Carousel" class="carousel slide"> 
    <ol class="carousel-indicators"> 
     <li data-target="#Carousel" data-slide-to="0" class="active"></li> 
     <li data-target="#Carousel" data-slide-to="1"></li> 
     <li data-target="#Carousel" data-slide-to="2"></li> 
    </ol> 
    <div class="carousel-inner"> 
 <?php $i=0; foreach($data as $row):
		 $i++;
			
		?>
        
     <div class="item <?php if ($i == 1) echo "active";?>"> 
      <div class="row"> 
      <?php foreach ($row as $v): ?>
       <div class="col-md-3">
       <div class="panel-heading"><a href="./sanpham.php?id=<?php echo $v["Masp"]; ?>" ><?php echo $v["Tensp"]; ?></a></div>
       <div><a href="./sanpham.php?id=<?php echo $v["Masp"]; ?>" class="thumbnail"><img src="<?php echo $v["Hinhanh"]; ?>" alt="Image" style="max-width:100%;"></a></div>
       </div>
       <?php endforeach; ?>
      </div> 
     </div> 
    
 <?php endforeach; ?>
 </div> <!--<a data-slide="prev" class="left carousel-control"><</a> 
    <a data-slide="next" class="right carousel-control">></a> -->
   </div> 
  </div> 
 </div>
 </div>
<style type="text/css">body {  
padding-top:20px;
}
.carousel { 
margin-bottom: 0;   
padding: 0 40px 30px 40px;
}
 
.carousel-control { 
left: -12px;    
height: 40px;   
width: 40px;    
background: none repeat scroll 0 0 #222222; 
border: 4px solid #FFFFFF;  
border-radius: 23px 23px 23px 23px; 
margin-top: 90px;
}
 
.carousel-control.right {   
right: -12px;
}
 
.carousel-indicators {  
right: 50%; top: auto;  
bottom: -10px;  margin-right: -19px;
}
/* The colour of the indicators */
.carousel-indicators li {   
background: #cecece;
}
.carousel-indicators .active {  
background: #428bca;
}</style>
<script type="text/javascript">
	$(document).ready(function() 
	{    
		$('#Carousel').carousel({   interval: 5000    })} );  </script>