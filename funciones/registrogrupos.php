<?php 

include_once 'conexion.php';

$nproyecto = $_POST['nproyecto'];
$categoria = $_POST['ncat'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$usr = $_POST['usr'];


$insert = "INSERT INTO grupos (nombre_proyecto, categoria, n1, n2, n3, n4, n5, usr) VALUES ('$nproyecto','$categoria','$n1','$n2' ,'$n3' ,'$n4' ,'$n5' ,'$usr');";
echo $insert;

echo $result=mysqli_query($con,$insert);
  
