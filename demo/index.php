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
   <link type="text/css" rel="stylesheet" href="css/lightGallery.css" />
   <script src="js/lightgallery.min.js"></script>
  <!-- lightgallery plugins (optional)-->
  <script src="js/lg-thumbnail.min.js"></script>
  <script src="js/lg-fullscreen.min.js"></script>
  <script src="js/tableresponsive.js"></script>

  <!-- rzslider -->
  <link rel="stylesheet" type="text/css" href="css/rzslider.min.css"/>
  <script src="js/rzslider.min.js"></script>
  <!-- stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
<header>
  <h1>
    <a href="">AngularJS Table - Selection of residences / apartments</a>
  </h1>
  Using: Bootstrap 3.3.7, Font Awesome 4.7, Jquery 3.2.1, LightGallery.js (Optional - Turned Off), Angular 1.6.4, HTML5 Shiv 3.7.3, Respond 1.4.2, Responsive

  <div>


    <div class="alert alert-info" role="alert">This demo contains:
      <ul>
  <li>  Sorting (Click Name of column)</li>
  <li>  Filtering by checkbox(Click Checkbox)</li>
  <li>  Filtering by range slider (Select price on slider)</li>
  </ul>
    </div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#demo1" aria-controls="demo1" role="tab" data-toggle="tab">Demo 1 - Made with table</a></li>
    <li role="presentation"><a href="#demo2" aria-controls="demo2" role="tab" data-toggle="tab">Demo 2 - Made with divs</a></li>
  </ul>




</div>

</header>

<!-- Tab panes -->
<div class="tab-content" ng-app="table">
  <div role="tabpanel" class="tab-pane active fade in" id="demo1">
    <div  ng-controller="tableCtrl" >

  <!--Filters -->


    <div class="filters-section">
      <input id="checkbox-1" class="checkbox-custom" data-ng-model='filters.available' name="checkbox-1" type="checkbox" >
      <label for="checkbox-1" class="checkbox-custom-label"> Available Only</label>
      <input id="checkbox-2" class="checkbox-custom" data-ng-model='filters.terrace' name="checkbox-2" type="checkbox" >
      <label for="checkbox-2" class="checkbox-custom-label"> With Terrace</label>
      <input id="checkbox-3" class="checkbox-custom" data-ng-model='filters.balcony' name="checkbox-3" type="checkbox">
      <label for="checkbox-3" class="checkbox-custom-label"> With Balcony</label>

      <rzslider rz-slider-model="slider.minValue"
              rz-slider-high="slider.maxValue"
              rz-slider-options="slider.options" class="filter-price"></rzslider>
    </div>


    <table>
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

        <tr class="animated" ng-repeat="residence in residences | orderBy:sortType:sortReverse | filter: maxFilter | filter: minFilter | customFilter:filters as filteredResidences" ng-class="{'green': residence.status =='Available', 'red': residence.status == 'Sold','grey': residence.status =='Reservation'}">

          <td>{{residence.status}}</td>
          <td>{{residence.number}}</td>
          <td>{{residence.metres}} m<sup>2</sup></td>
          <td>{{residence.rooms}} Rooms</td>
          <td>{{residence.floor}} Floor</td>
          <td>Terrace<i class="fa fa-check" ng-show="{{residence.terrace}}"></i></td>
          <td>Balcony<i class="fa fa-check" ng-show="{{residence.balcony}}"></i></td>
          <td>{{residence.price }} zł</td>
          <td>Images:
            <div id="lightgallery">
                <span ng-repeat="image in residence.images">
                  <a href="{{image}}"><img ng-src="{{image}}" img-hover/></a>
                </span>
            </div>
          </td>
        </tr>
        <tr ng-show="filteredResidences.length === 0"><td>No available residences</td></tr>
    </table>

    </div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="demo2">

    <div ng-controller="tableCtrl" >

  <!--Filters -->


    <div class="filters-section">

      <div class="form-group">
        <input type="checkbox"  data-ng-model='filters.available'  name="fancy-checkbox-default1" id="fancy-checkbox-default1" autocomplete="off" />
        <div class="btn-group">
            <label for="fancy-checkbox-default1" class="btn btn-default">
                <span class="glyphicon glyphicon-ok"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-default1" class="btn btn-default active">
                Available Only
            </label>
        </div>
      </div>
      <div class="form-group">
        <input type="checkbox"  data-ng-model='filters.terrace'  name="fancy-checkbox-default2" id="fancy-checkbox-default2" autocomplete="off" />
        <div class="btn-group">
            <label for="fancy-checkbox-default2" class="btn btn-default">
                <span class="glyphicon glyphicon-ok"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-default2" class="btn btn-default active">
                With Terrace
            </label>
        </div>
      </div>
      <div class="form-group">
        <input type="checkbox"  data-ng-model='filters.balcony'  name="fancy-checkbox-default3" id="fancy-checkbox-default3" autocomplete="off" />
            <div class="btn-group">
                <label for="fancy-checkbox-default3" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-default3" class="btn btn-default active">
                    With Balcony
                </label>
            </div>
      </div>
      <rzslider rz-slider-model="slider.minValue"
              rz-slider-high="slider.maxValue"
              rz-slider-options="slider.options" class="filter-price"></rzslider>
    </div>


    <div class="row">


        <div class="divtable col-lg-12" ng-repeat="residence in residences | orderBy:sortType:sortReverse | filter: maxFilter | filter: minFilter | customFilter:filters as filteredResidences" >

          <div class="col-xs-6" ng-class="{'green': residence.status =='Available', 'red': residence.status == 'Sold','grey': residence.status =='Reservation'}">{{residence.status}}</div>
          <div class="col-xs-6">{{residence.number}}</div>
          <div class="col-xs-6">{{residence.metres}} m<sup>2</sup></div>
          <div class="col-xs-6">{{residence.rooms}} Rooms</div>
          <div class="col-xs-6">{{residence.floor}} Floor</div>
          <div class="col-xs-6">Terrace<i class="fa fa-check" ng-show="{{residence.terrace}}"></i></div>
          <div class="col-xs-6">Balcony<i class="fa fa-check" ng-show="{{residence.balcony}}"></i></div>
          <div class="col-xs-12">{{residence.price }} zł</div>
          <div class="col-xs-12 col-sm-4">Images:
            <div id="lightgallery">
                <span ng-repeat="image in residence.images">
                  <a href="{{image}}"><img ng-src="{{image}}"/></a>
                </span>
            </div>
          </div>
        </div>
        <div class="col-lg-12" ng-show="filteredResidences.length === 0">No available residences</div>
    </div>

    </div>

  </div>
</div>



<footer>
  &copy; 2017 linkedin.com/in/tomasz-malecki
</footer>
</div>
<script type="text/javascript">
    /*$(document).ready(function() {
        $("#lightgallery").lightGallery();
    });
*/

</script>
</body>
</html>
