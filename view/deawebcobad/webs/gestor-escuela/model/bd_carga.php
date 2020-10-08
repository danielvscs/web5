<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/carga.php");

class bd_carga extends DataBase{

    public function agrega($datos){
        $sql = "INSERT INTO carga (idmaestro,idmateria,idgrupo) VALUES(".$datos->getidmaestro().",".$datos->getidmateria().",".$datos->getidgrupo().")";
        $con = $this->getDB();
        $resultado = $con->query($sql);
        $con->close();


    }

    public function lista(){
        $lista = array();

        $sql = "SELECT * FROM carga ORDER BY idcarga";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new carga($renglon);

                $lista[$i]= $dato_tabla;
            }
        }

        return $lista;

    }

    public function elimina($idcarga){
        
        $sql = "DELETE FROM cargar WHERE idcargar=".$idcarga;
        $con = $this->getDB();
        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza($datos){
        $sql = "UPDATE carga SET idmaestro=".$datos->getidmaestro().", idmateria=".$datos->getidmateria().", idgrupo=".$datos->getidgrupo()." WHERE idcarga=".$datos->getidcarga();
        $con = $this->getDB();
        
        $resultado = $con->query($sql);
        $con->close();
    }

    public function busca($id){
        $lista = array();

        $sql = "SELECT * FROM carga WHERE idcarga=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new carga($renglon);

                $lista[0]= $dato_tabla;
        }

        return $lista;

    }


}