<?php

class VuelingModel{
    
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolinea;charset=utf8', 'root', '');
    }

    public function showHome(){
        $consulta= $this->db->prepare("SELECT * FROM vuelos");
        $consulta->execute();
        $vuelos = $consulta->fetchall(PDO::FETCH_OBJ);
        return $vuelos;
    }

    public function listarCiudades(){
        $consulta= $this->db->prepare("SELECT * FROM destinos");
        $consulta->execute();
        $ciudades = $consulta->fetchall(PDO::FETCH_OBJ);
        return $ciudades;
    }

    function verDetalle($id){
        $consulta= $this->db->prepare("SELECT * FROM vuelos WHERE (id_vuelo=?)");
        $consulta->execute(array($id));
        $detalleVuelo= $consulta->fetchall(PDO::FETCH_OBJ);
        return $detalleVuelo;   
    }

    function ingresarVuelo($numero, $id_ciudad, $fecha, $horaSalida, $horaLlegada, $escalas, $precio){
        $consulta= $this->db->prepare("INSERT INTO vuelos (numero, id_ciudad, fecha, horaSalida, horaLlegada, escalas, precio) VALUES (?,?,?,?,?,?,?)");
        $consulta->execute(array($numero, $id_ciudad, $fecha, $horaSalida, $horaLlegada, $escalas, $precio));   
    }

    function eliminarVuelo($id){
        $consulta= $this->db->prepare("DELETE FROM vuelos  WHERE (id_vuelo=?)");
        $consulta->execute(array($id));
    }

    public function consultarVuelo($id){
        $consulta= $this->db->prepare("SELECT * FROM vuelos where (id_vuelo=?)");
        $consulta->execute(array($id));
        $vuelo= $consulta->fetchall(PDO::FETCH_OBJ);
        return $vuelo;   
    }

    public function guardarEdicionVuelo($id_vuelo, $numero, $ciudad, $fecha, $horaSalida, $horaLlegada, $escalas, $precio){
        $consulta= $this->db->prepare("UPDATE vuelos  SET numero=?, id_ciudad=?, fecha=?, horaSalida=?, horaLlegada=?, escalas=?, precio=?  WHERE (id_vuelo=?)");
        $consulta->execute(array($numero, $ciudad, $fecha, $horaSalida, $horaLlegada, $escalas, $precio, $id_vuelo));
    }
   
    public function identificarDestino($id){
        $consulta= $this->db->prepare("SELECT * FROM destinos WHERE (id_destino=?)");
        $consulta->execute(array($id));
        $destino = $consulta->fetchall(PDO::FETCH_OBJ);
        return $destino;
    }

    public function vuelosPorDestino($id){
        $consulta= $this->db->prepare("SELECT * FROM vuelos where (id_ciudad=?)");
        $consulta->execute(array($id));
        $vuelosPorDestino= $consulta->fetchall(PDO::FETCH_OBJ);
        return $vuelosPorDestino;
    }

    
}