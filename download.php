<?php

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
	header('Content-Disposition: attahcment; filename="ikhsann.jpg"');
	header('Content-Type: image/jpg');
	readfile(__DIR__ . '/file/ikhsann.jpg');
	exit();
} else {
	echo "Invalid Key";
}