<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$idGrupo = $_POST['idGrupo'];
//$nombre    = $_POST['nombre'];
$respuesta1       = $_POST['resp1'];
$respuesta2  = $_POST['resp2'];
$respuesta3     = $_POST['resp3'];
$respuesta4      = $_POST['resp4'];
$respuesta5      = $_POST['resp5'];








require_once __DIR__.'/../modelo/Examen1Modelo.php';
$ObjEx1 = new Examen1Modelo();
if(isset($_POST['btn_mostrar']))
{

    $rows = $ObjEx1->obtenerTodos();
    mostrar($rows);
}

function mostrar($rows="")
{
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de Respuestas</caption>";
    echo "<tr>";
    echo "<th>IdExamen1</th>";
    echo "<th>Nombre</th>";
    echo "<th>Respuesta1</th>";
    echo "<th>Respuesta2</th>";
    echo "<th>Respuesta3</th>";
    echo "<th>Respuesta4</th>";
    echo "<th>Respuesta5</th>";
    echo "<th>Nota</th>";
    echo "</tr>";
    while ($fila = $rows->fetch_row())
    {
        echo "<tr>";
        echo "<td> <center>".$fila[0]."</center></td>";
        echo "<td>".$fila[1]."</td>";
        echo "<td>".$fila[2]."</td>";
        echo "<td>".$fila[3]."</td>";
        echo "<td>".$fila[4]."</td>";
        echo "<td>".$fila[5]."</td>";
        echo "<td>".$fila[6]."</td>";
        echo "<td> <center>".$fila[7]."</td>";
        echo "</tr>";


    }
    echo "</table>";
}
/*function mostrar1($menor="",$entre="",$mayor="")
{
    $men=$menor->fetch_row();
    $ent=$entre->fetch_row();
    $may=$mayor->fetch_row();
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Estadistica</caption>";
    echo "<tr>";
    echo "<th>Categoria</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Promedio Edad</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>"."MENORES A 15 AÑOS"."</td>";
    echo "<td>".$men[0]."</td>";
    echo "<td>".$men[1]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>"."ENTRE 15 y 45 AÑOS"."</td>";
    echo "<td>".$ent[0]."</td>";
    echo "<td>".$ent[1]."</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>"."MAYORES A 45 AÑOS"."</td>";
    echo "<td>".$may[0]."</td>";
    echo "<td>".$may[1]."</td>";
    echo "</tr>";

    echo "</table>";
}

function mostrar2($rows="")
{
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Estadistica</caption>";
    echo "<tr>";
    echo "<th>Categoria</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Promedio Edad</th>";
    echo "</tr>";

    $edad1 = 0;
    $edad2 = 0;
    $edad3 = 0;
    $cont1 = 0;
    $cont2 = 0;
    $cont3 = 0;
    while ($fila = $rows->fetch_row())
    {
        $edad = $fila[5];
        if($edad<15)
        {
            $edad1++;
            $cont1 = $edad + $cont1;
            $prom1 = $cont1/$edad1;
        }

        if($edad>14 && $edad<36)
        {
            $edad2++;
            $cont2 = $edad + $cont2;
            $prom2 = $cont2/$edad2;
        }

        if($edad>34)
        {
            $edad3++;
            $cont3 = $edad + $cont3;
            $prom3 = $cont3/$edad3;
        }
    }



    echo "<tr>";
    echo "<td>"."MENORES A 15 AÑOS"."</td>";
    echo "<td>".$edad1."</td>";
    echo "<td>".intval($prom1)."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>"."ENTRE 15 y 35 AÑOS"."</td>";
    echo "<td>".$edad2."</td>";
    echo "<td>".intval($prom2)."</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>"."MAYORES A 35 AÑOS"."</td>";
    echo "<td>".$edad3."</td>";
    echo "<td>".intval($prom3)."</td>";
    echo "</tr>";

    echo "</table>";
}*/

if(isset($_POST['btn_enviar']))
{
    echo "<br>Enviaste tus resultados";
    echo $aux;

  /*  if($nombre=="")
    {
        echo "<br>Debe introducir nombre.. NO SE ADICIONO";
    }*/
  //  else
    //{
        $nota = 0;
        echo "<br>Se adiciono exitosamente!";
        if($respuesta1 == '2')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta1($respuesta1);
        }else {
          $ObjEx1->setRespuesta1($respuesta1);
        }
        if($respuesta2 == '4')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta2($respuesta2);
        }
        else {
          $ObjEx1->setRespuesta2($respuesta2);
        }
        if($respuesta3 == '6')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta3($respuesta3);
        }
        else {
          $ObjEx1->setRespuesta3($respuesta3);
        }
        if($respuesta4 == '8')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta4($respuesta4);
        }else {
          $ObjEx1->setRespuesta4($respuesta4);
        }
        if($respuesta5 == '10')
        {
          $nota = $nota + 20;
          $ObjEx1->setRespuesta5($respuesta5);
        }else {
          $ObjEx1->setRespuesta5($respuesta5);
        }
        $ObjEx1->setNombre($_SESSION['grupo']);
        $ObjEx1->setNota($nota);
        $ObjEx1->adicionar();
  //  }



}
/*if(isset($_POST['btn_modificar']))
{
    echo "<br>Presiono el boton modificar";
    if($idCliente==0)
    {
        echo "<br>Debe introducir idCliente.. NO SE MODIFICO";

    }
    else
    {
        echo "<br>Se modifico exitosamente!";
        $ObjCli->setNombre($nombre);
        $ObjCli->setNit($nit);
        $ObjCli->setTelefono($telefono);
        $ObjCli->setEmail($email);
        $ObjCli->setEdad($edad);
        $ObjCli->modificar($idCliente);
    }
}
if(isset($_POST['btn_buscar']))
{
    if($idCliente == 0)
    {
        echo "<br>Debe introducir idCliente a buscar";
    }
    else
    {
        $rows = $ObjCli->obtenerCliente($idCliente);
        mostrar($rows);
    }
}
if(isset($_POST['btn_borrar']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjCli->borrarCliente($idCliente);
} /*
/*if(isset($_POST['btn_estadistica']))
{


   mostrar1($ObjCli->estadistica(), $ObjCli->estadistica1(),$ObjCli->estadistica2());




    if(isset($_POST['btn_estadistica']))
{


   mostrar2($ObjCli->obtenerTodos());


 } */
