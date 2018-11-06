<?php 

include_once 'conexion.php';


$ncategoria = $_POST['ncat'];




$insert = "INSERT INTO categorias (nombre_categoria) VALUES ('$ncategoria');";

   echo $result= mysqli_query($con,$insert);


 ?>
