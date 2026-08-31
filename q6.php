<?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$components = parse_url($url);
echo "Scheme: " . $components['scheme'] . "<br>\n";
echo "Host: " . $components['host'] . "<br>\n";
echo "Path: " . $components['path'] . "<br>\n";
?>
