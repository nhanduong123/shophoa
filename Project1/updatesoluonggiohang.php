<?php
	@session_start();
	$soluong=isset($_GET["soluong"])?$_GET["soluong"]:0;
	$id=isset($_GET["id"])?$_GET["id"]:0;
	if($soluong > 0 )
	{
		if(isset($_SESSION['giohang']))
		{
			for($i =0; $i< count($_SESSION['giohang']); $i++)
			{
				if($_SESSION['giohang'][$i]['Masp']==$id)
				{
					$_SESSION['giohang'][$i]['Soluong']=$soluong;
				}
			}
		}
	}
	header('Location: giohang.php');
?>