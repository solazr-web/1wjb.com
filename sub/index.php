<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>random ★</title>
	<link rel="stylesheet" href="../blanket.css">
	<link rel="stylesheet" href="style.css">
	<style>
		body {
			max-width: 400px;
			margin-top: 320px;
			font-family: mspgothic, monospace;
			color: #68293f;
		}

		h1 {
			font-family: serif;
			font-style: italic;
			font-weight: normal;
			font-size: 1.5em;
			margin-bottom: 0.75em;
		}

		.container {
			display: flex;
			flex-direction: column;
			gap: 0.5em;
		}

		a.link {
			display: inline-block;
			text-decoration: underline;
			color: color-mix(in srgb, currentcolor, #45d1a1);
			transition: color 0.2s ease, transform 0.2s ease;
		}

		a.link:hover {
			color: color-mix(in srgb, currentcolor, #1f9e7c);
			transform: translateX(2px);
		}

		.empty {
			font-style: italic;
			color: color-mix(in srgb, currentcolor, #aaa);
		}

		footer {
			margin-top: 1.5em;
			font-size: 0.875em;
			color: color-mix(in srgb, currentcolor, #888);
		}
	</style>
</head>
<body>

<h1>randoms</h1>

<div class="container">
<?php
$dirs = array_filter(glob('*'), 'is_dir');

if (empty($dirs)) {
	echo '<p class="empty">there\'s nothing here right now, sorry</p><br><br><br><br><br>';
} else {
	foreach ($dirs as $dir) {
		echo '<a class="link" href="' . htmlspecialchars($dir) . '">' . htmlspecialchars($dir) . '</a>';
	}
}
?>
</div>

<footer>
	<p>it is currently <time datetime="<?= date('Y-m-d') ?>"><?= date('Y.m.d') ?></time></p>
</footer>

</body>
</html>
