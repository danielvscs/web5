
<?php
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class grupos extends base{

    protected $idgrupo;
    protected $semestre;
    protected $grupo;
    protected $turno;
    protected $idespecialidad;

    function setidgrupo($idgrupo) {
         $this->idgrupo = $idgrupo; 
    }
    function getidgrupo() {
        return $this->idgrupo;
    }
    function setsemestre($semestre) {
        $this->semestre = $semestre;
    }
    function getsemestre() {
        return $this->semestre;
    }
    function setgrupo($grupo) {
        $this->grupo = $grupo;
    }
    function getgrupo() {
        return $this->grupo;
    }
    function setturno($turno) {
        $this->turno = $turno;
    }
    function getturno() {
        return $this->turno;
    }
    function setidespecialidad($idespecialidad) {
        $this->idespecialidad = $idespecialidad;
    }
    function getidespecialidad() {
        return $this->idespecialidad;
    }

}
