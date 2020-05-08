<!DOCTYPE html>
<html lang="en">
<style>
input:valid, textarea:valid {
  background:green;
}
input:invalid, textarea:invalid {
  background:red;
}
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<h3>Inserte dos numeros para saber si es primo o no primo</h3>
<form action="ejercicio1.php" method="POST">
<label for="">Inserte el primer numero: </label>
<input name="numero1" type="number"  min="0" max="9" required>
<label for="">Inserte el segundo numero</label>
<input name="numero2" type="number"  min="0" max="9" required>
<button>Verificar</button>
</form> 
</body>
</html>
<?php

if(isset($_POST['numero1']) && isset($_POST['numero2']))
{
$numeros=$_POST['numero1'].$_POST['numero2'];
$respuesta="";
if(primo($numeros))
{
$respuesta="SI es numero primo";
}else
{
    $respuesta="NO es numero primo";
}
echo 'El numero '.$numeros.' '.$respuesta;
unset($_POST['numeros']);
}

function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        return True;
    } else {
        // comprobamos si es par
        if ($num % 2 != 0) {
            // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;
}
?>
