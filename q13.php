<?php
$number = null;
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$input = trim($_POST['number'] ?? '');

	if ($input !== '' && filter_var($input, FILTER_VALIDATE_INT) !== false) {
		$number = (int) $input;
		$message = $number % 2 === 0 ? 'Even' : 'Odd';
	} else {
		$message = 'Please enter a valid integer.';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Even or Odd</title>
</head>
<body>
	<h1>Check Even or Odd</h1>
	<form method="post">
		<label for="number">Enter a number:</label>
		<input type="number" name="number" id="number" step="1" required>
		<button type="submit">Check</button>
	</form>

	<?php if ($message !== ''): ?>
		<p><?= htmlspecialchars($number !== null ? "$number is $message" : $message, ENT_QUOTES, 'UTF-8') ?></p>
	<?php endif; ?>
</body>
</html>
