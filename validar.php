
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
			
		else if($cat == "Tecnologia")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/tecnologia.php");	
			}

		else if($cat == "Presentacion Oral")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/p_Oral.php");	
			}

		else if($cat == "Poster Cientifico")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/p_Cientifico.php");	
			}
		else if($cat == "Innovacion")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/p_Innovacion.php");	
			}

		else if($cat == "Presentacion Escrita")
			{
				session_start();
				$_SESSION ['usr'] = $usuario;
				header("location:home/p_Escrita.php");	
			}		
		
	  	
	}
	else
	{
		echo "<script>
                    alert('USUARIO NO ENCONTRADO. VUELVA A INTENTAR');
                    window.location.href='index.html';
                    </script> ";	


	}

	//Cierra la conexion
	mysqli_close($conexion);
?>

	
