<!DOCTYPE html>
<html lang="es  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Crear un script que muestre un listado de  5 países mínimo, 
    y que al seleccionar un país muestre en pantalla el Nombre del país, idioma, 
    moneda y continente al que pertenece.</h2>

    <form action="eje2.php" method="post"><h3>  seleccione un pais<h3>
    <select name="select">
  <option value="El Salvador">El Salvador</option>
  <option value="Italia" selected>Italia</option>
  <option value="Alemania">Alemania</option>
  <option value="Francia">Francia</option>
  <option value="Peru">Perú</option>
  
</select>
<input type="submit" value="Enviar">
</form>

</body>
</html>
<?php
if (isset($_POST["select"])) {
    $pais=$_POST["select"];

if ($pais=="El Salvador") {

    echo '<hr> Pais: '.$pais.'<br>'; 
    echo "Idioma: Español <br>";
    echo "Moneda: Dolar <br>";
    echo "Continente: Americano <br>";
}
 else if($pais=="Italia"){
    echo '<hr> Pais: '.$pais.'<br>';
    echo "Idioma: Italiano <br>";
    echo "Moneda: Euro <br>";
    echo "Continente: Europeo <br>" ;  
} 
else if ($pais=="Alemania") {
    echo '<hr> Pais: '.$pais.'<br>'; 
    echo "Idioma: Aleman <br>";
    echo "Moneda: Euro <br>";
    echo "Continente: Europeo <br>";
} 
   else if($pais=="Francia"){
    echo '<hr> Pais: '.$pais.'<br>';
    echo "Idioma: Frances <br>";
    echo "Moneda: Euro <br>";
    echo "Continente: Europeo <br>";
   } 
else if($pais=="Peru"){
    echo '<hr> Pais: '.$pais.'<br>';
    echo "Idioma: Español <br>";
    echo "Moneda: Sol <br>";
    echo "Continente: Americano <br>";

    
} 
 }

?>
  <a href="Index.html">Volver al Inicio</a>     
        