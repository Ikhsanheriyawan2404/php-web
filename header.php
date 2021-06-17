<?php

header('Application: Belajar PHP Web');
header('Author: Ikhsan Heriyawan');

$client = $_SERVER['HTTP_CLIENT_NAME'];
echo "Hello $client";