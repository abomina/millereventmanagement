var app = angular.module("myApp", ["ngRoute","ng-sweet-alert","angularjs-dropdown-multiselect"]);

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
    .when('/requestforquotes', {

        templateUrl : 'views/requestforquotes.php',

        controller: "Controller"

    })


    .when('/aboutus', {

        templateUrl : 'views/aboutus.html',

        controller: "Controller"

    })


    .when('/area', {

        templateUrl : 'views/area.html',

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
app.controller("requestforquotes",function($scope){
  $('#datetimepicker6').datetimepicker({
    format: 'DD/MM/YYYY'
  });
  $('#datetimepicker7').datetimepicker({
      useCurrent: false, //Important! See issue #1075
      format: 'DD/MM/YYYY'
  });
  $("#datetimepicker6").on("dp.change", function (e) {
      $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
  });
  $("#datetimepicker7").on("dp.change", function (e) {
      $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
  });
  $('#datetimepicker3').datetimepicker({
              format: 'LT'
          });
  $('#datetimepicker4').datetimepicker({
              format: 'LT'
          });
  $scope.example13model = [];
  $scope.example13data = [
    {id: 1, label: "Cashiers"},
    {id: 2, label: "Crowd Control"},
    {id: 3, label: "Parking"},
    {id: 4, label: "Traffic Control"},
    {id: 5, label: "Guards"},
    {id: 5, label: "Armed Guards"}
  ];
  $scope.example5model = []; 
  $scope.example5data = [ {id: 1, label: "Cashiers"}, {id: 2, label: "Crowd Control"}, {id: 3, label: "Parking"}, {id: 4, label: "Traffic Control"}, {id: 5, label: "Guards"}, {id: 6, label: "Armed Guards"}]; 
  $scope.example5settings = {}; 
  $scope.example5customTexts = {buttonDefaultText: 'Type of services needed'};
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