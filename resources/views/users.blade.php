<!DOCTYPE html>
<html>

<head>
	<title>Inicio</title>
</head>

<body>

	<h1>{{ $title }}</h1>

	<hr>

	<ul>

		@forelse ($users as $user)

		<li>{{ $user }}</li>

		@empty

		<li>No hay usuarios disponibles</li>

		@endforelse

	</ul>

</body>

</html>