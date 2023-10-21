<html>

<head>
    <title>Resultado</title>
</head>

<body>
    <div class="separador" style=" border: 1.5px solid rgb(0, 0, 0) ; padding: 10px">
        <?php
       
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            if (is_numeric($edad)) {
                if ($edad >= 18) {
                    echo "<h1>$nombre es mayor de edad</h1>";
                } else {
                    echo "<h1>$nombre es menor de edad</h1>";
                }
            } else {
                echo "La edad debe ser un número";
            }
        
        ?>
        <div class="separador" style=" border: 1.5px solid rgb(0, 0, 0) ; padding: 10px">
</body>

</html>