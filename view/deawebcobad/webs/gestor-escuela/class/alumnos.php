<?php

include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class alumnos extends base{

    protected $idalumno;
    protected $nombre;
    protected $curp;
    protected $correo;
    protected $celular;
    protected $domicilio;
    protected $ciudad;
    
    function setidalumno($idalumno){
        $this->idalumno = $idalumno;
    }
    function getidalumno(){
        return $this->idalumno;
    }
    function setnombre($nombre){
        $this->nombre = $nombre;
    }
    function getnombre(){
        return $this->nombre;
    }
    function setcurp($curp){
        $this->curp = $curp;
    }
    function getcurp(){
        return $this->curp;
    }
    function setcorreo($correo){
        $this->correo = $correo;
    }
    function getcorreo(){
        return $this->correo;
    }
    function setcelular($celular){
        $this->celular = $celular;
    }
    function getcelular(){
        return $this->celular;
    }
    function setdomicilio($domicilio){
        $this->domicilio = $domicilio;
    }
    function getdomicilio(){
        return $this->domicilio;
    }
    function setciudad($ciudad){
        $this->ciudad = $ciudad;
    }
    function getciudad(){
        return $this->ciudad;
    }
    


}