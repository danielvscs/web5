
<?php
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class especialidades extends base{

    protected $idespecialidad;
    protected $especialidad;

    function setidespecialidad($idespecialidad) { 
        $this->idespecialidad = $idespecialidad; 
    }
    function getidespecialidad() { 
        return $this->idespecialidad; 
    }
    function setespecialidad($especialidad) { 
        $this->especialidad = $especialidad; 
    }
    function getespecialidad() { 
        return $this->especialidad; 
    }


}
