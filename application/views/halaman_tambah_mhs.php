	<title>Tambah Jadwal Perjalanan</title>
</head>
<body style="font-family: 'Poppins';">
	<div class="outline-tabel">
		<h3 class="judul-halaman">Tambah Jadwal Perjalanan</h3>
		<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
		<table class="form">
			<tr class="atribut">
				<td class="kolom1">Kode</td>
				<td class="kolom2">:</td>
				<td class="kolom3"><input type="text" name="kode" placeholder="XXXX"></td>
			</tr>
			<tr class="atribut">
				<td>Keberangkatan</td>
				<td>:</td>
				<td><input type="text" name="origin" placeholder="Surabaya"></td>
				<?php echo form_error('origin')?>
			</tr>
			<tr class="atribut">
				<td>Tujuan</td>
				<td>:</td>
				<td><input type="text" name="destinasi" placeholder="Sidoarjo"></td>
			</tr>
			<tr class="atribut">
				<td>Kapasitas</td>
				<td>:</td>
				<td><input type="text" name="kapasitas" placeholder="20"></td>
			</tr>
			<tr class="atribut">
				<td>Jadwal</td>
				<td>:</td>
				<td><input type="text" name="jadwal" placeholder="YYYY-MM-DD"></td>
			</tr>
			<tr class="atribut">
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" placeholder="10000"></td>
			</tr>
			<tr class="button-submit">
				<td colspan="3"><button type="submit">Tambah Jadwal</button></td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html>