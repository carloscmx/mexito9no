<?php
$titulo=" Ejercicio 2 ADA 2";
$subtitulo=" Práctica 2 ADA 2- Calcular interés.";
$instruccion=" Ingrese un valor inicial junto con su interes anual y los años a pagar para calcular el interes simple y compuesto.";
$objetivo="  Realiza una aplicación para calcular el interés compuesto y el interés simple (tienes que mostrar la fórmula que se aplica en los cálculos), utiliza bootstrap para los componentes";
$validarinput=0;

include_once("masterpage/head.php");
?>


<form method="post">
<div class="form-control">
<div class="form-control" style="background-color: #f1f1f1;">
<h2>Calcular interés</h2>
</div>
<br>
<table>
<tr>
<td><label for="numero1">Cantidad inicial </label></td>
<td style="width: 200px"><div class="input-group">
  <input type="number" class="form-control" id="numero1" required>
  <div class="input-group-append">
    <span class="input-group-text">€</span>
  </div>
</div></td>
</tr>

<tr>
<td><label for="numero2">Años </label></td>
<td style="width: 200px"><div class="input-group">
  <input type="number" class="form-control" id="numero2" required>
  <div class="input-group-append">
  </div>
</div></td>
</tr>
<tr>
<td><label for="numero3">Interés anual </label></td>
<td style="width: 200px"><div class="input-group">
  <input type="number" class="form-control" id="numero3" required>
  <div class="input-group-append">
    <span class="input-group-text">%</span>
  </div>
</div></td>
</tr>

</table>

<br>
<input type="submit" value="Calcular interés" id="calcular" class="btn btn-success">

</div>
</form>
<br>
<h2>Cantidad final</h2>

<table>
<tr>
<td><label for="numero5">Interés simple </label></td>
<td style="width: 200px"><div class="input-group">
  <input type="text" class="form-control" id="numero5" readonly>
  <div class="input-group-append">
    <span class="input-group-text">€</span>
  </div>
</div></td>
</tr>
<tr>
<td><label for="numero6">Interés compuesto </label></td>
<td style="width: 200px"><div class="input-group">
  <input type="text" class="form-control" id="numero6" readonly>
  <div class="input-group-append">
    <span class="input-group-text">€</span>
  </div>
</div></td>
</tr>
</table>



	<?php
include_once("masterpage/footer.php");
?>

<script>
  
  $("#calcular").click(function() {
    var numero_uno = $("#numero1").val();
    var numero_dos = $("#numero2").val();
    var numero_tres = $("#numero3").val();
    var numero_cuatro = 1;
    var numero_cinco = numero_uno*(Math.pow(numero_cuatro+(numero_tres/(100)),(numero_dos)));
    var numero_seis = numero_uno *(numero_cuatro +((numero_dos*numero_tres)/(100)));
    
    $("#numero5").val(numero_seis);
    $("#numero6").val(numero_cinco);
  })
</script>


