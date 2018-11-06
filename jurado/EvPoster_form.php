
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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#form1 table tr td p {
	font-family: Arial, Helvetica, sans-serif;
}
#form1 table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
#form1 table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
<form form action="EvPoster.php" id="form1" name="form1" method="post" action="">
  <table width="1273" border="1" align="center">
    <tr>
      <td height="54" colspan="5" align="center" valign="top"><p align="left"><img src="uees.png" width="180" height="180" /> <p align="center">VICERECTORIA DE INVESTIGACIÓN Y PROYECCIÓN SOCIAL DIRECCION DE INVESTIGACIÓN </p><br /> 
      <p align="center">FORMULARIO DE EVALUACION DE POSTER CIENTIFICO</p>
    </tr>
    <tr>
      <td height="44" colspan="4">ID de grupo   <select name="id_grupo" id="id_grupo">
          <option>Seleccione ID de grupo</option>
          <?php  
          $res=mysqli_query($link,"select * from grupos");
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>


                      <option><?php echo $row ["id_grupo"];?></option>

                    <?php 

                    }         
                    
                    ?>  
        </select></td>
      </tr>
      <tr>
        <td height="46" colspan="4">Jurado
          <select name="id_juez" id="id_juez">
            <option>Seleccione al jurado</option>
                <?php  
          $res=mysqli_query($link,"select * from jueces");
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>


                      <option><?php echo $row ["nombre_juez"];?></option>

                    <?php 

                    }         
                    
                    ?> 
        </select></td>
      </tr>
      <tr>
        <td height="46" colspan="4">Categoria
          <select name="id_categoria" id="id_categoria">
            <option>Seleccione nombre de Categoria</option>
                   <?php  
          $res=mysqli_query($link,"select * from categorias");
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>


                      <option><?php echo $row ["nombre_categoria"];?></option>

                    <?php 

                    }         
                    
                    ?> 
        </select></td>

    </tr>
    <tr>
      <td height="40" colspan="5"><strong>Titulo del poster: 
        <label for="tx"></label>
        <input name="tx" type="text" id="tx" value="" size="90" />
      </strong></td>
    </tr>
    <tr>
      <td height="58" colspan="5" valign="top"><strong>Escala de evaluacion:</strong> EXCELENTE (10);  MUY BUENO (9 - 8);  BUENO (7 - 6);  REGULAR (5 O MENOS).
      </td>
    </tr>
    
    <tr>
      <td width="38" align="center">&nbsp;</td>
      <td width="38" align="center"><strong>ESTRUCTURA</strong></td>
      <td width="652" align="center"><strong>INDICADOR DE CONTENIDO</strong></td>
      <td width="159" align="center"><strong>Nota</strong></td>
      <td width="287" align="center"><strong>OBSERVACIONES</strong></td>
    </tr>
    
    <tr>
      <td><strong>1</strong></td>
      <td><strong>Titulo del Poster</strong></td>
      <td height="50"><p>Es el mismo del articulo cientifico o del nombre final, pero corto y </p>
      <p>conciso (15 palabras max.)</p></td>
      <td align="center"><label for="select"></label>
        <select name="s1" id="s1">
          <option>seleccione un valor...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
      </select></td>
      <td><label for="ta1"></label>
      <textarea name="ta1" id="ta1" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><strong>2</strong></td>
      <td><strong>Autores y Filiacion</strong></td>
      <td height="67"><p>Apellido y Nombres de investigadores en linea, separados por comas y punto y coma. Nombre de la institucion que representan.</p>
        <p>Letra N.18 a 24. (Debajo del titulo).</p>
      <p>&nbsp;</p></td>
      <td align="center"><label for="select2"></label>
        <select name="s2" id="s2">
          <option>seleccione un valor...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
      </select></td>
      <td><label for="ta2"></label>
      <textarea name="ta2" id="ta2" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><strong>3</strong></td>
      <td><strong>Introduccion</strong></td>
      <td height="49"><p>Breves antecedentes. Teoria o conceptualizacion en su contexto, objetivo o hipotesis</p>
      <p>(Segun sea el caso) de 100 a 150 palabras.</p></td>
      <td><select name="s3" id="s3">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><label for="ta3"></label>
      <textarea name="ta3" id="ta3" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><strong>4</strong></td>
      <td><strong>Metodologia</strong></td>
      <td>Teoria metodologica, tipo y enfoque de investigacion, metodo, mustreo, instrumentos, tecnica y procedimientos; (max. 100 palabras).</td>
      <td><select name="s4" id="s4">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><label for="ta4"></label>
      <textarea name="ta4" id="ta4" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><strong>5</strong></td>
      <td><strong>Resultados</strong></td>
      <td height="71">Principales resultados que responde al objetivo general y a los investigadores y teorias; tablas graficas auto explicativas, fotografias, figuras(de 2 a 4 max. en total). De 200 a 300 palabras a 50% del poster.</td>
      <td><select name="s5" id="s5">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><label for="ta5"></label>
      <textarea name="ta5" id="ta5" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><strong>6</strong></td>
      <td><div align="left"><strong>Conclusiones</strong></div></td>
      <td>El aporte que concluye el investigador, despues de analizar resultados (no es un resumen de resultados) Max. 100 palabras</td>
      <td><select name="s6" id="s6">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><label for="ta6"></label>
      <textarea name="ta6" id="ta6" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="86"><strong>7</strong></td>
      <td><p align="left"><strong>Recomendaciones</strong> (Si es investigacion aplicada)</p></td>
      <td>En el caso de investigaciones aplicadas que sugieren un aporte, propuesta o una solucion de algun problema u necesidad</td>
      <td><select name="s7" id="s7">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><label for="ta7"><strong>
        <textarea name="ta7" id="ta7" cols="45" rows="5"></textarea>
      </strong></label></td>
    </tr>
    <tr>
      <td rowspan="2"><strong>8</strong></td>
      <td rowspan="2"><strong>Bibliografia</strong></td>
      <td height="77">Contiene solo el listado y citas utilizadas en el poster.</td>
      <td><select name="s8" id="s8">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><strong>
        <textarea name="ta11" id="ta11" cols="45" rows="5"></textarea>
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="77"><p> La redaccion de la referencia bibliografica segun el estilo Vancouver (area de salud), APA (otras areas)</p></td>
      <td><select name="s9" id="s9">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><strong>
      <textarea name="ta8" id="ta8" cols="45" rows="5"></textarea>
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="106"><strong>9</strong></td>
      <td><strong>Forma y estilo</strong></td>
      <td>Ortografia, sintaxis, claridad, sintesis.</td>
      <td><select name="s10" id="s10">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td><strong>
      <textarea name="ta9" id="ta9" cols="45" rows="5"></textarea>
      </strong></td>
    </tr>
    
    <tr>
      <td height="104" colspan="3"><strong>Nota Final:</strong></td>
      <td align="center">100</td>
      <td><label for="ta10"></label>
      <textarea name="ta10" id="ta10" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="38" colspan="5"><strong>Nombre y firma del evaluador
        <label for="tx2"></label>
        <input name="tx2" type="text" id="tx2" size="60" />
      </strong></td>
    </tr>
    <tr>
      <td height="40" colspan="5"><strong>Fecha de evaluacion:
        <label for="tx3"></label>
        <input name="tx3" type="text" id="tx3" size="40" />
      </strong></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
  
  
  
  
</form>
</body>
</html>
