<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome from View home.</h1>
	<p>Hello <?php echo htmlspecialchars($name); ?></p>
	<ul>
		<?php foreach ($colours as $colour):?>
			<li><?php echo htmlspecialchars($colour); ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>