<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La cantidad de <?php echo $_POST["producto"] ?> que ha comprado es
     de <?php echo $_POST["cantidad"] ?> </p>
     <br>

     <h2> Lista total </h2>
     <?php
     

        if(!isset($_COOKIE['lista'])){

            setcookie ("lista", "", time() + 50);

        }else if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $listaCompra = $_COOKIE['lista'];

            $listaCompra .= $_POST['producto'] . "  " . $_POST['cantidad'];

            setcookie("lista", $listaCompra . "<br>", time() + 50);

            echo $listaCompra;
        }
    
     ?>
     <br>
     <a href="ejercicio19.php"> Volver </a>

</body>
</html>