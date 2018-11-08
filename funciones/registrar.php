<?php 

include_once 'conexion.php';

$user = $_POST['user'];
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$cif = $_POST['cif'];
$ncategoria = $_POST['nombrecat'];



$insert = "INSERT INTO users (usr,  nombre, pass, CIF, nombre_categoria) VALUES ('$user','$nombre','$pass','$cif','$ncategoria'); INSERT INTO jueces  (usr, nombre_juez, CIF, nombre_categoria) VALUES ('$user','$nombre','$cif','$ncategoria')";


 echo $result= mysqli_multi_query($con,$insert);








 ?>









