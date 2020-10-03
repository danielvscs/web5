
<?php
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class especialidades extends base{

    protected $idespecialidad;
    protected $especialidad;

    function set_idespecialidad($idespecialidad) { 
        $this->idespecialidad = $idespecialidad; 
    }
    function get_idespecialidad() { 
        return $this->idespecialidad; 
    }
    function set_especialidad($especialidad) { 
        $this->especialidad = $especialidad; 
    }
    function get_especialidad() { 
        return $this->especialidad; 
    }


}
