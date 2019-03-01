<!DOCTYPE html>
<html>
<head>
	<title>Daftar Makanan</title>
</head>
<body>

<form>
	<table border="1">
		<thead>
			<th>Nama Makanan</th>
			<th>Harga Makanan</th>
			<th>Masukan Jumlah Pesanan</th>

		</thead>

		<tbody>
			<form method="POST" action="<?php echo base_url()?>MenuMakanan/inputTransaksi">
			<?php 
                $listMakanan = $this->session->makanan;

                foreach ($listMakanan as $data) {

               ?>
            <tr>
				<td>
					<input type="text" name="namaMakanan" value="<?php echo $data->nama_makanan ?>" disabled>
				</td>
				<td>
					<input type="text" name="hargaMakanan" value="<?php echo $data->harga_makanan ?>" disabled>
				</td>
				<td>
					<input type="text" name="jumlahMakanan" value="">
				</td>
			</tr>

		<?php } ?>

		</tbody>
	</table>
	<br>
	<br>
		<input type="submit" name="submit" value="Pesan">
		</form>
	

</form>

</body>
</html>