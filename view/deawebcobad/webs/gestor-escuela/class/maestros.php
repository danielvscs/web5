<?php
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class maestros extends base{
    protected $idmaestro;
    protected $appat;
    protected $apmat;
    protected $nombre;
    protected $rfc;
    protected $curp;
    protected $idstatus;


            
    function setidmaestro($idmaestro) { 
        $this->idmaestro = $idmaestro;
     }
    function getidmaestro() {
        return $this->idmaestro; 
    }
    function setappat($appat) { 
        $this->appat = $appat; 
    }
    function getappat() { 
        return $this->appat; 
    }
    function setapmat($apmat) {
         $this->apmat = $apmat; 
    }
    function getapmat() {
         return $this->apmat; 
    }
    function setnombre($nombre) {
         $this->nombre = $nombre; 
    }
    function getnombre() {
         return $this->nombre; 
    }
    function setrfc($rfc) {
         $this->rfc = $rfc; 
    }
    function getrfc() { 
        return $this->rfc; 
    }
    function setcurp($curp) { 
        $this->curp = $curp; 
    }
    function getcurp() { 
        return $this->curp; 
    }
    function setidstatus($idstatus) { 
        $this->idstatus = $idstatus; 
    }
    function getidstatus() {
         return $this->idstatus; 
    }
}

 