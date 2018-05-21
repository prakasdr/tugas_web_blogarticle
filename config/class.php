<?php  
	
session_start();
$mysqli = new mysqli("localhost","root","","blog");

class user
{

	public $koneksi;

	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}

	function login($em,$pass)
	{
		$ambil=	$this->koneksi->query("SELECT * FROM user WHERE email_user='$em' AND password_user='$pass'");
		$ygcocok=$ambil->num_rows;
		if ($ygcocok==1) 
		{
			$akun=$ambil->fetch_assoc();
			$_SESSION['user']=$akun;
			return "sukses";
		}
		else
		{
			return "gagal";
		}
	}
}

class artikel
{

	public $koneksi;

	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}
	function create($judul,$text)
	{
		$this->koneksi->query("INSERT INTO artikel (judul,isi) VALUES ('$judul','$text')");
	}

	function edit($judul,$text,$id)
	{
		$this->koneksi->query("UPDATE artikel SET judul='$judul',isi='$text' WHERE id_artikel='$id'");


	}

	function ambil_data($id)
	{
		$ambil=$this->koneksi->query("SELECT * FROM artikel WHERE id_artikel='$id'");
		$pecah = $ambil->fetch_assoc();

		return $pecah;
	}	

	function view()
	{
		$ambil=$this->koneksi->query("SELECT * FROM artikel");
		while ($pecah=$ambil->fetch_assoc()) 
		{
			$data[]=$pecah;
		}
		return $data;
	}
	function read($id)
	{
		$ambil=$this->koneksi->query("SELECT * FROM artikel WHERE id_artikel='$id'");
		while($pecah=$ambil->fetch_assoc())
		{
			$data[]=$pecah;
		}
		return $data;
	}
}
$artikel = new artikel($mysqli);
$user= new user($mysqli);
?>