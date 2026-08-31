<?php
$lastError = error_get_last();

if ($lastError !== null) {
	echo 'Error: ' . htmlspecialchars($lastError['message'], ENT_QUOTES, 'UTF-8') . '<br>';
	echo 'File: ' . htmlspecialchars($lastError['file'], ENT_QUOTES, 'UTF-8') . '<br>';
	echo 'Line: ' . $lastError['line'];
} else {
	echo 'No error has occurred.';
}
?>
