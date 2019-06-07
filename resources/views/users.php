<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>

	<ul>
		<h1>Bievenidos</h1>

		<?php foreach ($users as $user): ?>
			<!-- es e($variable es pasa que imprima codigo php y evitar alertas o scripts-->
			<li><?php echo e($user) ?> </li>
		<?php endforeach; ?>

	</ul>

</body>
</html>