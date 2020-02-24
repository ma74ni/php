<?php
$url = base64_decode($_GET['u']);
$auth = $_GET['a'];
header('Location: ' . $url);
?>