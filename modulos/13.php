<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fp=fopen("modulos/pedidos.txt","r") or  die("No se pudo abrir el archivo");
    while (!feof($fp)) {
        $linea = fgets($fp);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
      }
      fclose($fp);
      ?>

</body>
</html>