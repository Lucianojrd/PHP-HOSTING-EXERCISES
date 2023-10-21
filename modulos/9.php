<html>
<head>
<title>Formulario</title>
</head>
<body>
<form  method="post">
Ingrese el nombre de una persona:
<input type="text" name="nombre">
<br>
Seleccione los ingresos mensuales de la persona:
<select name="ingresos">
<option value="1">1-1000 $</option>
<option value="2">1001-3000 $</option>
<option value="3">mayores a 3000 $</option>
</select>
<br>
<input type="submit" name="enviar">
</form>
<?php
if (isset($_POST['nombre']) && isset($_POST['ingresos'])) {
$nombre = $_POST['nombre'];
$ingresos = $_POST['ingresos'];
if ($ingresos == 3) {
  echo "<h1>$nombre debe pagar impuestos a las ganancias</h1>";
} else {
  echo "<h1>$nombre no debe pagar impuestos a las ganancias</h1>";
}}
else {
    echo "";
}
?>
</body>
</html>
