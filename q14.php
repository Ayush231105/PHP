<?php
$radius = filter_input(INPUT_POST, 'radius', FILTER_VALIDATE_FLOAT);
$circumference = null;
$area = null;

if ($radius !== false && $radius !== null && $radius >= 0) {
	$circumference = 2 * pi() * $radius;
	$area = pi() * $radius * $radius;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Circle Calculator</title>
</head>
<body>
	<h1>Circle Calculator</h1>
	<form method="post">
		<label for="radius">Radius:</label>
		<input type="number" id="radius" name="radius" min="0" step="any" required
			   value="<?= htmlspecialchars($_POST['radius'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
		<button type="submit">Calculate</button>
	</form>

	<?php if ($circumference !== null): ?>
		<h2>Results</h2>
		<p>Circumference: <?= number_format($circumference, 2) ?></p>
		<p>Area: <?= number_format($area, 2) ?></p>
	<?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
		<p>Please enter a valid non-negative radius.</p>
	<?php endif; ?>
</body>
</html>
