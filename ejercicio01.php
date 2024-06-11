<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calculadora de Calificaciones y Salarios</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form method="POST" name="AlejandroVillegas">
			<h1>Calificaciones</h1>
			<input type="number" name="nota1" min="0" placeholder="Calificación 1" required> * 30<br><br>
			<input type="number" name="nota2" min="0" placeholder="Calificación 2" required> * 20<br><br>
			<input type="number" name="nota3" min="0" placeholder="Calificación 3" required> * 10<br><br>
			<input type="submit" name="btnresultado" value="Calcular">
		</form>

		<?php
		if (isset($_POST['btnresultado'])) {
			$var1 = $_POST['nota1'];
			$var2 = $_POST['nota2'];
			$var3 = $_POST['nota3'];

			echo "<h2>Resultado</h2>";
			echo "<p>Calificación 1: $var1 * 30 = " . ($var1 * 30) . "</p>";
			echo "<p>Calificación 2: $var2 * 20 = " . ($var2 * 20) . "</p>";
			echo "<p>Calificación 3: $var3 * 10 = " . ($var3 * 10) . "</p>";
		}
		?>
	</body>
</html>