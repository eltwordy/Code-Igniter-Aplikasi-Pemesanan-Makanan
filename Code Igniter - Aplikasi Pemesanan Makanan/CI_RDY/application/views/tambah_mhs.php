<html>
<head>
<title>Menambahkan Data</title>
</head>
<body bgcolor="green">
<br><br><br>
		<?php
		echo form_open('control_mhs/tambahdata');
		?>
	<table align="center" bgcolor="yellow">
		<tr>
			<td bgcolor="white" colspan="4"><center><b>TAMBAH DATA</b></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php echo form_input('nim'); ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo form_input('nama'); ?></td>
		</tr>
		<tr>
			<td colspan="3"> <?php
        echo 'Jenis Kelamin : '.form_radio('jk','perempuan').'Perempuan ';
        echo form_radio('jk','laki-laki',TRUE).'Laki-Laki';
   ?></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td>:</td>
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
			<td><?php echo form_submit('submit','simpan','id="submit"'); ?></td>
		</tr>
	</table>
		<?php echo form_close(); ?>
</body>
</html>