<?php
$data = [
	['String' => 'Name', 'Value' => 'Ayush'],
	['String' => 'Course', 'Value' => 'PHP'],
	['String' => 'Year', 'Value' => 2026],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strings and Values</title>
	<style>
		table { border-collapse: collapse; width: 50%; }
		th, td { border: 1px solid #000; padding: 8px; text-align: left; }
		th { background-color: #f2f2f2; }
	</style>
</head>
<body>
	<h2>Strings and Values</h2>
	<table>
		<tr>
			<th>String</th>
			<th>Value</th>
		</tr>
		<?php foreach ($data as $row): ?>
			<tr>
				<td><?= htmlspecialchars($row['String'], ENT_QUOTES, 'UTF-8') ?></td>
				<td><?= htmlspecialchars((string) $row['Value'], ENT_QUOTES, 'UTF-8') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
