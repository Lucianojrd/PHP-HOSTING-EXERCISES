<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $claves = array(
    'Facu' => 'unodos12',
    'Oct' => 'manzanas12',
    'Martin' => 'naranjas4',
    'Lucho' => 'peras1',
    'Fabio' => 'boca123',
    
  );

  foreach ($claves as $clave => $valor) {
    echo 'Para la clave: ' . $clave . ", almacena el valor: " . $valor;
    echo "<br>";
    echo "<br>";
    
  }
  ?>

</body>

</html>
