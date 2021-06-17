<?php
session_start();

if ($_SESSION['login'] == TRUE) {
	header('Location: /session/member.php');
	// exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
		$_SESSION['login'] = TRUE;
		$_SESSION['username'] = $_POST['username'];
		header('Location: /session/member.php');
		// exit();
	} else {
		$error = 'Login gagal';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Session</title>
</head>
<body>
	<?php if ($error != '') : ?>
		<h2><?= $error; ?></h2>
	<?php endif; ?>
	<h1>Login</h1>
	<form action="" method="post">
		<label for="username">Username :
			<input type="text" name="username">
		</label>
		<br/>
		<label for="password">Password :
			<input type="text" name="password">
		</label>
		<br/>
		<input type="submit" value="Login" name="login">
	</form>
</body>
</html>