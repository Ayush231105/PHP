<?php
$paragraph = $_POST['paragraph'] ?? '';
$searchWord = $_POST['search_word'] ?? '';
$count = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $searchWord !== '') {
	$count = substr_count(strtolower($paragraph), strtolower($searchWord));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Word Count</title>
</head>
<body>
	<h2>Count Search Word</h2>
	<form method="post">
		<label for="paragraph">Paragraph:</label><br>
		<textarea id="paragraph" name="paragraph" rows="8" cols="60" required><?= htmlspecialchars($paragraph) ?></textarea><br><br>

		<label for="search_word">Search word:</label><br>
		<input type="text" id="search_word" name="search_word" value="<?= htmlspecialchars($searchWord) ?>" required>
		<button type="submit">Count</button>
	</form>

	<?php if ($count !== null): ?>
		<p>The search word appears <strong><?= $count ?></strong> time(s).</p>
	<?php endif; ?>
</body>
</html>
