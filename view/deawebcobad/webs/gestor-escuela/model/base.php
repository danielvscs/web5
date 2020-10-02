<?php

class DataBase{

    private $db;
    protected $messages = array();
    private $server = "localhost";

        
    private $user = "id12764297_danva";
    private $pass = "jCOeHD8w=BMzPMAS";
    private $data_base = "id12764297_alp10047";

    public function Connect(){
        mysql_connect($this->server, $this->user, $this->pass);
        mysql_select_db($this->data_base);
    }

    public function getDB(){
        try {
            $this->db = new mysqli(
                $this->server,
                $this->user,
                $this->pass,
                $this->data_base
            );

            $this->db->set_charset("utf8");

            if(mysql_connect_errno()){
                throw new Exception("No es posible conectar a la base de datos");
                
            }else{
                return $this->db;
            }

        } catch (Exeption $e) {
            $this->messages['DB_connection']=$e->getMessage();
        }
    }

}

