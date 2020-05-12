<?php
$titulo=" Ejercicio 1";
$subtitulo=" Practica 1- Numero par o impar.";
$instruccion=" Inserte un numero en cada caja de texto y pulse en verificar.";
$objetivo=" El sistema sumara creará un numero de dos digitos y mostrará si el numero es par o impar.";
$validarinput=1;
include_once("masterpage/head.php");
?>

<form action="ejercicio1.php" method="POST">
<label for="">Inserte el primer numero: </label>
<input name="numero1" type="number"  min="0" max="9" required>
<label for="">Inserte el segundo numero</label>
<input name="numero2" type="number"  min="0" max="9" required>
<button class="btn btn-success">Verificar</button>
</form> 
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


<?php
include_once("masterpage/footer.php");
?>