<!DOCTYPE html>
<html>
<head>
	<title>Suroboyo Bus | Login</title>
</head>
<body id="login" style="color: white;">
	<div class="outline-login" style="margin: auto 5em;">
		<h1 class="mb-4" style="font-weight: 900; letter-spacing: 3px;">Layanan Terpadu Suroboyo Bus</h1>
		<form action="<?php echo base_url('home/fungsi_login')?>" method="post">
			<table id="tabel-login">
				<tr>
					<td style="width: 30%;">user</td>
					<td style="width: 10%;">:</td>
					<td><input type="text" name="user" placeholder="masukkan username"></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input type="text" name="password" placeholder="masukkan password"></td>
				</tr>
				<tr style="height: 50px;">
					<td colspan="3"><button type="submit" style="border-radius: 8px; border-color: white; background-color: white;">Login</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>