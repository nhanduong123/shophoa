<?php 
class chitietloaisp extends db 
{
	public function getct()
	{
		$sql = "SELECT *
				FROM chitietloaisp";
		return $this->query($sql);
	}
	public function gettenct($key)
	{
		$arr=array("$key");
		$sql="SELECT
			chitietloaisp.Tenct,
			chitietloaisp.Maloaict
			FROM
			chitietloaisp
			WHERE
			chitietloaisp.Maloai=?";
		return $this->query($sql,$arr);
	}
	public function countrow($key)
	{
		$sql ="SELECT 
				COUNT(Maloaict) 
				FROM 
				chitietloaisp
				WHERE
				chitietloaisp.Maloai='$key'
		";
		return $this->query($sql);
	}
}
?>