<?php
$titulo=" Ejercicio 4";
$subtitulo=" Practica 4- Imprimir números impares.";
$instruccion=" Inserte el intervalo de fechas y elija los dias a imprimir.";
$objetivo=" Realiza una aplicación que pida un intervalo de fecha y permita que el usuario seleccione los días a mostrar, la aplicación debe de ser capaz de mostrar todos los días que pertenecen a ese intervalo de fecha.";
$validarinput=0;

include_once("masterpage/head.php");
?>
	<h1 >{{ datos.fecha}}</h1>
	
	
	<div class="container">
		<input  class="form-control" type="date"  ng-model="datos.fecha0" />	<br>
		<input type="date" ng-model="datos.fecha1 " required class="form-control">
		<br>
		<label ng-repeat="dias in days">
		<br>
		<input type="checkbox" isChecked="{{dias.isChecked}}" ng-model="dias.isChecked" required>
		{{dias.nombre}}
		</label>
	</div>
	<br>
	<button ng-click="listar()" class="btn btn-success">Imprimir</button>
	<br>
	<br>
	<h4 ng-repeat="resulta in resultado">
		{{resulta}}
	</h4>


	<?php
include_once("masterpage/footer.php");
?>