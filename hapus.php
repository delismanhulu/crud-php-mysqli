<?php
include 'koneksi.php'; 
 // include'LoginValidasi.php';
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_mahasiswa where NIM='".$_GET["id"]."'");
	if ($qry){
		header('location: tampil_siswa.php');
	}
}
?>
