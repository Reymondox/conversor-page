<?php
$operacion = $_POST['lista'];
switch ($operacion)
 {
		case 'FaC':
$a1 = ($_POST['c1'] - 32)*5/9;
$s1 = "°C";
		break;

		case 'CaF':
$a1 = ($_POST['c1'] * 9/5)+32;
$s1 = "°F";
		break;
			}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Conversor de temperaturas</title>
</head>
		<link rel="icon" href="imgs/termometro.png">
		<link rel="stylesheet" href="css/for.css">
<body>
	<header>
		<img src="imgs/termometro.png">
		<p>Conversor de temperaturas</p>
	</header>
	<section class="form-register">
		<P>Su resultado es</P>
		<P class="controlsR"><?= $a1 ?> <?= $s1 ?></P>
		<a href="index.php"><P class="botonsR">Volver</P></a>
	</form>
	</section>
</body>
</html>

