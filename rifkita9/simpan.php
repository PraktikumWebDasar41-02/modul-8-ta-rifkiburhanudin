<?php 
class oop
{
	
	private $user;
	private $pass;
	private $email;
	private $que;
	private $connn;

	private $namdep;
	private $nambel;
	private $no;
	private $kls;
	private $hob;
	private $gen;
	private $id;
	private $id1;

	function tambah1($user1,$pass2,$repas3,$email4)
	{
		
	include 'koneksi.php';
		
		if (!is_numeric($user1)) {
			$this->user = $user1;
		}
		if ($pass2==$repas3|| strlen($pass2)<=6) {
			$this->pass = $pass2;
		}else{
			echo "Password anda tidak sesuai";
		}
		if (preg_match("/@/",$email4)&&preg_match("/.com/",$email4)||preg_match("/.co.id/",$_POST['email'])) {
			$this->email = $email4;
		}
		if (isset($this->user)&&isset($this->pass)&&isset($this->email)) {
			$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"INSERT INTO user(id, name, email, pass) VALUES ('','$this->user','$this->email','$this->pass')");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:index.php");
			}
		}
	
	}

	function tambahnew($namad,$namab,$nim,$kelas,$hobi,$genre,$tw)
	{
		include 'koneksi.php';
		session_start();
		$this->id= $_SESSION['id'];
		if (strlen($nim)==10&&is_numeric($nim)) {
			$this->no = $nim;
		}
		if (!is_numeric($namad)) {
			$this->namdep = $namad;
		}
		if (!is_numeric($namab)) {
			$this->nambel = $namab;
		}
		$this->kls = $kelas;
		if (!is_numeric($hobi)) {
			$this->hob = $hobi;
		}
		$this->gen = implode(", ",$genre);
		$this->t = implode(", ",$tw);
		if (isset($this->no)&&isset($this->namab)&&isset($this->nambel)) {
			$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"INSERT INTO data(nama_depan, nama_belakang, Nim, kelas, hobi, genre, tempat, id)
			 VALUES ('$this->namab','$this->nambel','$this->no','$this->kls','$this->hob','$this->gen','$this->t','$this->id')");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:dashboard.php");
			}
		}
	}

	function hapus($d)
	{
		include 'koneksi.php';
		$this->id1 = $d;
		$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"DELETE FROM data WHERE Nim ='$this->id1'");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:dashboard.php");
			}
	}
}
$c = new oop();
if (isset($_POST['send'])) {
$c->tambah1($_POST['user'],$_POST['pass'],$_POST['repas'],$_POST['email']);
}
if (isset($_POST['simpan'])) {
$c->tambahnew($_POST['namad'],$_POST['namab'],$_POST['nim'],$_POST['kelas'],$_POST['hobi'],$_POST['genre'],$_POST['tw']);
}
if (isset($_GET['nim'])) {
$c->hapus($_GET['nim']);
}
 ?>
