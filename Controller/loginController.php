<?php

require_once "./Model/loginModel.php";
require_once "./View/view.php";

class LoginController{

    private $loginModel;
    private $view;

    public function __construct(){
        $this->loginModel= new LoginModel();
        $this->view= new View();  
    }

    public function Showformlogin(){
        $this->view->mostrarformlogin();
    }

    public function controlingreso(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->loginModel->verUsuario($email);
    
        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['USER_ID'] = $user->id_usuario;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location:".BASE_URL."home");  
            } else {     
            $this->view->mostrarformlogin("El usuario o la contraseña no existe.");
            } 
        }
    
    public function logout() {
        session_start();
        session_destroy();
        header("Location:".BASE_URL."home");
    }

}
