<?php
$server= 'localhost'; 
$user= 'root';
$password= ''; 
$database= 'akademik';
$konek= mysqli_connect($server,$user,$password,$database);
if ($konek){
		echo "";
	}else
		{							
		echo "Koneksi Gagal Ke Database";
}
?>
