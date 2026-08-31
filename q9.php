<?php
$email = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = trim($_POST['email'] ?? '');

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message = 'The email address is valid.';
	} else {
		$message = 'The email address is not valid.';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation</title>
</head>
<body>
	<form method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
		<button type="submit">Check</button>
	</form>

	<?php if ($message !== ''): ?>
		<p><?= htmlspecialchars($message) ?></p>
	<?php endif; ?>
</body>
</html>
