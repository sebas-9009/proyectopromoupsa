<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$idProducto = $_POST['idProducto'];
$nombre     = $_POST['nombre'];
$stock      = $_POST['stock'];
$costo      = $_POST['costo'];
$precio     = $_POST['precio'];








require_once __DIR__.'/../modelo/ProductoModelo.php';
$ObjPro = new ProductoModelo();
if(isset($_POST['btn_listar1']))
{
    $rows = $ObjPro->obtenerTodos();
    mostrar($rows);
}

function mostrar($rows="")
{
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de productos</caption>";
    echo "<tr>";
    echo "<th>IdProducto</th>";
    echo "<th>Nombre</th>";
    echo "<th>Stock</th>";
    echo "<th>Costo</th>";
    echo "<th>Precio</th>";
    echo "</tr>";
    while ($fila = $rows->fetch_row())
    {
        echo "<tr>";
        echo "<td> <center>".$fila[0]."</center></td>";
        echo "<td>".$fila[1]."</td>";
        echo "<td>".$fila[2]."</td>";
        echo "<td>".$fila[3]."</td>";
        echo "<td> <center>".$fila[4]."</td>";
        echo "</tr>";
        
    }
    echo "</table>";
}
if(isset($_POST['btn_adicionar1']))
{
    echo "<br>Presiono el boton adicionar";
    if($nombre=="")
    {
        echo "<br>Debe introducir nombre.. NO SE ADICIONO";
    }
    else
    {
        echo "<br>Se adiciono exitosamente!";
        $ObjPro->setNombre($nombre);
        $ObjPro->setStock($stock);
        $ObjPro->setCosto($costo);
        $ObjPro->setPrecio($precio);
        $ObjPro->adicionar();
    }
    
}
if(isset($_POST['btn_modificar1']))
{
    echo "<br>Presiono el boton modificar";
    if($idProducto==0)
    {
        echo "<br>Debe introducir idProducto.. NO SE MODIFICO";
        
    }
    else 
    {
        echo "<br>Se modifico exitosamente!";
        $ObjPro->setNombre($nombre);
        $ObjPro->setStock($stock);
        $ObjPro->setCosto($costo);
        $ObjPro->setPrecio($precio);
        $ObjPro->modificar($idProducto);
    }
}
if(isset($_POST['btn_buscar1']))
{
    if($idProducto == 0)
    {
        echo "<br>Debe introducir idProducto a buscar";
    }
    else
    {
        $rows = $ObjPro->obtenerProducto($idProducto);
        mostrar($rows);
    }
}
if(isset($_POST['btn_borrar1']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjPro->borrarProducto($idProducto);
}