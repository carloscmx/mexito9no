var app = angular.module('fechaApp.servicio', [])

app.factory('Fecha', ['$http', '$q', function($http, $q) {
    var self = {
        fecha: {},
        loadfecha: function(dato) {
            var d = $q.defer()
            $http.post('php/fechas.php', dato, {
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).then(function(response) {
                self.fecha = response.data.response
                console.log(self.fecha );
                return d.resolve()
                
            }, function(error) {

            })

            return d.promise

        }
    }

    return self

}])