<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<form action="ejercicio3.php" method="POST">
<input type="text" name="nombrearchivo">
<br>
<button>Crear archivo</button>
</form>
</body>
</html>

<?php
if(isset($_POST['nombrearchivo']))
{
  $nombrearchivo=$_POST['nombrearchivo'];
  $fh = fopen($nombrearchivo.'.txt', 'w+b') or die("Se produjo un error al crear el archivo");
  
  $texto = <<<_END
Comienza con Linea 1
Linea 2
Termina con Linea 3
_END;
  
  fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas"."<br>";
  echo '<a href="'.$nombrearchivo.'.txt" target="_blank">'.$nombrearchivo.'.txt</a>';
}
?>