<?php
require_once "./Helper/helper.php";
require_once "./Model/destinationModel.php";
require_once "./View/view.php";

class DestinationController{
  private $destinationModel;
  private $view;
  private $helper;


  public function __construct(){
    $this->destinationModel= new DestinationModel();
    $this->view= new View();  
    $this->helper= new Helper(); 
    if (session_status() !=PHP_SESSION_ACTIVE) {
      session_start();
    }
  }

  public function verDestinos(){
    $destinos= $this->destinationModel->verDestinos();
    $this->view->verDestinos($destinos); 
  }

  public function showFormDestino(){
    $this->helper->check();
    $this->view->showFormDestino();
  }
  function ingresarDestino(){ 
    $this->helper->check(); 
    if ((isset($_POST['id_destino']) && isset($_POST['ciudad']) && isset($_POST['pais']) && isset($_POST['region']))&& !empty($_POST['ciudad']) && !empty($_POST['pais']) && !empty($_POST['region'])){             
      $ciudad= $_POST['ciudad'];
      $pais= $_POST['pais'];
      $region= $_POST['region'];
      $this->destinationModel->ingresarDestino($ciudad, $pais, $region);
      header("Location:".BASE_URL."verdestinos");
    }
  }

  function consultaEliminarDestino($id){
    $this->helper->check();
    $this->view->eliminarDestino($id);
  }

  public function eliminarDestino($id){
    $this->helper->check();
    $this->destinationModel->eliminarDestino($id);
    $this->view->eliminarDestino($id);
    header("Location:".BASE_URL."verdestinos");
  }
  
  public function consultarDestino($id){
    $this->helper->check();
     $destino=$this->destinationModel->consultarDestino($id);
     $this->view->consultarDestino($destino);

   }
  
  public function guardarEdicionDestino($id){
    $this->helper->check();
    if ((isset($_POST['id_destino']) && isset($_POST['ciudad']) && isset($_POST['pais']) && isset($_POST['region']))
    && (!empty($_POST['ciudad']) && !empty($_POST['pais']) && !empty($_POST['region']))){ 
      $id=$_POST['id_destino'];
      $ciudad= $_POST['ciudad'];
      $pais= $_POST['pais'];
      $region= $_POST['region'];  
      $this->destinationModel->guardarEdicionDestino($id, $ciudad,$pais,$region);
      header("Location:".BASE_URL."verdestinos");    
    }
  }
}