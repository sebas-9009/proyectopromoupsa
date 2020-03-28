<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
       <meta charset="UTF-8">
  <title>Mi microERP</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"  crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</head>


<body>

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1>Examen 3</h1></center>

    <form method="POST" action="../controlador/Examen3Controlador.php" >

    <div class="form-group">
      <label for="idProducto">Id de Producto</label>
      <input type="text" name="idProducto" class="form-control" id="idProducto">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="stock">Stock </label>
        <input type="text" name="stock" class="form-control" id="stock">
    </div>

    <div class="form-group">
        <label for="costo">Costo </label>
        <input type="text" name="costo" class="form-control" id="costo">
    </div>

    <div class="form-group">
        <label for="precio">Precio </label>
        <input type="text" name="precio" class="form-control" id="precio">
    </div>




    <center>
      <input type="submit" value="Adicionar" class="btn btn-success" name="btn_adicionar1">
      <input type="submit" value="Borrar" class="btn btn-danger" name="btn_borrar1">
      <input type="submit" value="Modificar" class="btn btn-warning" name="btn_modificar1">
      <input type="submit" value="Buscar" class="btn btn-info" name="btn_buscar1">
      <input type="submit" value="Listar" class="btn btn-primary" name="btn_listar1">

    </center>

  </form>


  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>





</body>
</html>
