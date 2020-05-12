var app = angular.module('fechaApp', ['fechaApp.servicio'])


app.controller('mainCtrl', ['$scope', 'Fecha', '$http', function($scope, Fecha, $http) {
    f_now = new Date();
    var now = new Date(f_now.getTime() - f_now.getTimezoneOffset() * 60000);
    var datesSeleccionadas = {}
    var diasSeleccionado = {}
    $scope.resultado = []
    $scope.daytemp = []
    $scope.sendData = []
    $scope.datos = {
        fecha0: now,
        fecha1: now
    }

    $scope.dias = [{
        id: "Monday",
        nombre: "Lunes"
    }, {
        id: "Tuesday",
        nombre: "Martes"
    }, {
        id: "Wednesday",
        nombre: "Miercoles"
    }, {
        id: "Thursday",
        nombre: "Jueves"
    }, {
        id: "Friday",
        nombre: "Viernes"
    }, {
        id: "Saturday",
        nombre: "Sabado"
    }, {
        id: "Sunday",
        nombre: "Domingo"
    }]

    $scope.dias.forEach(function(data) {
        data.isChecked = false
    })

    $scope.days = $scope.dias;

    $scope.listar = function() {
        datesSeleccionadas = {}
        diasSeleccionado = {}
        $scope.daytemp = []
        $scope.sendData = []

        datesSeleccionadas["fechas"] = $scope.datos
        $scope.sendData.push(datesSeleccionadas)
        $scope.days.forEach(function(data) {
            if (data.isChecked) {
                $scope.daytemp.push(data)
            }
        })
        diasSeleccionado["dias"] = $scope.daytemp
        $scope.sendData.push(diasSeleccionado)

        Fecha.loadfecha($scope.sendData)
            .then(function() {
            	$scope.resultado = Fecha.fecha
            })
    }
}])