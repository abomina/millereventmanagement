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
app.controller("carousel",function($scope){
  var owlG = $("#owl-galery");
  owlG.owlCarousel({
    items : 1,
    navigation:true,
    pagination:false,
    autoPlay:true,
    loop:true,
    singleItem: true,
    autoWidth:true,
    responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:1,
              nav:false
          },
          1000:{
              items:1,
              nav:true,
              loop:false
          }
      }
  });
  //EVENTOS PARA LOS BOTONES
  $('.owl-prev').html("<span class='fa fa-chevron-left izq'><span>");
  //$('.sw-btn-next').html("<div class='pasos'><button type='submit'>SIGUIENTE PASO<img src='./images/flechaDerBlanca.png'></button></div>");
  $('.owl-next').html("<span class='fa fa-chevron-right der'><span>");
  setInterval(function(){
 $(".owl-carousel").each(function(){
    $(this).data('owlCarousel').updateVars();
 });
},1500);
});