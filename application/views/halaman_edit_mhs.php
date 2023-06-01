<!DOCTYPE html>
<html>
<head>
	<title>Tickets Reservations</title>
	<link rel="stylesheet" href="<?php echo base_url();?>external_file/css/style.css">
</head>
<body>
	<div class="outline-tabel" style="width: 40%;">
		<h3 class="judul-halaman">Konfirmasi Pemesanan Tiket</h3>
		
		<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
		<table id="form_pesan">
			<tr class="atribut">
				<td class="kolom1">Kode Bus</td>
				<td class="kolom2">:</td>
				<td class="kolom3"><input type="text" name="kode" value="<?php echo $queryRsvDetail->kode ?>" readonly></td>
			</tr>
			<tr class="atribut">
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Davian Benito"></td>
			</tr>
			<tr class="atribut">
				<td>Jumlah Seats</td>
				<td>:</td>
				<td><input type="text" name="seats" placeholder="3"></td>
			</tr>
			<tr class="button-submit">
				<td colspan="3"><button type="submit">Pesan Tiket</button></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>