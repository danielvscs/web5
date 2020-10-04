<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/model/bd_materia.php");


$datos = new materias($_POST);

$bd = new bd_materia();


$bd->actualiza($datos);

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
        window.location="https://danvscs47.000webhostapp.com/deawebcobad/web/gestor-escuela/materias/consultar";
        </script>
    </body>
</html>