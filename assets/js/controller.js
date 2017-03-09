var app = angular.module("myApp", ["ngRoute","ng-sweet-alert"]);

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

    .when('/pastevents', {

        templateUrl : 'views/pastevents.html',

        controller: "Controller"

    })
    .when('/contactcompany', {

        templateUrl : 'views/contactcompany.php',

        controller: "Controller"

    })
    /*.when('/sendmail', {

        templateUrl : 'sendMail.php',

        controller: "Controller"

    })*/

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
app.controller("contactCompany",function($scope,$http,$window){
  console.log($window.location);
  $scope.validate=function(){
    var request = $http({
        method: "post",
        url: "sendMail.php",
        data: {
            name : $scope.nombre,
            email : $scope.email,
            company : $scope.company,
            message : $scope.message
        },
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    });
    /* Check whether the HTTP Request is Successfull or not. */
    request.success(function (data) {
        console.log(data);
        $scope.sweet = {};
        $scope.sweet.option = {
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false 
        }
    });
    //}
    //else {
    //    $scope.message = "You have Filled Wrong Details! Error: " + error;
    //}
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
    responsiveClass:true,
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
          },
          1200:{
              items:1,
              nav:true,
          }
      }
  });
  //EVENTOS PARA LOS BOTONES
  $('.owl-prev').html("<span class='fa fa-chevron-left izq'><span>");
  //$('.sw-btn-next').html("<div class='pasos'><button type='submit'>SIGUIENTE PASO<img src='./images/flechaDerBlanca.png'></button></div>");
  $('.owl-next').html("<span class='fa fa-chevron-right der'><span>");
 /* setInterval(function(){
 $(".owl-carousel").each(function(){
    $(this).data('owlCarousel').updateVars();
 });
},1500);*/
});