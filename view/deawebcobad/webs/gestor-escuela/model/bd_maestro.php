<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/maestros.php");

class bd_maestro extends DataBase{

    public function agrega($datos){
        $sql = "INSERT INTO maestros (appat,apmat,nombre,rfc,curp,idstatus) VALUES('".$datos->getappat()."','".$datos->getapmat()."','".$datos->getnombre()."','".$datos->getrfc()."', '".$datos->getcurp()."', 1)";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();


    }

    public function lista($idstatus){
        $lista = array();

        $sql = "SELECT * FROM maestros WHERE idstatus=".$idstatus." ORDER BY idmaestro";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new maestros($renglon);

                $lista[$i]= $dato_tabla;
            }
        }

        return $lista;

    }

    public function elimina($id){
        
        $sql = "UPDATE maestros SET idstatus=0 WHERE idmaestro=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza($datos){
        $sql = "UPDATE maestros SET appat='".$datos->getappat()."', apmat='".$datos->getapmat()."', nombre='".$datos->getnombre()."', rfc='".$datos->getrfc()."', curp='".$datos->getcurp()."' WHERE idmaestro=".$datos->getidmaestro();
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

       
    public function busca($id){
        $lista = array();

        $sql = "SELECT * FROM maestros WHERE idmaestro=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new maestros($renglon);

                $lista[0]= $dato_tabla;
        }

        return $lista;

    }

    

}