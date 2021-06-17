<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$file_name = $_FILES['upload_file']['name'];
	$file_type = $_FILES['upload_file']['type'];
	$file_size = $_FILES['upload_file']['size'];
	$file_tmp_name = $_FILES['upload_file']['tmp_name'];
	$file_error = $_FILES['upload_file']['error'];

	move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
		<h1>Upload Berhasil</h1>
		<table border="1">
			<tr>
				<td>File Name</td>
				<td><?= $file_name ?></td>
			</tr>
			<tr>
				<td>File Type</td>
				<td><?= $file_type ?></td>
			</tr>
			<tr>
				<td>File Size</td>
				<td><?= $file_size ?></td>
			</tr>
			<tr>
				<td>File Tmp Name</td>
				<td><?= $file_tmp_name ?></td>
			</tr>
			<tr>
				<td>File Error</td>
				<td><?= $file_error ?></td>
			</tr>
		</table>
	<?php endif ?>
	<h1>Upload File</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<label>
			File :
			<input type="file" name="upload_file">
		</label>
		<input type="submit" value="Upload">
	</form>
</body>
</html>