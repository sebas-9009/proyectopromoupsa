<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROMO UPSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<style>
.button {
  background-color: #FFBF00; /* Green */
  border: none;
  color: white;
  font-weight: bold;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 40px;}
.button5 {border-radius: 50%;}
.p{
	color:red;
	font-weight:bold;
	font-size: 9px;
}
.p2 {border-radius: 50%;}

</style>
	</head>
  <div class="wrapper">
    <div class="image-holder">
      <img src="images/logo.png" alt="">
    </div>
          <form action="controlador/MainnControlador.php" method="POST">
            <div class="form-header">
              <a href="#">#Promo UPSA cuestionario online</a>
              <h3>ESTA ES UNA PRUEBA</h3>
            </div>
            <div id="wizard">
                <h4></h4>
                <section>
                  <div class="form-row">
                        <label for="">
                        Nombre del grupo:
                        </label>
                        <div class="form-holder">
                          <input type="text" class="form-control" name="grupo" id ="grupo"><br>
                        </div>
                      </div>
                    <div class="form-row">
                      <label for="">
                        Carrera en la que quiere estudiar el grupo?
                      </label>
                      <div class="form-holder">
                        <select name="promo" id="exam" class="form-control">
                          <option value="" selected disabled>Carrera que te los apasiona</option>
                <option value="a" class="option">Ingenieria Informatica o de Sistema</option>
                <option value="b" class="option">Ingenieria Industrial</option>
                <option value="c" class="option">Ingenieria Civil</option>
                <option value="d" class="option">Diseño grafico</option>
              </select>
              <i class="zmdi zmdi-caret-down"></i>
                      </div>
                    </div>
                     <button class="button button4 ">Registrar Grupo</button>
                </section>
            </div>
          </form>
  </div>
</body>
</html>
