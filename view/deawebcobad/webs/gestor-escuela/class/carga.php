
<?php
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/base.php");

class carga extends base{

    protected $idcarga;
    protected $idmaestro;
    protected $idmateria;
    protected $idgrupo;
    
    function setidcarga($idcarga) {
        $this->idcarga = $idcarga;
    }
    function getidcarga() {
        return $this->idcarga;
    }
    function setidmaestro($idmaestro) {
        $this->idmaestro = $idmaestro;
    }
    function getidmaestro() {
        return $this->idmaestro;
    }
    function setidmateria($idmateria) {
        $this->idmateria = $idmateria;
    }
    function getidmateria() {
        return $this->idmateria;
    }
    function setidgrupo($idgrupo) {
        $this->idgrupo = $idgrupo;
    }
    function getidgrupo() {
        return $this->idgrupo;
   }
    
}
