var app = angular.module("myApp", ["ngRoute"]);

app.config(function($routeProvider, $locationProvider) {

    $routeProvider

    .when('/', {

        templateUrl : 'views/main.html',

        controller: "Controller"

    })

    .when('/services', {

        templateUrl : 'views/services.html',

        controller: "Controller"

    })

    .otherwise({

        redirectTo: '/'

    });

    //$locationProvider.html5Mode(true);

});

app.controller("Controller",function($scope,$location){

    //angular.element(".prueba").fadeIn();

    $scope.inicio=function(){

        $location.path("/");

    }

    $scope.interesado=function(){

        $('#myModal').modal('show');

    }

    $scope.validar=function(){

          var parametros = {

                      "nombre" : $scope.nombre,

                      "correo" : $scope.email,

                      "cuerpo" : $scope.message

              };

              $.ajax({

                      data:  parametros,

                      url:   'enviarCorreo.php',

                      type:  'post',

                      success:  function (response) {

                              $("#resultado").html(response);

                      }

              });

    }

});