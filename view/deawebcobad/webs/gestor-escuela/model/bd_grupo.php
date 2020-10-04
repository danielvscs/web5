<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/grupos.php");

class bd_grupo extends DataBase{

    public function agrega($datos){
        $sql = "INSERT INTO grupos (semestre,grupo,turno,idespecialidad) VALUES(".$datos->getsemestre().",'".$datos->getgrupo()."','".$datos->getturno()."',".$datos->getidespecialidad().")";
        $con = $this->getDB();
        $resultado = $con->query($sql);
        $con->close();


    }

    public function lista(){
        $lista = array();

        $sql = "SELECT * FROM grupos ORDER BY idgrupo";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new grupos($renglon);

                $lista[$i]= $dato_tabla;
            }
        }

        return $lista;

    }

    public function elimina($id){
        
        $sql = "DELETE FROM grupos WHERE idgrupo=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza($datos){
        $sql = "UPDATE grupos SET semestre='".$datos->getsemestre()."', grupo='".$datos->getgrupo()."', turno='".$datos->getturno()."', idespecialidad='".$datos->getidespecialidad()."' WHERE idgrupo=".$datos->getidgrupo();
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

}