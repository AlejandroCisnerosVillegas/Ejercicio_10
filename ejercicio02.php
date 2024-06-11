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
			<h1>Salario de un empleado</h1>
			<label>Si este trabaja 8 horas diarias y gana 30 pesos la hora.</label><br><br>
			<label>¿Cuánto sería en un día?</label><br><br>
			<label>¿Cuánto sería en una semana?</label><br><br>
			<label>¿Cuánto sería en 15 días?</label><br><br>
			<input type="submit" name="btncalcular" value="Calcular">
		</form>
		<?php
		if (isset($_POST['btncalcular'])) {
			$salariodeldia = 8 * 30;
			$salariodelasemana = $salariodeldia * 7;
			$salarioen15dias = $salariodeldia * 15;
			echo "<h2>Resultado</h2>";
			echo "<p>Salario de un día: $salariodeldia</p>";
			echo "<p>Salario en una semana: $salariodelasemana</p>";
			echo "<p>Salario en 15 días: $salarioen15dias</p>";
		}
		?>
	</body>
</html>