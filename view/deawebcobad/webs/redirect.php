<?php
//Redireccionador de la web

$ruta_elegida =$url.'view/404.php';
if($partes_ruta[2]=="gestor-escuela"){ 
    
    if(count($partes_ruta)==3){
        $ruta_elegida = "gestor-escuela/index.php";
    }else if(count($partes_ruta)==5){
        if($partes_ruta[3]=="grupos"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida ="gestor-escuela/view/frm_grupos.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }
        }else if($partes_ruta[3]=="especialidad"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida ="gestor-escuela/view/frm_especialidad.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }
        }else if($partes_ruta[3]=="maestros"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida ="gestor-escuela/view/frm_maestros.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }
        }else if($partes_ruta[3]=="materias"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida ="gestor-escuela/view/frm_materias.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }
        }else if($partes_ruta[3]=="cargas"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida ="gestor-escuela/view/frm_grupos.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida ="gestor-escuela/view/.php";
            }
        }
    }



}

include_once($ruta_elegida);