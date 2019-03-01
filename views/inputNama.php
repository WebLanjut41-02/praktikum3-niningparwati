<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form  action="<?php echo base_url()?>MenuMakanan/inputPemesan" method="POST">
	<table>
		<tr>
			<td colspan="2">MASUKAN NAMA PEMESAN</td>
		</tr>
		<tr>
			<td>Kode Pemesan</td>
			<td><input type="text" name="kodePemesan" value=""></td>
		</tr>
		<tr>
			<td>Nama Pemesan</td>
			<td><input type="text" name="namaPemesan" value=""></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="LOGIN">
			</td>
		</tr>
	</table>
</form>

</body>
</html>