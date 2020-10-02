<?php


$error = false;
$mensaje = "";
$image = "error";
$ext_ruta ="";


$x_curp = $_POST["curp"];
$x_forma = $_POST["forma"];
$documento = $_FILES['documento'];


$nombre_archivo = array();
$tipo_archivo = array();
$tamano_archivo = array();
$archivo_tmp = array();
$i = 0;


$nombre_archivo[$i] = $documento['name'];
$tipo_archivo[$i] =  $documento['type'];
$tamano_archivo[$i] =  $documento['size'];
$archivo_tmp[$i] = $documento['tmp_name'];


$limitepermitido = 10000000;

if($tamano_archivo[$i] <= $limitepermitido){

    if($x_forma=="no-orde"){
        $uploaded_image = $raiz."/view/deawebcobad/actividades/img/".$x_curp.".jpg";
    }else{
        $nombre = $_POST["nombre"];
        $grupo = $_POST["grupo"];
        $ext_ruta = "grupos/".$grupo."/";   
        $uploaded_image = $raiz."/view/deawebcobad/actividades/img/grupos/".$grupo."/".$x_curp.".jpg";
    }


    if(move_uploaded_file($archivo_tmp[$i],$uploaded_image)){
        $image = "/view/deawebcobad/actividades/img/".$ext_ruta.$x_curp;
       
    }else{
        $error = true;
        $mensaje = "Error al subir la imagen";
    }


}else{
    $error = true;
    $mensaje = "La imagen supera el limite de tamaño";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir imagenes</title>
    <link href="<?php echo $url.'/src/css/main.css'; ?>" rel="stylesheet">
</head>
<body>
    <nav class="inv">   
        <div class="navbar">
            <strong class="title-nav"><a href="/web5/" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act">
        <h1>¡Subido con exito!</h1>

        <div class="content">
        <?php if($x_forma=="no-orde"){ ?>
            <h3>Nombre: <?php echo $x_curp.".jpg"; ?></h3>
        <?php }else{ ?>
            
            <h3>Nombre: <?php echo $x_curp; ?></h3>
        <?php } ?>
            <div class="image">
                <img src="<?php echo $url.$image.".jpg" ?>" alt="<?php echo $x_curp ?>">
            </div>
            <div class="error">
                <strong>
                    <?php echo $mensaje; ?>
                </strong>
            </div>
        </div>
        
    </div>
</body>
</html>