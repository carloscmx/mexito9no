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
<h3>Practica 1- Numero par o impar.</h3> <br> <br>
<p>Instrucciones: Inserte un numero en cada caja de texto y pulse en verificar.</p> <br>
<p>Objetivo: El sistema sumara creará un numero de dos digitos y mostrará si el numero es par o impar.</p>
</center>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm form-control">
    <center>
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
