<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla de curriculum vitae</title>
    <style>
        body{
           background-color: #121212;
            color: #f5f5f5; 
            font-family: Arial, sans-serif;
            padding: 20px;
            
        }
        p{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    #Datos personales
    $nombre ="Juan";
    $apellidos ="Gómez";
    $fechaDeNacimiento ="20/07/2021";
    $fotoPersonal ="foto.png";

    #Estudios
    $ultimoEstudio="Grado en DAW";
    $centroAcademico="ILERNA";
    $fechaObtencionTitulo="15/07/2024";

    #Experiencia laboral
    $ultimoTrabajo="Programador Junior";
    $empresa="Autónomo";
    $anosTrabajados="2";

    ?>

    <h1> CURRICULUM VITAE </h1>
    <h2> Datos personales </h2>
    <p> Nombre: <?php echo $nombre ?></p>
    <p> Apellidos: <?php echo $apellidos ?></p>
    <p> Fecha de nacimiento: <?php echo $fechaDeNacimiento ?></p>
    <p> Foto? <?php echo $fotoPersonal ?></p>
    <h2> Estudios</h2>
    <p> Último estudio cursado: <?php echo $ultimoEstudio ?></p>
    <p> Centro académico: <?php echo $centroAcademico ?></p>
    <p> Fecha de obtención del título: <?php echo $fechaObtencionTitulo ?></p>
    <h2> Experiencia laboral</h2>
    <p> Último empleo: <?php echo $ultimoTrabajo ?></p>
    <p> Nombre de la empresa: <?php echo $empresa ?></p>
    <p> Años trabjados:  <?php echo $anosTrabajados ?></p>
    
</body>
</html>