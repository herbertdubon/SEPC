<?php 

include_once 'conexion.php';

$nproyecto = $_POST['nproyecto'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$usr = $_POST['usr'];




$insert = "INSERT INTO grupos (nombre_proyecto, n1, n2, n3, n4, n5, usr) VALUES ('$nproyecto','$n1','$n2' ,'$n3' ,'$n4' ,'$n5' ,'$usr');";

  echo $result=mysqli_query($con,$insert);


 ?>
