<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form - Modal</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

    <link rel="stylesheet" href="login/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>


<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Iniciar Sesión</h1>
    </div>
    <div class="form-content">
      <form action="validar.php" method="post">
        <!-- Example split danger button -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text bg-warning" for="inputGroupSelect01">Categoria</label>
          </div>
          <select name="cat" class="custom-select" id="inputGroupSelect01">
            <option selected>Escoja la categoría...</option>
            <option value="0">Admin</option>
            <option value="Programacion">Programacion</option>
            <option value="Electronica">Electronica</option>
            <option value="Robotica">Robotica</option>
            <option value="Metodologia de la Investigacion">Metodologia de la Investigacion</option>
          </select>
        </div>


          <div class="well span6" style="padding-top: 20px"></div>

          <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="user" required="required"/>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="psw" required="required"/>
          </div>

          <div class="well span6" style="padding-top: 20px"></div>

          <div class="form-group">
            <button type="submit">Iniciar</button>
          </div>

          <div class="well span6" style="padding-top: 10px"></div>

                    
      </form>
          <div class="form-group">
          <input type="button" class="btn bg-success" value="Registrar Admin" onclick="location.href = 'registrar.php';">
          </div>
    </div>
  </div>

  
      
  
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script  src="login/js/index.js"></script>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>




</body>

</html>
