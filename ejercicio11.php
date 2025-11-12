<?php
session_start();

if(!isset($_SESSION["Usurario"])) #Comprueba si existe la variable
{ 

    $_SESSION['Usuario'] = "Onliner";

}
else
{
    $_SESSION['Usuario'] = null;
}

switch($_SESSION['Usuario']){      #Dependiendo del valor de la variable, muestra un mensaje u otro

    case 'Onliner':
        echo "El valor de la variable de la sesión es Onliner";
        break;

    default:
        echo "La variable de sesión no está definida";
        break;
} 

?>