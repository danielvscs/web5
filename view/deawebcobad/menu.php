
<?php
/*
*   ---------Incluir las siguentes variables:---------
*   Titulo [ $title ]
*   Datos en forma de array [ $data ]:

$data4 = array(
    
	array("Número parcial", "***parcial***", ""),
	array("pagina.extencion", "explicación", "Observaciones", "link"),

);
*/ 

$title = "Desarrolla aplicaciones web con conexión a base de datos";

$data = array(
    

    array("1° Parcial", "***parcial***", "", ""),
    array("Tarea: gestor de contenidos", "Investigación sobre el concepto de gestor de contenidos", "Investigación del concepto", "/deawebcobad/actividad/investigancion-gestor-contenidos.php"),
    array("Tarea: frameworks de desarrollo web", "Investigación sobre los frameworks para el desarrollo web", "Investigación de frameworks", "/deawebcobad/actividad/investigacion-frameworks.php"),
    array("Cargar un archivo", "Programa que cargar un archivo .jpg y lo sube al servidor", "Solo soporta imagenes JPG", "/deawebcobad/actividad/subir-archivos.php"),
    array("Cargar un archivo ordenado", "Programa que cargar un archivo .jpg y lo sube al servidor de manera ordenada", "Los separa por grupos", "/deawebcobad/actividad/subir-archivos-ordenados.php"),

);

include_once($raiz."/view/templates/menu.php");


?>