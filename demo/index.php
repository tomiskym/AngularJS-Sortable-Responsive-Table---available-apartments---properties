<!DOCTYPE html>
<html>
<head>
<title>AngularJS Sortable Responsive Table - available apartments / properties</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="table.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">


<!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/style.css">


    <link type="text/css" rel="stylesheet" href="css/lightGallery.css" />
    <script src="js/lightgallery.min.js"></script>
   <!-- lightgallery plugins -->
   <script src="js/lg-thumbnail.min.js"></script>
   <script src="js/lg-fullscreen.min.js"></script>
   <script src="js/tableresponsive.js"></script>
</head>
<body>

<header>
  <h1>
    <a href="">AngularJS Table - Selection of residences / apartments</a>
  </h1>
  Using: Bootstrap 3.3.7, Font Awesome 4.7, Jquery 3.2.1, LightGallery.js (Optional - Turned Off), Angular 1.6.4, HTML5 Shiv 3.7.3, Respond 1.4.2, Responsive
</header>

<div ng-app="table" ng-controller="tableCtrl" >
  <table >
    <thead>
      <tr >
        <td>
          <a href="#" ng-click="sortType = 'status'; sortReverse = !sortReverse">
            Status
            <span ng-show="sortType == 'status' && !sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'status' && sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'number'; sortReverse = !sortReverse">
            Number
            <span ng-show="sortType == 'number' && !sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'number' && sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'metres'; sortReverse = !sortReverse">
            Metres
            <span ng-show="sortType == 'metres' && sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'metres' && !sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'rooms'; sortReverse = !sortReverse">
            Rooms
            <span ng-show="sortType == 'rooms' && sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'rooms' && !sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'floor'; sortReverse = !sortReverse">
            Floor
            <span ng-show="sortType == 'floor' && sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'floor' && !sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'terrace'; sortReverse = !sortReverse">
            Terrace
            <span ng-show="sortType == 'terrace' && sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'terrace' && !sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'balcony'; sortReverse = !sortReverse">
            Balcony
            <span ng-show="sortType == 'balcony' && sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'balcony' && !sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
        <td>
          <a href="#" ng-click="sortType = 'price'; sortReverse = !sortReverse">
            Price
            <span ng-show="sortType == 'price' && sortReverse" class="fa fa-caret-down"></span>
              <span ng-show="sortType == 'price' && !sortReverse" class="fa fa-caret-up"></span>
          </a>
        </td>
      </tr>
    </thead>
      <tr ng-repeat="residence in residences | orderBy:sortType:sortReverse" ng-class="{'green': residence.status =='Available', 'red': residence.status == 'Sold','grey': residence.status =='Reservation'}">
        <td>{{residence.status}}</td>
        <td>{{residence.number}}</td>
        <td>{{residence.metres}} m<sup>2</sup></td>
        <td>{{residence.rooms}} Rooms</td>
        <td>{{residence.floor}} Floor</td>
        <td>Terrace<i class="fa fa-times" ng-show="{{residence.terrace}}"></i></td>
        <td>Balcony<i class="fa fa-check" ng-show="{{residence.balcony}}"></i></td>
        <td>{{residence.price }} zł</td>
        <td>Images:
          <div id="lightgallery">
             <a href="{{residence.images[0]}}"><img ng-src="{{residence.images[0]}}"></a>
             <a href="{{residence.images[1]}}"><img ng-src="{{residence.images[1]}}"></a>
          </div>
        </td>
      </tr>
  </table>

</div>

<footer>
  &copy;
</footer>
<script type="text/javascript">
    /*$(document).ready(function() {
        $("#lightgallery").lightGallery();
    });
*/
    $(document).ready(function(){
      $('img').hover(function() {
          $(this).addClass('transition');

      }, function() {
          $(this).removeClass('transition');
      });
    });
</script>
</body>
</html>
