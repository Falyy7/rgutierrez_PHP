<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <h1>PEDIDO</h1>
    <p> <strong> Primer plato: </strong> <?php echo $_POST ['primer_plato']; ?></p>
    <p><strong> Segundo plato: </strong> <?php echo $_POST ['segundo_plato']; ?></p>
    <p> <strong> Bebida: </strong><?php echo $_POST ['bebida']; ?></p>
    <p> <strong> Postre: </strong> <?php echo $_POST ['postre']; ?></p>
    
</body>
</html>