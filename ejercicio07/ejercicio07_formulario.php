<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7: Formulario de pedidos </title>
</head>
<body>
    <h1> Realizar pedido</h1>

    <form action="ejercicio07_formularioPedido.php" method = "post">
        <label for="primer_plato"> Primer plato: </label>
        <select name="primer_plato" id="primer_plato">
            <option value="pasta"> Pasta </option>
            <option value="ensalada"> Ensalada</option>
            <option value="sopa"> Sopa </option>
            <option value="gazpacho"> Gazpacho </option>
        </select> <br> <br>

        <label for="segundo_plato"> Segundo plato: </label>
        <select name="segundo_plato" id="segundo_plato">
            <option value="carne"> Carne</option>
            <option value="pollo"> Pollo </option>
            <option value="pescado"> Pescado </option>
            <option value="verduras"> Verduras </option>
        </select> <br><br>

        <label for="bebida"> Bebida </label>
        <select name="bebida" id="bebida">
            <option value="agua"> Agua</option>
            <option value="refresco"> Refresco </option>
            <option value="cerveza"> Cerveza </option>
            <option value="vino"> Vino </option>
        </select> <br><br>

        <label for="postre"> Postre: </label>
        <select name="postre" id="postre">
            <option value="helado"> Helado</option>
            <option value="fruta"> Fruta </option>
            <option value="tarta"> Tarta </option>
            <option value="yogur"> Yogur </option>
        </select> <br><br>

        <input type="submit" value="Realizar pedido">
    </form>
    
</body>
</html>