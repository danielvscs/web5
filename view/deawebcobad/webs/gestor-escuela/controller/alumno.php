<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/alumnos.php");


$datos = new alumnos($_POST);


include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_alumno.php");

$bd = new bd_alumno();

$bd->agrega($datos);


#header a especialidad
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redireccionando</title>
</head>
    <body>
        <script type="text/javascript">
        window.location="https://danvscs47.000webhostapp.com/deawebcobad/web/gestor-escuela/alumnos/consultar";
        </script>
    </body>
</html>