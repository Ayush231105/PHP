<?php 
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
echo 'This page was called from ' . ($isHttps ? 'https' : 'http') . '.';
?>
