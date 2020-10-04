<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio | Modulo...</title>

    
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
    <link href="<?php echo $url.'/src/css/gestorescuela.css?v='.filemtime($raiz.'/src/css/gestorescuela.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav>   
        <div class="navbar">
            <strong class="title-nav"><a href="<?php echo $url ?>" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <!--Botones principales para elegir-->
    <div style="text-align:center;">
        <div class="d-content">
        <div class="table-head">
            <h2>Opciones</h2>
            <br>
        </div>
        <table class="table options-web" >
            <tbody>
                <tr>
                    <td style="width: 40%;"><a class="a-titles active" onclick="showInfo(0)" id="option-0"   href="#">Grupos</a></td>
                    <td rowspan="5">
                        <div id="info-0" class="info show">
                            <div >
                                <strong>Grupos</strong>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/grupos/consultar" >Consultar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/grupos/agregar" >Agregar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/grupos/eliminar" >Eliminar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/grupos/actualizar" >Actualizar</a>
                            </div>
                        </div>
                        <div id="info-1" class="info"> 
                            <div>
                                <strong>Especialidad</strong>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/especialidad/consultar"  >Consultar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/especialidad/agregar"  >Agregar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/especialidad/eliminar"  >Eliminar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/especialidad/actualizar"  >Actualizar</a>
                            </div>
                        </div>
                        <div id="info-2" class="info">
                            <div>
                                <strong>Maestros</strong>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/maestros/consultar"  >Consultar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/maestros/agregar"  >Agregar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/maestros/eliminar"  >Eliminar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/maestros/actualizar"  >Actualizar</a>
                            </div>
                        </div>
                        <div id="info-3" class="info">
                            <div>
                                <strong>Materias</strong>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/materias/consultar"  >Consultar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/materias/agregar"  >Agregar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/materias/eliminar"  >Eliminar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/materias/actualizar"  >Actualizar</a>
                            </div>
                        </div>
                        <div id="info-4" class="info">
                            <div>
                                <strong>Carga</strong>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/carga/consultar"  >Consultar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/carga/agregar"  >Agregar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/carga/eliminar"  >Eliminar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/carga/actualizar"  >Actualizar</a>
                            </div>
                        </div>
                        <div id="info-5" class="info">
                            <div>
                                <strong>Alumnos</strong>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/alumnos/consultar"  >Consultar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/alumnos/agregar"  >Agregar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/alumnos/eliminar"  >Eliminar</a>
                                <a class="btn block" href="<?php echo $url.'/deawebcobad/web/' ?>gestor-escuela/alumnos/actualizar"  >Actualizar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><a class="a-titles" onclick="showInfo(1)" id="option-1"  href="#">Especialidad</a></td>
                </tr> 
                <tr>
                    <td><a class="a-titles"  onclick="showInfo(2)" id="option-2"  href="#">Maestros</a></td>
                </tr> 
                <tr>
                    <td><a class="a-titles"  onclick="showInfo(3)" id="option-3"  href="#">Materias</a></td>
                </tr> 
                <tr>
                    <td><a class="a-titles"  onclick="showInfo(4)" id="option-4"  href="#">Carga</a></td>
                </tr> 
                <tr>
                    <td><a class="a-titles"  onclick="showInfo(5)" id="option-5"  href="#">Alumonos</a></td>
                </tr> 
                
            </tbody>
        </table>
        </div>
    </div>
<script src="<?php echo $url.'/src/js/gestorescuela.js?v='.filemtime($raiz.'/src/js/gestorescuela.js'); ?>"></script>
</body>
</html>