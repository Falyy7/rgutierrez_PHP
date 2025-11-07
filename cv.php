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
    <p> <strong> Nombre: </strong> <?php echo $nombre ?></p>
    <p> <strong> Apellidos: </strong> <?php echo $apellidos ?></p>
    <p> <strong> Fecha de nacimiento:</strong> <?php echo $fechaDeNacimiento ?></p>
    <p> <strong> Foto? </strong> <?php echo $fotoPersonal ?></p>
    <h2> Estudios</h2>
    <p> <strong> Último estudio cursado: </strong><?php echo $ultimoEstudio ?></p>
    <p> <strong> Centro académico: </strong><?php echo $centroAcademico ?></p>
    <p> <strong> Fecha de obtención del título: </strong><?php echo $fechaObtencionTitulo ?></p>
    <h2> Experiencia laboral</h2>
    <p> <strong> Último empleo: </strong><?php echo $ultimoTrabajo ?></p>
    <p> <strong> Nombre de la empresa: </strong><?php echo $empresa ?></p>
    <p> <strong> Años trabjados:  </strong><?php echo $anosTrabajados ?></p>
    
</body>
</html>