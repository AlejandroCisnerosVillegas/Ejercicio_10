<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<form method="POST" name="vaidrollteam">
<h1>Salario de un empleado</h1>
<label>Si este trabaja 8 horas diarias y gana 30 pesos la hora.</label><br><br>
<label>¿Cuánto sería en un día?</label><br><br>
<label>¿Cuánto sería en una semana?</label><br><br>
<label>¿Cuánto sería en 15 días?</label><br><br>
<input type="submit" name="btncalcular" value="Calcular">
</form>

<?php

if(isset($_POST['btncalcular']))
{
	$salariodeldia = 8 * 30;
	$salariodelasemana = $salariodeldia*7;
	$salarioen15dias = $salariodeldia * 15;
	
	echo "<h1>Resultado</h1>";
	echo "Salario de un día: $salariodeldia <br><br>";
	echo "Salario en una semana: $salariodelasemana<br><br>";
	echo "Salario en 15 días: $salarioen15dias <br><br>";
}

?>