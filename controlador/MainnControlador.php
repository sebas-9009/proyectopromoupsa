<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$grupo = $_POST['grupo'];
$_SESSION['grupo'] = $grupo;

require_once __DIR__.'/../modelo/Examen1Modelo.php';

$Obj = new Examen1Modelo();
$Obj->setGrupo($grupo);
$a = $Obj->getGrupo();
$Obj->adicionarNombre();

if($_POST['promo']=='a')
{
  $row = $Obj->obtenerNota($grupo);
  $fila = $row->fetch_row();
  if($fila[2]=="" ){
    require_once __DIR__. '/../vista/Examen1form.php';
  }else {
    require_once __DIR__. '/../vista/mainn.html';
  }

}else {
  if($_POST['promo']=='b')
  {
      require_once __DIR__. '/../vista/Examen2form.php';
  }else {
    if($_POST['promo']=='c')
    {
      require_once __DIR__. '/../vista/Examen3form.php';
    }
  }
}








/*if(isset($_POST['btn_examen1']))
{
    require_once __DIR__. '/../vista/Examen1form.php';

}
if(isset($_POST['btn_examen2']))
{
    require_once __DIR__. '/../vista/Examen2form.php';
}
if(isset($_POST['btn_examen3']))
{
    require_once __DIR__. '/../vista/Examen3form.php';
}*/
