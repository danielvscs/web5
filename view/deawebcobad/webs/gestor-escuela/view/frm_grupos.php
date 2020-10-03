
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir imagenes</title>
    <!-------------------Forza a cargar los estilos css mientras está en estado de desarrollo ------------------------>
    
    <link href="<?php echo $url.'/src/css/gestorescuela.css?v='.filemtime($raiz.'/src/css/gestorescuela.css'); ?>" rel="stylesheet">
    <link href="<?php echo $url.'/src/css/main.css?v='.filemtime($raiz.'/src/css/main.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="inv">   
        <div class="navbar">
            <strong class="title-nav"><a href="/web5/" class="a-white">Desarrolla aplicaciones web con conexion a base de datos</a></strong>
        </div>
    </nav>

    <div class="d-act center form">

        <div class="d-content">
            <div  class="radius-sup" >
                <h1>Registro de grupos</h1>
            </div>
            <div class="radius-inf">
                <form name="add-grupos" method="post" action="">
                    
                <label>Semestre</label>
                <select>
                    <option value="0"> </option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                    <option value="4">4°</option>
                    <option value="5">5°</option>
                    <option value="6">6°</option>
                </select>
                <label>Grupo</label>
                <select>
                    <option value="0"> </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
                <br>
                <label>Turno: </label>
                <select>
                    <option value="-1"> </option>
                    <option value="0">Matutino</option>
                    <option value="1">Vespertino</option>
                </select>
                <label>Especialidad: </label>
                <select>
                    <option value="-1"> </option>
                    <option value="0">Matutino</option>
                    <option value="1">Vespertino</option>
                </select>


                
                <input name="forma" type="hidden" value="si-orde">
                <input type="submit" name="procesos" value="Enviar">
    
            </form>
            
            </div>
        </div>

        
    </div>
</body>
</html>