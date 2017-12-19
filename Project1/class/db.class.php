<?php
class db
{
	private $_numRow;
	protected $data, $conn;
	
		function __construct()
	{
		$dsn = "mysql:host=" .HOST."; dbname=". DB;
		try
		{
		$this->conn = new PDO( $dsn, USER, PASS);
		$this->conn->query("set names 'utf8' ");	
		}
		catch(Exception $e)
		{
		   echo 'Lỗi: '. $e->getMessage();
		   exit;
		}
		
	}
		
		public function query($sql, $arr=array())
	{
		$stm = $this->conn->prepare($sql);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryput($sql,$ten, $arr=array())
	{
		$stm = $this->conn->prepare($sql);
		$stm->bindValue(":ten","%$ten%");
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	
	public function queryUser($sql,$ma, $arr=array())
	{
		$stm = $this->conn->prepare($sql);
		$stm->bindValue(":ma","%$ma%");
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryLogin($sql,$taikhoan,$matkhau, $arr=array())
	{
		$stm = $this->conn->prepare($sql);
		$stm->bindValue(":taikhoan","%$taikhoan%");
		$stm->bindValue(":matkhau","%$matkhau%");
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function querySignUp($sql,$tentv,$taikhoan,$matkhau,$sdt,$diachi,$email,$arr=array())
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":tentv"=> $tentv,":taikhoan" =>$taikhoan,":matkhau"=> $matkhau,":sdt" =>$sdt,":diachi"=> $diachi,":email" => $email);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		print_r($arr);
		return $this->data;	
	}
	/* su dung de dem so phan tu cua table ...*/
		public function countItems($sql, $arr= array())
		{
			$data = $this->exeQuery($sql, $arr, PDO::FETCH_BOTH);
			return $data[0][0];
		}
		
		/*Sử dụng cho các sql cập nhật dữ liệu. Kết quả trả về số dòng bị tác động
		*/
		public function exeNoneQuery($sql,  $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			$this->query($sql, $arr, $mode);	
			return $this->getRowCount();
		}
		/*
		Sử dụng cho các sql select
		*/
		public function exeQuery($sql,  $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			return $this->query($sql, $arr, $mode);	
		}
		public function getRowCount()
		{
			return $this->_numRow;	
		}
		public function __destruct()
		{
			$this->dbh= null;
		}
	/*private function query($sql, $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			$stm = $this->dbh->prepare($sql);
			if (!$stm->execute( $arr)) 
				{
					echo "Sql lỗi."; //exit;	
				}
			$this->_numRow = $stm->rowCount();
			return $stm->fetchAll($mode);
			
		}*/
	public function queryThemncc($sql,$mancc,$tenncc,$thongtin)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":mancc" => $mancc,":tenncc" => $tenncc,":thongtin" => $thongtin);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryThemsp($sql,$masp,$mancc,$maloaict,$tensp,$mota,$hinhanh,$soluong,$dongia)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":masp" => $masp,":mancc" => $mancc,":maloaict" => $maloaict,":tensp" => $tensp,":mota" => $mota,":hinhanh" => $hinhanh,":soluong" => $soluong,":dongia" => $dongia);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXoancc($sql,$mancc)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":mancc" => $mancc);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXoatv($sql,$matv)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":matv" => $matv);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXoasp($sql,$masp)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":masp" => $masp);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXoadh($sql,$madh)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":madh" => $madh);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXuatnhacc($sql,$mancc)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":mancc" => $mancc);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXuatsanpham($sql,$masp)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":mancc" => $masp);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXuatthanhvien($sql,$matv)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":matv" => $matv);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXuatdonhang($sql,$madh)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":madh" => $madh);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXuatthanhvien1($sql,$taikhoan)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":taikhoan" => $taikhoan);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXemdonhang($sql)
	{
		$stm = $this->conn->prepare($sql);
		//$arr = array(":madh" => $madh);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXemnhacungcap($sql)
	{
		$stm = $this->conn->prepare($sql);
		//$arr = array(":madh" => $madh);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXemthanhvien($sql)
	{
		$stm = $this->conn->prepare($sql);
		//$arr = array(":madh" => $madh);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXemsanpham($sql)
	{
		$stm = $this->conn->prepare($sql);
		//$arr = array(":madh" => $madh);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function queryXemctdonhang($sql)
	{
		$stm = $this->conn->prepare($sql);
		//$arr = array(":madh" => $madh);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	/*public function queryThemdonhang($sql,$tennn,$sdt,$email)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":tennguoinhan" => $tennn,":sdt" => $sdt,":email" => $email);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}*/
	public function queryadddonhang($sql,$idthanhvien,$ten,$sdt,$diachi,$email,$tongtien)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array (":idthanhvien"=>$idthanhvien, 
						":ten"=>$ten, 
						":sdt"=>$sdt, 
						":diachi"=>$diachi,
						":email"=>$email,
						":tongtien"=>$tongtien);
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	public function querySuasp($sql,$tensp,$mota,$soluong,$dongia)
	{
		$stm = $this->conn->prepare($sql);
		$arr = array(":tensp" => $tensp,":mota" => $mota,":soluong" => $soluong,":dongia" => $dongia);
		
		$stm->execute($arr);
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
		
}