<?php


include_once('base.php');
include_once($raiz."/view/deawebcobad/webs/gestor-escuela/class/alumnos.php");

class bd_alumno extends DataBase{

    public function agrega($datos){
        $sql = "INSERT INTO alumnos (nombre,curp,correo,celular,domicilio,ciudad) VALUES('".$datos->getnombre()."','".$datos->getcurp()."','".$datos->getcorreo()."','".$datos->getcelular()."', '".$datos->getdomicilio()."', '".$datos->getciudad()."')";
        $con = $this->getDB();
        echo $sql;
        $resultado = $con->query($sql);
        $con->close();
    }

    public function lista(){
        $lista = array();

        $sql = "SELECT * FROM alumnos ORDER BY idalumno";
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
            for ($i=0; $i < $resultado->num_rows; $i++) { 
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new alumnos($renglon);

                $lista[$i]= $dato_tabla;
            }
        }
        return $lista;
    }

    public function elimina($id){
        
        $sql = "DELETE FROM alumnos WHERE idalumno=".$id;
        $con = $this->getDB();
        $resultado = $con->query($sql);
        $con->close();
    }

    public function actualiza($datos){
        $sql = "UPDATE alumnos SET nombre='".$datos->getnombre()."', curp='".$datos->getcurp()."', correo='".$datos->getcorreo()."', celular='".$datos->getcelular()."', domicilio='".$datos->getdomicilio()."', ciudad='".$datos->getciudad()."' WHERE idalumno=".$datos->getidalumno();
        $con = $this->getDB();
        
        $resultado = $con->query($sql);
        $con->close();
    }

       
    public function busca($id){
        $lista = array();

        $sql = "SELECT * FROM alumnos WHERE idalumno=".$id;
        $con = $this->getDB();

        $resultado = $con->query($sql);
        $con->close();

        if($resultado->num_rows>0){
                $renglon = $resultado->fetch_assoc();

                $dato_tabla = new alumnos($renglon);

                $lista[0]= $dato_tabla;
        }

        return $lista;

    }

    

}