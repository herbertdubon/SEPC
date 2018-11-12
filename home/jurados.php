

<?php 
	session_start();
	$varsesion = $_SESSION['usr'];

	if($varsesion == null || $varsesion == '')
	{
		echo 'Usted no tiene permiso de ver este contenido.';
		die();
	}

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"proyecto")
 ?>

<!doctype html>
<html lang="en">

<head>
	<title>SEPC UEES Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/uees.png">
	<?php require_once "scripts.php"; ?>
</head>

<body>
<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
        		</form>
        <form class="navbar-form navbar-left">
          <h4><span style="font-weight:bold">SISTEMA DE EVALUACION DE PROYECTOS DE CATEDRA FIUESS</span></h4>

        </form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">


						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user" ></i><span>Bienvenido <?php echo $_SESSION['usr']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">

								<li><a href="../funciones/salir.php""><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
						<a><img src="http://www.uees.edu.sv/wp-content/uploads/2017/06/logo140_37anos.png" alt="UEES Logo" class="img-responsive logo"></a>
						</li>
						<li><a href="dash.php" class="active"><i class="fas fa-tachometer-alt"></i><span>Inicio</span></a></li>		
						<li><a href="categorias.php" class=""><i class="fab fa-buromobelexperte"></i><span>Agregar Categorías</span></a></li>	
						<li><a href="jurados.php" class=""><i class="fas fa-gavel"></i> <span>Agregar Jurados</span></a></li>
						<li><a href="grupos.php" class=""><i class="fas fa-users"></i> <span>Agregar Grupos</span></a></li>
						<li>
								<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-clipboard-check"></i> <span>Evaluacion Grupos</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse ">
									<ul class="nav">
										<li><a href="../jurado/innovacion_form.php"><i class="far fa-check-square"></i>Innovacion</a></li>									
										<li><a href="../jurado/evaluacion_form.php"><i class="far fa-check-square"></i>Presentación Escrita Documento Completo</a></li>
										<li><a href="../jurado/EvPresentacionOral_form.php"><i class="far fa-check-square"></i>Presentación Oral</a></li>
										<li><a href="../jurado/EvPoster_form.php"><i class="far fa-check-square"></i>Poster Científico</a></li>									
									</ul>
								</div>
						</li>
						<li>
								<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fas fa-chart-bar"></i> <span>Reportes</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages2" class="collapse ">
									<ul class="nav">
										<li><a href="programacion.php"><i class="fas fa-chart-bar"></i>Programacion</a></li>	
										<li><a href="metodologiaInvestigacion.php"><i class="fas fa-chart-bar"></i>Metodología de la Investigación</a></li>	
										<li><a href="electronica.php"><i class="fas fa-chart-bar"></i>Electrónica</a></li>	
										<li><a href="robotica.php"><i class="fas fa-chart-bar"></i>Robotica</a></li>									
																		
									</ul>
								</div>
						</li>					
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<br><br>
			<!-- MAIN CONTENT -->
			<div class="container">

				<div class="well form-horizontal">
					<fieldset>

						<!-- Form Name -->
						<legend class="text-middle" align="center">Agregar Jurado</legend>

						<!-- Text input-->

						<div class="form-group">
							<a><label class="col-md-4 control-label">Usuario del Juez</label></a>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="user" name="njurado" placeholder="Ingresar Nombre..." class="form-control"  type="text" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<a><label class="col-md-4 control-label">Nombre completo del Juez</label></a>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="nombre" name="njurado" placeholder="Ingresar Nombre..." class="form-control"  type="text" required>
								</div>
							</div>
						</div>


						<!-- Text input-->
							<div class="form-group">
							<a><label class="col-md-4 control-label">Contraseña</label></a>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="pass" name="njurado" placeholder="Ingresar Contraseña..." class="form-control"  type="password" required>
								</div>
							</div>
						</div>

								<div class="form-group">
							<a><label class="col-md-4 control-label">CIF</label></a>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="cif" name="njurado" placeholder="Ingresar CIF..." class="form-control"  type="text" required>
								</div>
							</div>
						</div>


						<!-- Text input-->
							
						
						<div class="form-group">
							<a><label class="col-md-4 control-label">Categoria a evaluar</label></a>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<select id="nombrecat" name="nombrecat" class="form-control">	
											<option>Seleccione una categoría</option>
											<?php
										$res=mysqli_query($link,"select * from categorias");
										while($row=mysqli_fetch_array($res))
										{
										?>


											<option><?php echo $row ["nombre_categoria"];?></option>

										<?php	

										}					
										
										?>	
									</select>
								</div>
							</div>
						</div>

				
					

						<!-- Success message -->
						<div class="alert alert-success" role="alert" id="success_message" align="center">Mucha suerte  en la evaluación de su grupo. <i class="glyphicon glyphicon-thumbs-up"></i></div>

						<!-- Button -->
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-4" align="center">
								<button id="registrarNuevo" type="submit" class="btn btn-primary btn-lg" >Enviar &nbsp<span class="glyphicon glyphicon-send"></span></button>
							</div>
						</div>

					</fieldset>
				</div>
			</div>
		</div><!-- /.container -->


			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2018 <a href="https://www.themeineed.com" target="_blank"></a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="assets/vendor/chartist/js/chartist.min.js"></script>
		<script src="assets/scripts/klorofil-common.js"></script>

</body>

</html>
	<!-- Validacion

	El # es el id del boton de enviar, lo mismo con las variables, se trabajan con el id, no con el name -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#user').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}

			else if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}
			else if($('#pass').val()==""){
				alertify.alert("Debes agregar una contraseña");
				return false;
			}
			else if($('#cif').val()==""){
				alertify.alert("Debes agregar tu cif");
				return false;
			}
			else if($('#nombrecat').val()==""){
				alertify.alert("Debes agregar el id de la categoria");
				return false;
			}

			cadena= "user=" + $('#user').val() + 
					"&nombre=" + $('#nombre').val() + 
					"&pass=" + $('#pass').val() +
					"&cif=" + $('#cif').val() +
					"&nombrecat=" + $('#nombrecat').val();

					$.ajax({
						type:"POST",
						url:"../funciones/registrar.php",
						data:cadena,
						success:function(r){
							if(r==1){
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});

				
		});
	});
</script>