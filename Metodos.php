<?php

include 'ConexionDB.php';

class Metodos {
    public function ListarProductos() {
            $cnx=new ConexionDB();
            $conexion=$cnx->getConexion();
            
            $res= $conexion->prepare("select * from productos where status= 1 && eliminado=0");
            $res->execute();
            
            foreach ($res as $row){
                $lista[]=$row;
                
            }
            return $lista;
    }
    
public function ListarProductosPorId($id) {
            $cnx=new ConexionDB();
            $conexion=$cnx->getConexion();
            
            $res= $conexion->prepare("select * from productos where id=$id");
            $res->execute();
            
            foreach ($res as $row){
                $lista[]=$row;
                
            }
            return $lista;
    }
}
