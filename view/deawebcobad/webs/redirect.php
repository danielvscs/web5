<?php
//Redireccionador de la web

if($partes_ruta[2]=="gestor-escuela"){ 
    
    if(count($partes_ruta)==3){
        include_once("gestor-escuela/index.php");
    }else if(count($partes_ruta)==4){
        
    }



}