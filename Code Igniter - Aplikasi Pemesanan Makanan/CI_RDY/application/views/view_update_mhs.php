<html>
<head>
<title>Membaca Data</title>
</head><center>
<body bgcolor="green">
<br><br><br>
<h3><font color="yellow">UPDATE DATA MAHASISWA</h3>

<?php echo form_open('control_mhs/updatedata/'.$hasil->nim); ?>
<table align="center" bgcolor="yellow">
	<tr>
		<td bgcolor="white" colspan="4"><center><b>Edit Data Saya</b></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><?php echo form_input('nim',$hasil->nim); ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$hasil->nama); ?></td>
	</tr>
	<tr>
		
		<td colspan="2"> <?php
        echo 'Jenis Kelamin : '.form_radio('jk','perempuan').'Perempuan ';
        echo form_radio('jk','laki-laki',TRUE).'Laki-Laki';
   ?></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>
			<select name="prodi">
			<option value="SI">SI</option>
			<option value="TI">TI</option>
			<option value="Biologi">Biologi</option>
			<option value="Psikologi">Psikologi</option>
			<option value="Multimedia">Multimedia</option>
			</select>
			</td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit','Update'); ?></td>
	</tr>
</table>
<?php echo form_close(); ?>
</body></html>