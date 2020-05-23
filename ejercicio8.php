<?php
$titulo=" Ejercicio 4 ADA 3";
$subtitulo=" Práctica 4 ADA 3 Generar Constancia.";
$instruccion=" Inserte los datos solicitado en los campos de texto.";
$objetivo=" Realiza una aplicación que solicite al usuario la información que esta las líneas del siguiente
documento (la aplicación debe de generar un pdf con la información solicitada)";
$validarinput=0;
include_once("masterpage/head.php");
?>


<form action="ejercicio8.php" method="POST">
	<table style="text-align: center;">
	<tr>
	<td>
    <label>Ingrese el nombre del solicitante:</label>
    <input type="text" name="txtNombre" required class="form-control"> 
    </td>
	</tr>

	<tr>
	<td>
    <label>Seleccione la fecha de ingreso a la empresa del solicitante:</label>
    <input type="date" name="dttAlumno" required  class="form-control">
    </td>
	</tr>
    <tr>
	<td>
    <label>Puesto del solicitante:</label>
    
    <input type="text" name="txtPuesto" required class="form-control">
    </td>
	</tr>
	<tr>
  
		<td><br> <input type="submit" value="Generar" class="btn btn-success"> </td>
	</tr>
</table>
</form>

    
<?php
include_once("masterpage/footer.php");
?>


<?php

if(isset($_POST['txtNombre'])){
    echo '<script>
    var nombrea="'.$_POST['txtNombre'].'";
    var fechaia="'.$_POST['dttAlumno'].'";
    var puestoa="'.$_POST['txtPuesto'].'";
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "ADA3/ejercicio1/index.php?nombrea="+nombrea+"&fechaia="+fechaia+"&puestoa="+puestoa, true);
      xhr.responseType = "blob";
  
      xhr.onload = function(e) {
        if (this.status == 200) {
          var blob = new Blob([this.response], {type: "application/pdf"});
          var link = document.createElement("a");
          link.href = window.URL.createObjectURL(blob);
          link.download = "report.pdf";
          link.click();       
        }
      }
      xhr.send();
     </script>';
    }
?>
