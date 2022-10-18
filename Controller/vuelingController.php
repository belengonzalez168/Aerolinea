<?php
require_once "./Model/vuelingModel.php";
require_once "./View/view.php";


class VuelingController{
  private $vuelingModel;
  private $view;
  private $helper;


  public function __construct(){
    $this->vuelingModel= new VuelingModel();
    $this->view= new View(); 
    $this->helper= new Helper();   
    if (session_status() !=PHP_SESSION_ACTIVE) {
      session_start();
    }  
  }

  public function showHome(){
    $vuelos=$this->vuelingModel->showHome();
    $ciudades=$this->vuelingModel->listarCiudades(); 
    $this->view->showHome($vuelos, $ciudades);
  }

  public function verDetalle($id){
    $detalleVuelo=$this->vuelingModel->verDetalle($id);
    $ciudades=$this->vuelingModel->listarCiudades(); 
    $this->view->verDetalles($detalleVuelo, $ciudades); 
  }

  public function showFormVuelo(){
    $this->helper->check();
    $ciudades=$this->vuelingModel->listarCiudades(); 
    $this->view->showFormVuelo($ciudades);
  }

  public function ingresarVuelo(){ 
    $this->helper->check();
    if ((isset($_POST['numero']) && isset($_POST['ciudad'])&& isset($_POST['fecha'])
    && isset($_POST['horaSalida']) && isset($_POST['horaLlegada']) 
    && isset($_POST['escalas']) && isset($_POST['precio']))&& (!empty($_POST['numero']) && !empty($_POST['ciudad'])&&!empty($_POST['fecha'])
    && !empty($_POST['horaSalida']) && !empty($_POST['horaLlegada']) 
    && !empty($_POST['escalas']) && !empty($_POST['precio']))){
      $numero= $_POST['numero'];
      $id_ciudad= $_POST['ciudad'];
      $fecha= $_POST['fecha'];
      $horaSalida= $_POST['horaSalida'];
      $horaLlegada= $_POST['horaLlegada'];
      $escalas= $_POST['escalas'];
      $precio= $_POST['precio'];
    }
    $this->vuelingModel->ingresarVuelo($numero, $id_ciudad, $fecha, $horaSalida, $horaLlegada, $escalas, $precio);
    header("Location: home");

  } 

  function eliminarVuelo($id){
    $this->helper->check();
    $this->vuelingModel->eliminarVuelo($id);
    header("Location:".BASE_URL."home");
  }

  public function consultarVuelo($id){
    $ciudades=$this->vuelingModel->listarCiudades();
    $consultaVuelo=$this->vuelingModel->consultarVuelo($id);
    $this->view->consultarVuelo($consultaVuelo , $ciudades);
  }
 
  public function guardarEdicionVuelo($id_vuelo){
    $this->helper->check();
    if ((isset($_POST['id']) && isset($_POST['numero']) && isset($_POST['ciudad'])&&isset($_POST['fecha'])
     && isset($_POST['horaSalida']) && isset($_POST['horaLlegada']) 
     && isset($_POST['escalas']) && isset($_POST['precio']) )){
      $id_vuelo=$_POST['id']; 
      $numero= $_POST['numero']; 
      $ciudad= $_POST['ciudad']; 
      $fecha= $_POST['fecha']; 
      $horaSalida= $_POST['horaSalida']; 
      $horaLlegada= $_POST['horaLlegada']; 
      $escalas= $_POST['escalas']; 
      $precio= $_POST['precio']; 
    }
    $this->vuelingModel->guardarEdicionVuelo($id_vuelo,$numero, $ciudad, $fecha, $horaSalida, 
    $horaLlegada, $escalas, $precio);
    header("Location:".BASE_URL."home");
  }

  function vuelosPorDestino($id){
    $destino=$this->vuelingModel->identificarDestino($id); 
    $vuelosPorDestino= $this->vuelingModel->vuelosPorDestino($id);
    $this->view->vuelosPorDestino($destino, $vuelosPorDestino);

  }
}