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
<?php
if($validarinput){
    echo 'input:valid, textarea:valid {
        background:green;
      }
      input:invalid, textarea:invalid {
        background:red;
      }';
}
?>
</style>
<link rel="stylesheet" href="html/css/bootstrap.min.css">

<link rel="stylesheet" href="">
	<script src="ejercicio4/js/angular.min.js"></script>
	<script src="ejercicio4/js/app.js"></script>
	<script src="ejercicio4/js/services.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
</head>
<body class="cover">
<center>
<br>
<br>
<br>
<h3><?=$subtitulo?></h3> <br> <br>
<p>Instrucciones: <?=$instruccion?></p> <br>
<p>Objetivo: <?=$objetivo?></p>
</center>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm form-control">
    <center>
