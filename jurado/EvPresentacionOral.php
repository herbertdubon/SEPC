
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#form1 div table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
 <body>
 	 <div align="center" class="container" id="advanced-search-form">
 	<form action="">
 <?php 

$id_grupo=$_POST["id_grupo"];
$id_juez=$_POST["id_juez"];
$id_categoria=$_POST["id_categoria"];
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];
$s4=$_POST["s4"];
$s5=$_POST["s5"];
$s6=$_POST["s6"];
$s7=$_POST["s7"];
$total=$s1+$s2+$s3+$s4+$s5+$s6+$s7;
//echo $total;

include("conexion.php");
$link=conecta(); 

$sql="INSERT INTO rescat3 (id_rescat3,id_grupo,id_juez,id_categoria,resultado) values(0,'$id_grupo','$id_juez','$id_categoria','$total')";

$result=mysqli_query($link,$sql);

echo $result;

if($result==1)
{

echo "DATOS ENVIADOS CORRECTAMENTE";

}else{
	echo "DATOS NO ENVIADOS";
}

 ?>
<br><br>
<input type="button" value="Regresar" onclick="window.location.href='../home/dash.php'" />
</form>
</div>
 </body>
 
