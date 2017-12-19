<?php
	@session_start();
	$id=isset($_GET["xoagiohang"])?$_GET["xoagiohang"]:0;

	if(isset($_SESSION['giohang']))
	{
		for($i =0; $i< count($_SESSION['giohang']); $i++)
		{
			if($_SESSION['giohang'][$i]['Masp']==$id)
			{
				unset($_SESSION['giohang'][$i]);
			}
		}
	}
	header('Location:giohang.php');
?>