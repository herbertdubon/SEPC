<?php
$usuario = $_POST['usr'];
$clave = $_POST['psw'];

session_start();
$_SESSION ['usr'] = $usuario;

//Se conecta a la base
$conexion= mysqli_connect("localhost", "root", "", "proyecto");
$consulta="SELECT * from users where usr = '$usuario' and pass= '$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas>0)
{
 header("location:home/dash.php");

}

else
{

  echo "Datos incorrectos!";
}
mysqli_free_result($resultado);
mysqli_close($conexion);