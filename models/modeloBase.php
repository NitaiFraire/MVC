<?php

require_once 'config/dataBase.php';

class ModeloBase{

    public $db;

    public function __construct(){

        $this->db = dataBase::conectar();
    }

    public function getTodo($tabla){
        
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}