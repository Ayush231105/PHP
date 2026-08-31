<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Grade</title>
</head>
<body>
	<form method="post">
		<label for="marks">Enter marks (0-1000):</label>
		<input type="number" id="marks" name="marks" min="0" max="1000" required>
		<button type="submit">Calculate Grade</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$marks = (int) $_POST['marks'];

		if ($marks > 800 && $marks <= 1000) {
			$grade = 'Class I';
		} elseif ($marks > 600 && $marks <= 800) {
			$grade = 'Class II';
		} elseif ($marks > 400 && $marks <= 600) {
			$grade = 'Class III';
		} elseif ($marks >= 0 && $marks <= 400) {
			$grade = 'Fail';
		} else {
			$grade = 'Invalid marks';
		}

		echo '<p>Grade: ' . htmlspecialchars($grade, ENT_QUOTES, 'UTF-8') . '</p>';
	}
	?>
</body>
</html>
