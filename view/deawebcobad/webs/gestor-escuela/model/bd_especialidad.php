<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/especialidades.php");

class bd_especialidad extends DataBase{

    public function agrega($datos){
        $sql = "INSERT INTO especialidades (especialidad) VALUES('".$datos->getespecialidad()."')";
        $con = $this->getDB();
        $resultado = $con->query($sql);
        $con->close();


    }

    public function lista(){
        $lista = array();

        $sql = "SELECT * FROM especialidades ORDER BY idespecialidad";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new especialidades($renglon);

                $lista[$i]= $dato_tabla;
            }
        }

        return $lista;

    }

    
    public function busca($id){
        $lista = array();

        $sql = "SELECT * FROM especialidades WHERE idespecialidad=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new especialidades($renglon);

                $lista[0]= $dato_tabla;
        }

        return $lista;

    }


    public function elimina($id){
        
        $sql = "DELETE FROM especialidades WHERE idespecialidad=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza($datos){
        $sql = "UPDATE especialidades SET especialidad='".$datos->getespecialidad()."' WHERE idespecialidad=".$datos->getidespecialidad();
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

}