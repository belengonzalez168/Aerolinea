<?php

class LoginModel{
 private $db;


    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolinea;charset=utf8', 'root', '');
    }

    public function verUsuario($email){
        $consulta= $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
        $consulta->execute(array($email));
        $usuario =$consulta->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

}    