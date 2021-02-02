<?php
include'koneksi.php';
?>
<html>
		<head>
	<title> AKADEMI</title>
	<style type="text/css">
		

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 100px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}




	</style>
	</head>
<body>
<header>
<?php
  // include"AdminMenu.php";
  ?> 
</header>
<table width="100%" border="0" align="center">

<a href="frmAdd.php"><h4 align="right"> TAMBAH</h4>
	<tr>

		<th>NO</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th> JK</th>
		<th> ACTION</th>
	</tr>
		<?php
		$no =1;
			$qry = mysqli_query($konek,"SELECT * FROM tbl_mahasiswa");
			while ($data=mysqli_fetch_array($qry)) {
		?>
	<tr>
		<td> <input type="submit" name="btnsimpan" value=" <?php echo $no++; ?> "> </td>
		<td> <input type="submit" name="btnsimpan" value=" <?php echo $data['NIM']; ?> "> </td>
		<td> <input type="submit" name="btnsimpan" value=" <?php echo $data['NAMA']; ?> "> </td>
		<td> <input type="submit" name="btnsimpan" value=" <?php echo $data['ALAMAT']; ?> "> </td>
		<td> <input type="submit" name="btnsimpan" value=" <?php echo $data['JK']; ?> "> </td>
		<td> 
		<center>

		<a onClick="return confirm('Yakin Anda Menghapus ?')" href="hapus.php?id=<?php echo $data['NIM']; ?>">
			<!-- <button type="submit"> DELETE </BUTTON> -->
<input type="submit" name="btnsimpan" value="HAPUS">
			</td>
	</tr>  
	<?php
	} 
	?>
	</BODY>
	</head>
	</table>
	<footer>
		Create &copy; 2018 : ASTIANI HULU
	</footer>	