<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Server Info</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>$_SERVER</h1>
	<table border="1">
		<?php foreach ($_SERVER as $key => $value): ?>
			<tr>
				<td><?= $key ?></td>
				<td><?= $value ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>