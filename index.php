<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<title>Conversor de temperaturas</title>
		<link rel="icon" href="imgs/termometro.png">
		<link rel="stylesheet" href="css/for.css">
	<title></title>
</head>

<body>
	<header>
		<img src="imgs/termometro.png">
		<p>Conversor de temperaturas</p>
	</header>
	<section class="form-register">
	<br><form action="proc.php" method="POST" name="calc">
		<input class="controls" type="number" name="c1" placeholder="Cantidad" required/><br>
		<br><label><select class="options" name="lista">
			     <option value="FaC">°Fahrenheit a °Celcius</option>
			     <option value="CaF">°Celcius a °Farenheit</option>
			   </select>
	    </label>
	    <input type="submit" class="botons" name="Ver resultados">
	</form>
	</section>
</body>
</html>
