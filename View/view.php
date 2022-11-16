<?php
  
require_once "libs/libs/Smarty.class.php";
    
class View {

  private $smarty;
  
  public function __construct(){
    $this->smarty= new Smarty();
  }

  public function mostrarformlogin($error=null){
    $this->smarty->assign('error', $error);
    $this->smarty->display ('formlogin.tpl');
  }

  public function showHome($vuelos , $ciudades){
    $this->smarty->assign('vuelos', $vuelos);
    $this->smarty->assign('ciudades', $ciudades);
    $this->smarty->display ('vuelos.tpl');
  }    

  public function verDetalles($detalleVuelo, $ciudades) {
    $this->smarty->assign('detalleVuelo', $detalleVuelo);
    $this->smarty->assign('ciudades', $ciudades);
    $this->smarty->display ('detalleVuelo.tpl');
  }

  public function showFormVuelo($ciudades){
    $this->smarty->assign('ciudades', $ciudades);
    $this->smarty->display ('registroVuelo.tpl');
  }

  public function showFormDestino(){
    $this->smarty->display ('registroDestino.tpl');
  }

  public function ingresarVuelo($vuelos){
    $this->smarty->assign('vuelos', $vuelos);
    $this->smarty->display ('registroVuelo.tpl');
  }

  public function consultarVuelo($consultaVuelo, $ciudades){
    $this->smarty->assign('consultaVuelo', $consultaVuelo);
    $this->smarty->assign('ciudades', $ciudades);
    $this->smarty->display ('editarVuelo.tpl');
  }

  public function verDestinos($tablaDestinos){
    $this->smarty->assign('destinos', $tablaDestinos);
    $this->smarty->display ('destinos.tpl');
  }

  public function vuelosPorDestino($destino, $vuelos){
    $this->smarty->assign('destino', $destino);
    $this->smarty->assign('vuelos', $vuelos);
    $this->smarty->display ('vuelosPorDestino.tpl');
  }

  public function eliminarDestino ($id){
    echo "<p> Desea eliminar todos los vuelo del destino?</p>
      <a href='".BASE_URL."confirmaeliminardestino/".$id."'>SI</a>
      <a href='".BASE_URL."verdestinos'>NO</a>";
  }
  public function consultarDestino($consultaDestino){
    $this->smarty->assign('consultaDestino', $consultaDestino);
    $this->smarty->display ('editarDestino.tpl');
  }

}
