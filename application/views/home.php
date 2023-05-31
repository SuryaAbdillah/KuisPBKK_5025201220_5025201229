<!DOCTYPE html>
<html>
<head>
	<title>Pesan Tiket</title>
</head>
<body>
	<div class="outline-tabel" style="width: 70%;">
		<h3 id="juduljadwal">Jadwal Yang Tersedia</h3>
	
		<h5>Saldo: <?php echo $queryUsr->balance ?> </h5>
		<a href="<?php echo base_url('/home/halaman_tambah') ?>">Admin Only +Jadwal</a>
		<br>
		<br>
		<table id="border_jadwal">
			<tr id="baris_awal">
				<td>kode</td>
				<td>Jadwal</td>
				<td>Origin</td>
				<td>Destinasi</td>
				<td>Harga</td>
				<td>Kapasitas</td>
				<td>Seat</td>
			</tr>
			<?php 
				$count = 0;
				foreach ($queryAllRsv as $row) {
					$count = $count + 1;
			 ?>
			<tr>
				<td><?php echo $row->kode ?></td>
				<td><?php echo $row->jadwal ?></td>
				<td><?php echo $row->origin ?></td>
				<td><?php echo $row->destinasi ?></td>
				<td><?php echo $row->harga ?></td>
				<td><?php echo $row->kapasitas ?></td>
				<td><?php echo $row->seats ?></td>
				<!-- <td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->kode ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->kode ?>">Delete</a></td> -->
				<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->kode ?>">Buy</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>