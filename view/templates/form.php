<?php
/**
 *      Facilita la creacion de formularios
 *      
 * 
 * 
 * SIN USO
 * 
 * 
 

$data = array(
    array("nombre","metodo","accion", "enctype"),

    array("texto","etiqueta","tipo","nombre","value","maxleng"),


    array("texto","select","tipo","nombre",0,
        array("opciones","opciones")
    )


);
*/
?>

<form name="<?php echo $data[0][0]; ?>" method="<?php echo $data[0][1]; ?>" action="<?php echo $data[0][2]; ?>" <?php echo $data[0][3]; ?> class="form-s">
            
    <label>Nombre del alumno: </label>
    <br>
    <input type="hidden" name="nombre" size="20" maxlength="50">

</form>