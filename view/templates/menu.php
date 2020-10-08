<?php
/*
*   ---------Incluir las siguentes variables:---------
*   Titulo [ $title ]
*   Datos en forma de array [ $data ]:

$data = array(
    
	array("Número parcial", "***parcial***", ""),
	array("pagina.extencion", "explicación", "Observaciones", "link"),

);
*/ 

if($data==null){
    echo "Error: no se ha encontrado la información";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu <?php echo $title ?></title>

    <!-------------------Forza a cargar los estilos css mientras está en estado de desarrollo ------------------------>
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="inv">   
        <div class="navbar">
            <strong class="title-nav"><a href="<?php echo $url; ?>/home/" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>
    <?php 
        if($data!=null){ 
            for($i=0; $i<count($data); $i++){    
                if($data[$i][1]=="***parcial***"){
    ?>
                <div class="d-table">
                    <div class="table-head">
                        <h2><?php echo $data[$i][0] ?></h2>
                        <br>
                    </div>
                    <table class="menu-table">
                        <thead>
                            <tr>
                                <th style="width: 20%;">Página</th>
                                <th>Descripción</th>
                                <th style="width: 20%;">Observaciones</th>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                for($j =$i+1; $j<count($data); $j++){
                                    if($data[$j][1]=="***parcial***"){
                                        break;
                                    }
                            ?>
                                    <tr>
                                        <td><a href="<?php echo $url.$data[$j][3] ?>"><?php echo $data[$j][0] ?></a></td>
                                        <td><?php echo $data[$j][1] ?></td>
                                        <td><?php echo $data[$j][2] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><hr></td>
                                    </tr>
                            <?php
                                }
                            ?>
                                                    
                        </tbody>
                    </table>
                </div>

        
    <?php 
                }
            }  
        }
    include_once($raiz."/view/templates/footer.php");
    ?>

</body>
</html>
