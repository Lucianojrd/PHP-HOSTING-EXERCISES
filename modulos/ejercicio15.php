<?php
$nombre = $_POST["nombre"];
$clave1 = $_POST["clave1"];
$clave2 = $_POST["clave2"];
if ($clave1 == $clave2) {
    echo("Las claves son correctas ");
}else{
    echo("Las claves no coinciden");
}
?>