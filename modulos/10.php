<html>
<head>
<title>Formulario</title>
</head>
<body>
<form  method="post">
<div class="form-floating mt-5 ms-5">
    <h3 style="color: white;" class="text-center mb-3">10 - FORMULARIO (control textarea)</h3>
    <form method="post" action="modulos/paginaEjercicio10.php">
        <textarea name="contrato" class="form-control w-50 mx-auto " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
            En la ciudad de [........], se acuerda entre la Empresa [..........] 
        representada por el Sr. [..............] en su carácter de Apoderado,
        con domicilio en la calle [..............] y el Sr. [..............],
        futuro empleado con domicilio en [..............], celebrar el presente 
        contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
        artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
        </textarea>
        <input type="submit" value="confirmar" name="enviar">
    </form>  
</div>
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
