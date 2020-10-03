
<?php
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class materias extends base{

    protected $idmateria;
    protected $materia;
    protected $area;

    function setidmateria($idmateria) {
        $this->idmateria = $idmateria; 
    }
    function getidmateria() {
        return $this->idmateria; 
    }
    function setmateria($materia) {
        $this->materia = $materia; 
    }
    function getmateria() {
        return $this->materia; 
    }
    function setarea($area) {
        $this->area = $area; 
    }
    function getarea() {
        return $this->area; 
    }
}
