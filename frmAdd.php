<?php
include'koneksi.php';
?>
<html>
		<head>
	<title> SIAKAD STIKES IMELDA </title>
	</head>
     <link href="STYLE1/style.css" rel="stylesheet" type="text/css"/>
<body>
<header>
<?php
  include"AdminMenu.php";
  ?> 
</header>
<CENTER>
				<form method="post">
					<table width="200" border="0">
					  <tr>
					    <td colspan="2"><h2>DATA MAHASISWA <h2>
				      </tr>
					  <tr>
					    <td width="6%">NIM</td>
					    <td width="94%"><input type="text" name="txtnim" placeholder="Input Nim Anda"></td>
				      </tr>
				       <tr>
					    <td width="6%">NAMA LENGKAP</td>
					    <td width="94%"><input type="text" name="txtnama" placeholder="Input Nama Anda"></td>
				      </tr>
				       <tr>
					    <td width="6%">ALAMAT</td>
					    <td width="94%"><input type="text" name="txtalamat" placeholder="Input Alamat Anda"></td>
				      </tr>
				       <tr>
					    <td width="6%">JK</td>
					    <td width="94%"><input type="text" name="txtjk" placeholder="Input JK Anda"></td>
				      </tr>
					    <td>&nbsp;</td>
					    <td><input type="submit" name="btnsimpan" value="SIMPAN"> <input type="submit" name="" value="CANCEL">				      </tr>
			      </table>
				</form>
				</CENTER>
				<?php
					if (isset($_POST["btnsimpan"])){
						$txtnim =$_POST['txtnim'];
						$txtnama =$_POST['txtnama'];
						$txtalamat =$_POST['txtalamat'];
						$txtjk =$_POST['txtjk'];
						$simpan = mysqli_query($konek,"INSERT INTO tbl_mahasiswa(NIM,NAMA,ALAMAT,JK) VALUES ('$txtnim','$txtnama','$txtalamat','$txtjk')");
						if ($simpan){
							?>
							<script type="text/javascript">
								alert('Data Anda Berhasil di simpan');
								document.location.href="tampil_siswa.php";
							</script>

							<?php
						}else{
							echo "Gagal Untuk Menyimpan";
						}
					}
				?>


</html>