<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<form method="POST" name="AlejandroVillegas">
	<h1>Ingresar 3 calificaciones</h1>
	<input type="number" name="nota1" min="0" placeholder="1° Calificación" required> * 30<br><br>
	<input type="number" name="nota2" min="0" placeholder="2° Calificación" required> * 20<br><br>
	<input type="number" name="nota3" min="0" placeholder="3° Calificación" required> * 10<br><br>
	<input type="submit" name="btnresultado" value="Calcular">
</form>

<?php

if(isset($_POST['btnresultado']))
{
	$var1 = $_POST['nota1'];
	$var2 = $_POST['nota2'];
	$var3 = $_POST['nota3'];
	
	echo "<h1>Resultado</h1>";
	echo "1° Calificación: $var1 por 30: ".($var1 * 30)." <br><br>";
	echo "2° Calificación: $var2 por 20: ".($var2 * 20)."<br><br>";
	echo "3° Calificación: $var3 por 10: ".($var3 * 10)."<br><br>";
	
}

?>
