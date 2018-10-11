<html>
<head>
    <title>Membaca Data</title>
</head><center>
<body bgcolor="grey">
<br><br><br>
<h3><font color="yellow">DAFTAR DATA MAHASISWA</h3>

<?php
if($this->session->flashdata('ini')){
echo "<script>alert('".$this->session->flashdata('ini')."')</script>";
}
?>

<?php
if (empty($hasil)) {
	echo "Tidak ada data yang tersedia!";
}
else {
?>
<table >
	<tr bgcolor="yellow">
		<td width="30"><center>No</td>
		<td width="100"><center>NIM</td>
		<td width="100"><center>Nama</td>
		<td width="100"><center>Jenis Kelamin</td>
		<td width="50"><center>Prodi</td>
		<td><center> Aksi </td>
	</tr>
			<?php
			$no = 1;
			foreach ($hasil as $data):
			if ($data->jk=='L'){
				$data->jk="Laki-Laki";
			}else{
				$data->jk="Perempuan";
			}
			?>
	 <tr bgcolor="white">
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data->nim; ?> </td>
		<td> <?php echo $data->nama; ?> </td>
		<td> <?php echo $data->jk; ?> </td>
		<td> <?php echo $data->prodi; ?> </td>
		<td><a href="<?php base_url() ?> control_mhs/updatedata/<?php echo $data->nim; ?>"onClick="return confirm('Apakah ingin diedit?')"> Edit </a>| 
			<a href="<?php base_url() ?> control_mhs/deletedata/<?php echo $data->nim; ?>"onClick="return confirm('Apakah data dengan nama  <?php echo $data->nama?> akan dihapus?')"> Hapus </a></td>
	</tr>
			<?php
			$no++;
			endforeach;
			?>
	<tr>
		<td colspan="6" align="right"><h3><?php echo anchor('control_mhs/tambahdata', 'Tambah Data'); ?></h3></td>
	</tr>
</table>
<?php
}
?>

