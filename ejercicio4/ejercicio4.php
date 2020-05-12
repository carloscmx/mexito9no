<!DOCTYPE html>
<html ng-app="fechaApp" ng-controller="mainCtrl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="js/angular.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/services.js"></script>
</head>
<body>
	<h1 >{{ datos.fecha}}</h1>
	
	
	<div class="container">
		<input  class="form-control" type="date"  ng-model="datos.fecha0" />
		<input type="date" ng-model="datos.fecha1">
		<br>
		<label ng-repeat="dias in days">
		<input type="checkbox" isChecked="{{dias.isChecked}}" ng-model="dias.isChecked">
		{{dias.nombre}}
		</label>
	</div>
	<button ng-click="listar()">oprime</button>
	<br>
	<h4 ng-repeat="resulta in resultado">
		{{resulta}}
	</h4>

</body>
</html>