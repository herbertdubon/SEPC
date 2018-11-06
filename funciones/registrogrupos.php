<?php 

include_once 'conexion.php';

$nproyecto = $_POST['nproyecto'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$cif = $_POST['cif'];




$insert = "INSERT INTO grupos (nombre_proyecto, n1, n2, n3, n4, n5, CIF) VALUES ('$nproyecto','$n1','$n2' ,'$n3' ,'$n4' ,'$n5' ,'$cif');";

  echo $result=mysqli_query($con,$insert);


 ?>
