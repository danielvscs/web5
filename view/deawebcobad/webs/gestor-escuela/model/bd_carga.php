<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/carga.php");

class bd_cargar extends DataBase{

    public function agrega_carga($datos){
        $sql = "INSERT INTO carga ('idmaestro','idmateria','idgrupo') VALUES('".$datos->getidmaestro()."','".$datos->getdimateria()."','".$datos->getidgrupo()."')";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();


    }

    public function lista_carga(){
        $lista = array();

        $sql = "SELECT * FROM cargar ORDER BY idcarga";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new carga($reglon);

                $lista[$i]= $dato_tabla;
            }
        }

        return $lista;

    }

    public function elimina_cargar($idcarga){
        
        $sql = "DELETE FROM cargar WHERE idcargar=".$idcarga;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza_cargar($datos){
        $sql = "UPDATE carga SET idmaestro='".$datos->getidmaestro()."', idmateria='".$datos->getidmateria()."', idgrupo='".$datos->getidgrupo()."' WHERE idcarga=".$datos->getidcarga();
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();
    }

}