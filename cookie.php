<?php
date_default_timezone_set('Asia/Kuala Lumpur');

$masa_exp = time() + 30;
setcookie('nama_pelajar', 'Abdullah', $masa_exp);

header('location: papar.php');
