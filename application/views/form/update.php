<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($isi->result() as $key) : ?>
		<form action="http://localhost/trepel/index.php/Cilin/gantikan/<?php echo $key->id ?>" method="post">
			<input type="text" name="fullname" placeholder="fullname">
			<input type="text" name="username" placeholder="username">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="password" placeholder="password">
			<input type="text" name="level" placeholder="level">
			<input type="submit" value="save">

		</form>
	<?php endforeach ?>
	
</body>
</html>

