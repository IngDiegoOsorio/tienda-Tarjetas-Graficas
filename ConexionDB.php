<?php

class ConexionDB {
    
    public function getConexion(){
        $cnx=new PDO("mysql:host=localhost;dbname=administradores","diego","");
        return $cnx;
    }
}
