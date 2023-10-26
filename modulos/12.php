<html>
<head>
    <title>Pedido de pizzas</title>
</head>
<body>
    <h1>Pedido de pizzas</h1>
    <form action="modulos/pedido12.php" method="post">
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Dirección: <input type="text" name="direccion" required></p>
        <p>Jamón y queso: <input type="radio" name="pizza" value="jamon y queso"></p>
        <p>Cantidad: <input type="number" name="cantidad_jamon" min="1" max="10"></p>
        <p>Napolitana: <input type="radio" name="pizza" value="napolitana"></p>
        <p>Cantidad: <input type="number" name="cantidad_napo" min="1" max="10"></p>
        <p>Muzzarella: <input type="radio" name="pizza" value="muzzarella"></p>
        <p>Cantidad: <input type="number" name="cantidad_muzza" min="1" max="10"></p>
        <p><input type="submit" value="Confirmar"></p>
    </form>
</body>
</html>
