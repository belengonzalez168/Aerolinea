<?php

class DestinationModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolinea;charset=utf8', 'root', '');
    }

    function verDestinos(){
        $consulta= $this->db->prepare("SELECT * FROM destinos ");
        $consulta->execute();
        $destinos= $consulta->fetchall(PDO::FETCH_OBJ);
        return $destinos;
    }
    
    function ingresarDestino($ciudad, $pais, $region){
        $consulta= $this->db->prepare("INSERT INTO destinos (ciudad, pais, region) VALUES (?,?,?)");
        $consulta->execute(array($ciudad, $pais, $region));
    }

    function eliminarDestino($id){
        $consulta= $this->db->prepare("DELETE FROM destinos  WHERE (id_destino=?)");
        $consulta->execute(array($id));
    }

    public function consultarDestino($id){
        $consulta= $this->db->prepare("SELECT * FROM destinos WHERE (id_destino=?)");
        $consulta->execute(array($id));
        $destino= $consulta->fetchall(PDO::FETCH_OBJ);
        
        return $destino;     
    }

    function guardarEdicionDestino($id_destino, $ciudad, $pais, $region){
        $consulta= $this->db->prepare("UPDATE destinos  SET ciudad=?, pais=?, region=?  WHERE (id_destino=?)");
        $consulta->execute(array($ciudad, $pais, $region, $id_destino));
    }
}