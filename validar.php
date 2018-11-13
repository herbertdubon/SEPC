
<?php  


	$usuario = $_POST['user'];
	$clave = $_POST['psw'];
	$cat= $_POST['cat'];


	//Se conecta a la base
	$conexion= mysqli_connect("localhost", "root", "", "proyecto");
	require("funciones/database.php");
	include("funciones/functions.php");
	
	$consulta ="SELECT * from users where usr = '$usuario' and pass= '$clave' and nombre_categoria = '$cat'";
	$data = Database::getRows($consulta, null);

	//Verifica si el usuario existe
	if($data != null)
	{
			
			
		if($cat== "0")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/dash.php");
			}
			
		else if($cat == "Programacion")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/jurado_innovacion.php");	
			}

		else if($cat == "Robotica")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/jurado_innovacion.php");	
			}

		else if($cat == "Electronica")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/jurado_innovacion.php");	
			}
		else if($cat == "Metodologia de la Investigacion")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/jurado_metodos.php");	
			}

		
			
		
	  	
	}
	else
	{
		echo "nel";
		header("location:index.php");	


	}

	//Cierra la conexion
	mysqli_close($conexion);
?>

	
