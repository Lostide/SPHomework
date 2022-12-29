<!DOCTYPE html>
<html ng-app="app">
<head>
    <base href="/">
    <meta charset="utf-8" />
    <title>Registration and Login</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link href="/angular/app-content/app.css" rel="stylesheet" />
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <div ng-class="{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }" ng-if="flash" ng-bind="flash.message"></div>
                <div ng-view></div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//code.angularjs.org/1.6.0/angular.min.js"></script>
    <script src="//code.angularjs.org/1.6.0/angular-route.min.js"></script>
    <script src="//code.angularjs.org/1.6.0/angular-cookies.min.js"></script>

    <script src="/angular/app.js"></script>
    <script src="/angular/app-services/authentication.service.js"></script>
    <script src="/angular/app-services/flash.service.js"></script>


    <script src="/angular/app-services/user.service.js"></script>

    <script src="/angular/home/home.controller.js"></script>
    <script src="/angular/login/login.controller.js"></script>
    <script src="/angular/register/register.controller.js"></script>
</body>
</html>