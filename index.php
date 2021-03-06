<!DOCTYPE html>
<html lang="en" ng-app="myApp">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
          <title>KBB</title>

    <script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I="   crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.1.min.js" integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00="   crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-migrate-1.4.0.min.js" integrity="sha256-nxdiQ4FdTm28eUNNQIJz5JodTMCF5/l32g5LwfUwZUo=" crossorigin="anonymous"></script>


          <!-- Bootstrap -->
<link href="js/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


<!--Toaster-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.2.0/toaster.min.css">
<script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.2.0/toaster.min.js" ></script>

              <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
            <link href="css/custom.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.2.0/toaster.min.css">
                <style>
                  a {
                  color: blue;
                  }
                </style>
              </head>

  <body ng-cloak="">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header col-md-8">
            <a class="navbar-brand" rel="home" title="KBB">KBB</a>
              <button ng-controller="authCtrl" style="margin-top: 0.5em;"  type="button" class="btn btn-danger navbar-right" ng-hide="!authenticated" ng-click="logout();">Logout</button>
          </div>
        </div>
      </div>
    </div>
      <div class="container" style="margin-top:20px;">

        <div data-ng-view="" id="ng-view" class="slide-animation"></div>

      </div>
    </body>
  <toaster-container toaster-options="{'time-out': 1000}"></toaster-container>
  <script src="js/moment.min.js"></script>
  <link src="js/bootstrap-datetimepicker.css"></link>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <!-- Libs -->
<script src="https://code.angularjs.org/1.2.16/angular.min.js"></script>
 <script src="https://code.angularjs.org/1.2.16/angular-route.min.js"></script>
  <script src="js/angular-animate.min.js" ></script>
  <script src="js/toaster.js"></script>
  <script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" integrity="sha384-VI5+XuguQ/l3kUhh4knz7Hxptx47wpQbVRDnp8v7Vvuhzwn1PEYb/uvtH6KLxv6d" crossorigin="anonymous"></script>
<script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>


  <script src="app/app.js"></script>
  <script src="app/data.js"></script>
  <script src="app/directives.js"></script>
  <script src="app/authCtrl.js"></script>
  <script src="app/werknemersCtrl.js"></script>
<script src="app/weekplanningCtrl.js"></script>
<script src="app/maandplanningCtrl.js"></script>
<script src="app/jaarplanningCtrl.js"></script>
<script src="app/dagplanningCtrl.js"></script>
<script src="app/werkControleCtrl.js"></script>
</html>