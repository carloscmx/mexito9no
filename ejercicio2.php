<!DOCTYPE html>
<html lang="en">
<style>
input:valid, textarea:valid {
  background:green;
}
input:invalid, textarea:invalid {
  background:red;
}
.cover{
    background-image: url("cover/cover.jpg");
    background-size: cover; /* for IE9+, Safari 4.1+, Chrome 3.0+, Firefox 3.6+ */
        -webkit-background-size: cover; /* for Safari 3.0 - 4.0 , Chrome 1.0 - 3.0 */
        -moz-background-size: cover; /* optional for Firefox 3.6 */ 
        -o-background-size: cover; /* for Opera 9.5 */
        margin: 0; /* to remove the default white margin of body */
        padding: 0; /* to remove the default white margin of body */
        overflow: hidden;
        overflow: scroll;
    

}
</style>
<link rel="stylesheet" href="html/css/bootstrap.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body class="cover">
<center>
<h3>Practica 2- Serie de Lucas y Fibbonacci.</h3> <br> <br>
<p>Instrucciones: Inserte un numero en cada caja de texto y pulse en calcular.</p> <br>
<p>Objetivo: El sistema generá ambas series depediendo de la longitud deseada.</p>
</center>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    
    <div class="col-sm form-control">
   

<form action="ejercicio2.php" method="POST">
	<table style="text-align: center;">
	<tr>
	<td>
    <label>Ingresar la longitud de la serie de Lucas</label>
    <input type="text" name="textlucas" required pattern="[0-9]+">
    </td>
	</tr>

	<tr>
	<td>
    <label>Ingresar la logitud de la serie de Fibonacci</label>
    <input type="text" name="textfibo" required pattern="[0-9]+">
    </td>
	</tr>
	<tr>
		<td> <input type="submit" value="calcular" class="btn btn-success"> </td>
	</tr>
</table>
</form>

<?php
	if($_POST)
	{	
		$nlucas = $_POST
        ['textlucas'];
        
		$nfibo = $_POST
       ['textfibo'];

       echo "Longitud de Lucas: ".$nlucas;
       echo "<br>";
       echo "<br>";

       $n = $nlucas;
      $n1 =2; 
      $n2 =1;
      $n3 = 0;
      
      if($n>1)
      echo "\n2";
      echo "<br>";
      echo "\n1";
      
      for($i= 2; $i < $n; $i++){
          $n3 = $n2;
          $n2 +=$n1;
          $n1 = $n3;
          echo "<br>";
          echo $n2;
      
      }

      echo "<br>";
      echo "<br>";

       echo "Longitud de Fibbonacci: ".$nfibo;
      echo "<br>";
      echo "<br>";

       $a = 0;
       $b = 1;
      
       $v = 0;
      
       $cont = 1;
        do{
         echo $v."<br>";
         $a = $b; //1
         $b = $v; //1
         $v = $a + $b; //1 +1 = 2
      
         $cont++;
       }while($cont <= $nfibo);

     
    } 

    
?>

</div>
    <div class="col-sm">
        <input type="button" value="Regresar" class="btn btn-danger" onclick="goBack()">
    </div>
  </div>
</div>

</body>
<script>
function goBack() {
  window.location.href="index.php";
}
</script>
<script src="html/js/jquery-3.5.1.min.js"></script>

<script src="html/js/bootstrap.min.js"></script>
</html>
   