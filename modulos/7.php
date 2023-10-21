<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <div class="separador" style=" border: 1.5px solid rgb(0, 0, 0) ; padding: 10px">
        <form action="modulos/pagina7.php" method="post">
            Ingrese el nombre de una persona:
            <input type="text" name="nombre">
            <br>
            Seleccione el tipo de estudios que posee:
            <br>
            <input type="radio" name="estudios" value="ningun estudio"> No tiene estudios
            <br>
            <input type="radio" name="estudios" value="estudios primarios"> Estudios primarios
            <br>
            <input type="radio" name="estudios" value="estudios secundarios"> Estudios secundarios
            <br>
            <input type="submit" name="enviar">
        </form>
    </div>
</body>

</html>