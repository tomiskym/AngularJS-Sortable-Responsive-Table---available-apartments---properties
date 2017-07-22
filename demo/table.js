var app = angular.module('table', ['rzModule']);

app.controller('tableCtrl', ['$scope', '$http',function($scope,$http) {
  $scope.slider = {
      minValue: 200000,
      maxValue: 350000,
      options: {
          floor: 200000,
          ceil: 350000,
          step: 1000,
          translate: function(value) {
            return value + ' $';
          }
      }
  };
  $scope.sortType     = 'number'; // set the default sort type
  $scope.sortReverse  = false;  // set the default sort order
  //All filters not used by default
  $scope.filters = {available: false, terrace: false, balcony: false};
  $scope.residences = [ ];

  $scope.maxFilter = function (item) {
      return item.price <= $scope.slider.maxValue;
  };
  $scope.minFilter = function (item) {
      return item.price >= $scope.slider.minValue;
  };

  $http.get('residences.json')
    .then(function mySuccess(response) {
      $scope.residences = response.data;
      console.log(response, 'yee data.');
    }, function myError(response) {
        $scope.residence = response.statusText;
        console.log('can not get data.');
    });


}]);

//Filter for checkboxes and slider
app.filter('customFilter', function() {

  return function( items, filters) {
    //FilteredResidencies in html
    var filtered = [];

    angular.forEach(items, function(item) {
      if(filters.available == false && filters.terrace == false && filters.balcony == false) {
        filtered.push(item);
      }
      //When Filter is on
      else if(filters.available == true && item.status == "Available" && filters.terrace == false && filters.balcony == false){
        filtered.push(item);
      }
      else if(filters.terrace == true && item.terrace == true && filters.available == false && filters.balcony == false){
        filtered.push(item);
      }
      else if(filters.balcony == true && item.balcony == true  && filters.available == false && filters.terrace == false){
        filtered.push(item);
      }
      //To-Do: what if will be a lot of filters??
      else if(filters.terrace == true && item.terrace == true
      && filters.balcony == true && item.balcony == true && filters.available == false){
        filtered.push(item);
      }
      else if(filters.terrace == true && item.terrace == true
      && filters.available == true && item.status == "Available" && filters.balcony == false){
        filtered.push(item);
      }
      else if(filters.balcony == true && item.balcony == true
      && filters.available == true && item.status == "Available" && filters.terrace == false){
        filtered.push(item);
      }
    });
    return filtered;
  };
});

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
