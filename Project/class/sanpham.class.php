<?php
class sanpham extends db
{
	//private $_page_size =6;
	//private $_page_count;
	public function getRand($n)
	{
		$sql="select Masp, Tensp, Hinhanh from sanpham order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	/*public function getDetail($mahoa)
	{
		$sql="select sanpham.*, Tenncc, Tenloai 
			from sanpham, nhacungcap, loai
			where sanpham.Maloai = loai.Maloai
				and sanpham.Mancc = nhacungcap.Mancc
				and book_id=@mahoa ";
		$arr = array("@Masp"=>$mahoa);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}*/
	function getAll()
	{
		$sql="select * from sanpham order by rand() limit 6";
		return $this->query($sql);
	}
	function getspHot()
	{
		$sql="select * from sanpham order by rand() limit 12";
		$data = $this->query($sql);
		$data2 = array();
		$i = -1;
		$j = 1;
		foreach($data as $v){
			$i++;
			if ($i%4 == 0){
				$j +=$i/4;
			}
			$data2[$j][] = $v;
		}
		return $data2;
	}
	/*function getAll()
	{
		$offset = ($currPage - 1) * $this->_page_size;
		$sql="SELECT
				Count(*)
				FROM
				loai
				INNER JOIN sanpham ON sanpham.Maloai = loai.Maloai
				INNER JOIN nhacungcap ON sanpham.Mancc = nhacungcap.Mancc";
				$n  = $this->count($sql);
				$this->_page_count = ceil($n/$this->_page_size);
		$sql="SELECT
				sanpham.Masp,
				sanpham.Tensp,
				sanpham.Mota,
				sanpham.Dongia,
				sanpham.Hinhanh,
				sanpham.Mancc,
				sanpham.Maloai,
				loai.Tenloai,
				nhacungcap.Tenncc
				FROM
				loai
				INNER JOIN sanpham ON sanpham.Maloai = loai.Maloai
				INNER JOIN nhacungcap ON sanpham.Mancc = nhacungcap.Mancc" . $this->_page_size;
		
		return $this->query($sql);	
	}*/
	
	/*function search($currPage=1)
	{
		$key = Utils::getIndex("key");
		$arr = array(":Tensp"=>"%". $key ."%");
		
		$offset = ($currPage -1) * $this->_page_size;
		$sql="SELECT
				Count(*)
				FROM
				category
				loai
				INNER JOIN sanpham ON sanpham.Maloai = loai.Maloai
				INNER JOIN nhacungcap ON sanpham.Mancc = nhacungcap.Mancc
				where Tensp like :Tensp	";
				$n  = $this->count($sql, $arr);
				$this->_page_count = ceil($n/$this->_page_size);
		$sql="SELECT
				sanpham.Masp,
				sanpham.Tensp,
				sanpham.Mota,
				sanpham.Dongia,
				sanpham.Hinhanh,
				sanpham.Mancc,
				sanpham.Maloai,
				loai.Tenloai,
				nhacungcap.Tenncc
				FROM
				loai
				INNER JOIN sanpham ON sanpham.Maloai = loai.Maloai
				INNER JOIN nhacungcap ON sanpham.Mancc = nhacungcap.Mancc
				where Tensp like :Tensp
				limit $offset, " . $this->_page_size;
						
		return $this->exeQuery($sql, $arr);	
	}*/
	function getsp($key)
	{
		$sql="SELECT
			chitietloaisp.Tenct,
			chitietloaisp.Maloaict,
			sanpham.Masp,
			sanpham.Mancc,
			sanpham.Maloaict,
			sanpham.Tensp,
			sanpham.Mota,
			sanpham.Hinhanh,
			sanpham.Soluong,
			sanpham.Dongia,
			nhacungcap.Tenncc
			FROM
			chitietloaisp
			INNER JOIN sanpham ON chitietloaisp.Maloaict = sanpham.Maloaict
			INNER JOIN nhacungcap ON sanpham.Mancc = nhacungcap.Mancc
			WHERE
			sanpham.Masp ='$key'";
		return $this->query($sql);
	}
	function getdanhmucsp($key)
	{
		$sql="SELECT
			*,
			chitietloaisp.Tenct
			FROM
			sanpham
			INNER JOIN chitietloaisp ON chitietloaisp.Maloaict = sanpham.Maloaict
			WHERE
			sanpham.Maloaict ='$key'";
			return $this->query($sql);
	}
	function layid()
	{
			$sql="select max(madh) from donhang";
			return $this->query($sql);
	}
	function laygia()
	{
			$sql="select Dongia from sanpham";
			return $this->query($sql);
	}
	function equery($sql)
	{
		return $this->query($sql);
	}
	public function count($sql, $arr=array())
	{
		return $this->countItems($sql, $arr);
	}
	
	public function getPageCount()
	{
		return $this->_page_count;	
	}
}