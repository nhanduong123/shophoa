<?php
function loadClass($c)
{
	include ROOT."./Project/class/".$c.".class.php";	
}
spl_autoload_register("loadClass");
