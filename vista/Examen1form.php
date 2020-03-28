<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
       <meta charset="UTF-8">
  <title>Promo Upsa 2020</title>
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

    <center><h1>Examen 1</h1></center>
    <?php
    echo $_SESSION['grupo'];
     ?>

    <form method="POST" action="../controlador/Examen1Controlador.php" >

    <div class="form-group">
      <!--<label for="idExamen1">IdExamen1</label> -->
      <input type="hidden" name="idExamen1" class="form-control" id="idExamen1">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="resp1">Pregunta #1: Cuanto es 1+1? </label>
        <input type="text" name="resp1" class="form-control" id="resp1">
    </div>

    <div class="form-group">
        <label for="resp2">Pregunta #2: Cuanto es 2+2? </label>
        <input type="text" name="resp2" class="form-control" id="resp2">
    </div>

    <div class="form-group">
        <label for="resp3">Pregunta #3 Cuanto es 3+3? </label>
        <input type="text" name="resp3" class="form-control" id="resp3">
    </div>

    <div class="form-group">
        <label for="resp4">Pregunta #4 Cuanto es 4+4? </label>
        <input type="text" name="resp4" class="form-control" id="resp4">
    </div>
    <div class="form-group">
        <label for="resp5">Pregunta #5 Cuanto es 5+5? </label>
        <input type="text" name="resp5" class="form-control" id="resp5">
    </div>


    <center>
      <input type="submit" value="Enviar" class="btn btn-success" name="btn_enviar">
      <input type="submit" value="Mostrar Nota" class="btn btn-success" name="btn_mostrar">


    </center>

  </form>


  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>





</body>
</html>
