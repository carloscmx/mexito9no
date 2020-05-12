<?php
$titulo=" Ejercicio 3";
$subtitulo=" Practica 3- Imprimir numeros impares.";
$instruccion=" Inserte el nombre para crear un archivo de texto.";
$objetivo=" El sistema generará un archivo con el nombre deseado y mostrara los numeros impares del 1 al 100.";
$validarinput=1;
include_once("masterpage/head.php");
?>

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

<?php
include_once("masterpage/footer.php");
?>