

<!DOCTYPE html>
<html ng-app="fechaApp" ng-controller="mainCtrl">

<style>

.cover{
    background-image: url("cover/cover.jpg");
    background-size: cover; /* for IE9+, Safari 4.1+, Chrome 3.0+, Firefox 3.6+ */
        -webkit-background-size: cover; /* for Safari 3.0 - 4.0 , Chrome 1.0 - 3.0 */
        -moz-background-size: cover; /* optional for Firefox 3.6 */ 
        -o-background-size: cover; /* for Opera 9.5 */
        margin: 0; /* to remove the default white margin of body */
        padding: 0; /* to remove the default white margin of body */
        overflow: hidden;
		overflow: scroll;
    

}
</style>
<link rel="stylesheet" href="html/css/bootstrap.min.css">

<link rel="stylesheet" href="">
	<script src="ejercicio4/js/angular.min.js"></script>
	<script src="ejercicio4/js/app.js"></script>
	<script src="ejercicio4/js/services.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body class="cover">
<center>
<h3>Practica 4- Imprimir numeros impares.</h3> <br> <br>
<p>Instrucciones: Inserte el intervalo de fechas y elija los dias a imprimir.</p> <br>
<p>Objetivo: - Realiza una aplicación que pida un intervalo de fecha y permita que el usuario seleccione los días a mostrar, la aplicación debe de ser capaz de mostrar todos los días que pertenecen a ese intervalo de fecha. .</p>
</center>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm form-control">
    <center>

	<h1 >{{ datos.fecha}}</h1>
	
	
	<div class="container">
		<input  class="form-control" type="date"  ng-model="datos.fecha0" />
		<input type="date" ng-model="datos.fecha1 " required>
		<br>
		<label ng-repeat="dias in days">
		<input type="checkbox" isChecked="{{dias.isChecked}}" ng-model="dias.isChecked" required>
		{{dias.nombre}}
		</label>
	</div>
	<button ng-click="listar()" class="btn btn-success">Imprimir</button>
	<br>
	<h4 ng-repeat="resulta in resultado">
		{{resulta}}
	</h4>

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
