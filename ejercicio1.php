
<?php
$titulo=" Ejercicio 1";
$subtitulo=" Práctica 1- Números primos.";
$instruccion=" Inserte un número en cada caja de texto y pulse en verificar.";
$objetivo=" El sistema sumará dos números y mostrará si el número es un número primo.";
$validarinput=0;
include_once("masterpage/head.php");
?>


<form action="ejercicio1.php" method="POST">
<label for="">Inserte el primer número: </label>
<input name="numero1" type="number"  min="0"  required class="form-control"><br>
<label for="">Inserte el segundo número</label>
<input name="numero2" type="number"  min="0" required class="form-control"><br>
<button class="btn btn-success">Verificar</button> <br><br>
</form> 
<?php

if(isset($_POST['numero1']) && isset($_POST['numero2']))
{
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];

$respuesta1='';
$respuesta2='';
if(primo($numero1)){
$respuesta1='SI es numero primo';
}else{
    $respuesta1='NO es numero primo';
}
if(primo($numero2)){
    $respuesta2='SI es numero primo';
    }else{
        $respuesta2='NO es numero primo';
    }
echo '<p>El número: '.$numero1.' '.$respuesta1.'</p><br>';
echo '<p>El número: '.$numero2.' '.$respuesta2.'</p>';
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