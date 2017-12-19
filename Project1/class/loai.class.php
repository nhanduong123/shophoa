<?php 
class loai extends db 
{
	public function getAll()
	{
		$sql = "SELECT *
				FROM loai";
		return $this->query($sql);
	}
}
?>