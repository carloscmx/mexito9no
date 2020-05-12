

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
<h3>Practica 3- Imprimir numeros impares.</h3> <br> <br>
<p>Instrucciones: Inserte el nombre para crear un archivo de texto.</p> <br>
<p>Objetivo: El sistema generará un archivo con el nombre deseado y mostrara los numeros impares del 1 al 100.</p>
</center>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm form-control">
    <center>

<p>Escribe un nombre para crear un archivo.</p><br>
<form action="ejercicio3.php" method="POST">
<input type="text" name="nombrearchivo" required>
<br><br>
<button class="btn btn-success">Crear archivo</button>
</form>

<?php
if(isset($_POST['nombrearchivo']))
{
  $nombrearchivo=$_POST['nombrearchivo'];
  $fh = fopen($nombrearchivo.'.txt', 'w+b') or die("Se produjo un error al crear el archivo");
  $cadena="";
for($i=0; $i<101; $i++){
  
  if ($i%2==0){
  //  echo "el $i es par";
}else{
  $cadena .="El numero ".$i." es impar"."\n";
}
}
  $texto =$cadena;
  
  fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas"."<br>";
  echo '<a href="'.$nombrearchivo.'.txt" target="_blank">'.$nombrearchivo.'.txt</a>';
}
?>


</center>
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
