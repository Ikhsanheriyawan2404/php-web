<?php
session_start();

if ($_SESSION['login'] != true) {
	header('Location: /session/login.php');
	// exit();
}

$say = "Hello " . $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Member page</title>
</head>
<body>
	<h1><?= $say ?></h1>
<a href="/session/logout.php">Logout</a>
</body>
</html>