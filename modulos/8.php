<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <form method="post">
        <div class="separador" style=" border: 1.5px solid rgb(0, 0, 0) ; padding: 10px">
            Ingrese el nombre de una persona:
            <input type="text" name="nombre">
            <br>
            Seleccione los deportes que practica:
            <br>
            <input type="checkbox" name="deportes[]" value="futbol"> Futbol
            <br>
            <input type="checkbox" name="deportes[]" value="basket"> Basket
            <br>
            <input type="checkbox" name="deportes[]" value="tennis"> Tennis
            <br>
            <input type="checkbox" name="deportes[]" value="voley"> Voley
            <br>
            <input type="submit" name="enviar">
        </div>
        <div class="separador" style="margin-top: 5px; border: 1.5px solid rgb(0, 0, 0) ; padding: 10px">
            <?php
            if (isset($_POST['nombre']) && isset($_POST['deportes'])) {
                $nombre = $_POST['nombre'];
                $deportes = $_POST['deportes'];
                $cantidad = count($deportes);
                echo "<h1>$nombre practica $cantidad deportes</h1>";
            } else {
                echo "";
            }
            ?>
        </div>
    </form>
</body>

</html>