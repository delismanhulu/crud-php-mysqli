<?php
	include'koneksi.php';
		$id = $_GET['id'];
		$sqlku = mysqli_query($konek,"SELECT * FROM tbl_user WHERE kode_user='$id'");
	$data  = mysqli_fetch_array($sqlku);
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
				<form method="post">
					<table width="200" border="1">
					  <tr>
					    <td colspan="2"><div align="center">
					      <h1>FORM UPDATE USER</h1>
					    </div></td>
				      </tr>
					  <tr>
					    <td width="9%"><h4>NAMA</h4></td>
					    <td width="91%"><input type="text" name="txtnama" value="<?php echo $data['nama'] ?>"></td>
				      </tr>
					  <tr>
					    <td><h4>Password</h4></td>
					    <td><input type="password" name="txtpassword" value="<?php echo $data['password'] ?>"></td>
				      </tr>
					  <tr>
					    <td><h4>ALAMAT</h4></td>
					    <td><input type="text" name="txtalamat" value="<?php echo $data['alamat'] ?>"></td>
				      </tr>
				       <tr>
					    <td><h4>TELEPON</h4></td>
					    <td><input type="text" name="txttelepon" value="<?php echo $data['telepon'] ?>"></td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td><input type="submit" name="btnedit" value="Edit"></td>
				      </tr>
	              </table>
					<p><br>
				  </p>
				</form>
				<?php
					if (isset($_POST["btnedit"])){
						$txtnama =$_POST['txtnama'];
						$txtpassword =$_POST['txtpassword'];
						$txtalamat =$_POST['txtalamat'];
						$txttelepon =$_POST['txttelepon'];
						$edit = mysqli_query($konek,"UPDATE  tbl_user SET nama='$txtnama',password='$txtpassword',alamat='$txtalamat',telepon='$txttelepon' WHERE kode_user='$id'");
						if ($edit)
						{
							?>
							<script type="text/javascript">
								alert('Data Anda Berhasi di Edit...!!!');
								document.location.href="frmAdd.php";
							</script>
							<?php
						}else{
							echo "Gagal Untuk Edit";
						}
					}
				?>
			</BODY>
	</head>
</html>