<?php
//Redireccionador de la web

$ruta_elegida =$url.'/view/404.php';
if($partes_ruta[2]=="gestor-escuela"){ 
    
    if(count($partes_ruta)==3){
        $ruta_elegida = $raiz."/view/deawebcobad/webs/gestor-escuela/index.php";
    }else if(count($partes_ruta)==5){
        if($partes_ruta[3]=="grupos"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/frm_grupos.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/con_grupo.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/del_grupo.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/m-grupo.php";
            }
        }else if($partes_ruta[3]=="especialidad"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/frm_especialidad.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/con_especialidad.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/del_especialidad.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/m-especialidad.php";
            }
        }else if($partes_ruta[3]=="maestros"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/frm_maestros.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/con_maestro.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/del_maestro.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/m-maestro.php";
            }
        }else if($partes_ruta[3]=="materias"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/frm_materias.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/con_materia.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/del_materia.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/m-materia.php";
            }
        }else if($partes_ruta[3]=="cargas"){
            if($partes_ruta[4]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/frm_grupos.php";
            }else if($partes_ruta[4]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/.php";
            }else if($partes_ruta[4]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/view/.php";
            }
        }
    }else if(count($partes_ruta)==6){

        if($partes_ruta[3]=="grupos"){
            if($partes_ruta[5]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/grupo.php";
            }else if($partes_ruta[5]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/.php";
            }else if($partes_ruta[5]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/d_grupo.php";
            }else if($partes_ruta[5]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/act_grupos.php";
            }else if($partes_ruta[5]=="actualizarp"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/a_grupo.php";
            }
        }else if($partes_ruta[3]=="especialidad"){
            if($partes_ruta[5]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/especialidad.php";
            }else if($partes_ruta[5]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/d_especialidad.php";
            }else if($partes_ruta[5]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/d_especialidad.php";
            }else if($partes_ruta[5]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/act_especialidad.php";
            }else if($partes_ruta[5]=="actualizarp"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/a_especialidad.php";
            }
        }else if($partes_ruta[3]=="maestros"){
            if($partes_ruta[5]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/maestro.php";
            }else if($partes_ruta[5]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/.php";
            }else if($partes_ruta[5]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/d_maestro.php";
            }else if($partes_ruta[5]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/act_maestros.php";
            }else if($partes_ruta[5]=="actualizarp"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/a_maestro.php";
            }
        }else if($partes_ruta[3]=="materias"){
            if($partes_ruta[5]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/materia.php";
            }else if($partes_ruta[5]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/.php";
            }else if($partes_ruta[5]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/d_materia.php";
            }else if($partes_ruta[5]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/act_materias.php";
            }else if($partes_ruta[5]=="actualizarp"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/a_materia.php";
            }
        }else if($partes_ruta[3]=="cargas"){
            if($partes_ruta[5]=="agregar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/carga.php";
            }else if($partes_ruta[5]=="consultar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/con_carga.php";
            }else if($partes_ruta[5]=="eliminar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/.php";
            }else if($partes_ruta[5]=="actualizar"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/.php";
            }else if($partes_ruta[5]=="actualizarp"){
                $ruta_elegida =$raiz."/view/deawebcobad/webs/gestor-escuela/controller/a_carga.php";
            }
        }
    }



}
include_once($ruta_elegida);