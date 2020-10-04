<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/materias.php");

class bd_materia extends DataBase{

    public function agrega($datos){
        $sql = "INSERT INTO materias (materia,area) VALUES('".$datos->getmateria()."',".$datos->getarea().")";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();


    }

    public function lista(){
        $lista = array();

        $sql = "SELECT * FROM materias ORDER BY idmateria";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new materias($renglon);

                $lista[$i]= $dato_tabla;
            }
        }

        return $lista;

    }

    public function elimina($id){
        
        $sql = "DELETE FROM materias WHERE idmaterias=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza($datos){
        $sql = "UPDATE materias SET materia='".$datos->getmateria()."',area=".$datos->getarea()." WHERE idmateria=".$datos->getidmateria();
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

}