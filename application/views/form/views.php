<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="http://localhost/trepel/index.php/Cilin/add">Tambah</a>
	<table border="1">
		<tr><!--td ke ssamping tr kebawah-->
			<td>id</td>
			<td>Fullname</td>
			<td>Username</td>
			<td>e-mail</td>
			<td>Password</td>
			<td>Pekerjaan</td>
			<td>Deskripsi</td>
			<td>Masukkan Id yg Akan Dihapus<form action="http://localhost/trepel/index.php/Cilin/delete" method="post">
						<input type="text" name="id">
						<input type="submit" name="submit" value="kirim">
					</form></td>
			<td>Masukkan Id yg Akan Diupdate<form action="http://localhost/trepel/index.php/Cilin/update" method="post">
						<input type="text" name="id">
						<input type="submit" name="submit" value="kirim">
					</form></td>
		</tr>

		<?php foreach ($isi->result() as $key ): ?><!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
				<tr>

					<td><?php echo $key->id ?></td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->username ?></td>
					<td><?php echo $key->email ?></td>
					<td><?php echo $key->password ?></td>
					<td><?php echo $key->pekerjaan ?></td>
					<td><?php echo $key->deskripsi ?></td>
					<td><a href="http://localhost/trepel/index.php/Cilin/delete/<?php echo $key->id ?>">Delete</td>
					<td><a href="http://localhost/trepel/index.php/Cilin/update/<?php echo $key->id ?>">Update</td>
				</tr>
		<?php endforeach ?>

	</table>
</body>
</html>