<?php
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$pizza = $_POST["pizza"];
$cantidad_jamon = $_POST["cantidad_jamon"];
$cantidad_napo = $_POST["cantidad_napo"];
$cantidad_muzza = $_POST["cantidad_muzza"];

$contenido = "\nNombre: $nombre\n";
$contenido .= "Dirección: $direccion\n";
$contenido .= "Pizza: $pizza\n";
if ($pizza == "jamon y queso") {
    $contenido .= "Cantidad: $cantidad_jamon\n";
}
if ($pizza == "napolitana") {
    $contenido .= "Cantidad: $cantidad_napo\n";
}
if ($pizza == "muzzarella") {
    $contenido .= "Cantidad: $cantidad_muzza\n";
}

$fp = fopen("pedidos.txt", "a");

fwrite($fp, $contenido);
fwrite($fp, "-----------------------------");
fclose($fp);

echo "<h1>Pedido confirmado</h1>";
echo "<p>Gracias por su pedido, $nombre. Su pizza de $pizza llegará pronto a su dirección: $direccion.</p>";
echo "<p>El contenido del archivo es $contenido</p>";
?>
