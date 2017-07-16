  var app = angular.module('table', []);

  app.controller('tableCtrl', ['$scope', '$http',function($scope,$http) {
    $scope.sortType     = 'number'; // set the default sort type
    $scope.sortReverse  = false;  // set the default sort order

    $scope.residences = [ ];

    $http.get('residences.json')
      .then(function mySuccess(response) {
        $scope.residences = response.data;
        console.log(response, 'yee data.');
      }, function myError(response) {
          $scope.residence = response.statusText;
          console.log('can not get data.');
      });

  }]);

  app.directive('imgHover', function (){
      return {
          link: function (scope, element, attr) {
              element.bind('mouseover', function(e){
                  element.addClass('transition');
              });
              element.bind('mouseleave', function(e){
                  element.removeClass('transition');
              });
          }
      }
    });
