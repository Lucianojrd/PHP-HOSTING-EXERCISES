<?php
include('includes/conexion.php');
conectar();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>AA18</title>
</head>

<body>
    <h1>Tu guía de ejercicios</h1>
    <div class="orden">
        <div class="listado">
                <?php
                $sql = "SELECT * FROM menu";
                $sql= mysqli_query($con, $sql); 
                if (mysqli_num_rows($sql) != 0)
                {
                    while ($r = mysqli_fetch_array($sql))
                    {
                        ?>
                         <li><a href="index.php?pagina=<?php echo $r['archivo_item'];?>"><?php echo $r['nombre_item'];?></a></li>
                        <?php
                
                    }
                }
                ?>

                <li><a href="index.php?pagina=2">Ejercicio 2</a></li>
                <li><a href="index.php?pagina=3">Ejercicio 3</a></li>
                <li><a href="index.php?pagina=4">Ejercicio 4</a></li>
                <li><a href="index.php?pagina=5">Ejercicio 5</a></li>
                <li><a href="index.php?pagina=6">Ejercicio 6</a></li>
                <li><a href="index.php?pagina=7">Ejercicio 7</a></li>
                <li><a href="index.php?pagina=8">Ejercicio 8</a></li>
                <li><a href="index.php?pagina=9">Ejercicio 9</a></li>
                <li><a href="index.php?pagina=10">Ejercicio 10</a></li>
                <li><a href="index.php?pagina=11">Ejercicio 11</a></li>
                <li><a href="index.php?pagina=12">Ejercicio 12</a></li>
                <li><a href="index.php?pagina=13">Ejercicio 13</a></li>
                <li><a href="index.php?pagina=14">Ejercicio 14</a></li>
                <li><a href="index.php?pagina=15">Ejercicio 15</a></li>
             
        </div>
        <div class="desarrollo">
        <?php 
        if(!empty($_GET['pagina']))
        {
            include ('modulos/'.$_GET['pagina'].".php");
        }
    
    ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>