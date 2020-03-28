<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$idVenta   = $_POST['idVenta'];
$fecha     = $_POST['fecha'];
$idCliente = $_POST['combo'];









require_once __DIR__.'/../modelo/VentaModelo.php';
require_once __DIR__.'/../modelo/ClienteModelo.php';
$ObjVen = new VentaModelo();
if(isset($_POST['btn_listar2']))
{
    $rows = $ObjVen->obtenerTodos();
    mostrar($rows);
}

function mostrar($rows="")
{
    
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de Ventas</caption>";
    echo "<tr>";
    echo "<th>IdVenta</th>";
    echo "<th>Fecha</th>";
    echo "<th>IdCliente</th>";
    echo "<th>Nombre</th>";

    echo "</tr>";
  
    
    while ($fila = $rows->fetch_row())
    {
        echo "<tr>";
        echo "<td> <center>".$fila[0]."</center></td>";
        echo "<td> <center>".$fila[1]."</center></td>";
        echo "<td> <center>".$fila[2]."</td>";
        $Cliente = new ClienteModelo();
        $xx = $Cliente->obtenerCliente($fila[2]);
        echo "<td>". $xx->fetch_row()[1] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";
}
if(isset($_POST['btn_adicionar2']))
{
    echo "<br>Presiono el boton adicionar";
    if($fecha=="")
    {
        echo "<br>Debe introducir nombre.. NO SE ADICIONO";
    }
    else
    {
        echo "<br>Se adiciono exitosamente!";
        $ObjVen->setFecha($fecha);
        $ObjVen->setIdCliente($idCliente);
        $ObjVen->adicionar();
    }
    
}
if(isset($_POST['btn_modificar2']))
{
    echo "<br>Presiono el boton modificar";
    if($idVenta==0)
    {
        echo "<br>Debe introducir idVenta.. NO SE MODIFICO";
        
    }
    else 
    {
        echo "<br>Se modifico exitosamente!";
        $ObjVen->setFecha($fecha);
        $ObjVen->setIdCliente($idCliente);
        $ObjVen->modificar($idVenta);
    }
}
if(isset($_POST['btn_buscar2']))
{
    if($idVenta == 0)
    {
        echo "<br>Debe introducir idVenta a buscar";
    }
    else
    {
        $rows = $ObjVen->obtenerVenta($idVenta);
        mostrar($rows);
    }
}
if(isset($_POST['btn_borrar2']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjVen->borrarVenta($idVenta);
}