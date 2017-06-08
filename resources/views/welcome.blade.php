<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }

        .appointement {
            padding: 10px; 
            margin: 10px;
            border: 1px solid #000;
            border-radius: 5px;
        }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="//code.angularjs.org/1.6.4/angular-route.min.js"></script>
    <!-- load angular -->

    <script src="{{ mix('/js/app.js') }}"></script>

</head>
<body class="container" ng-app="someApp" ng-controller="mainController">
    <div class="col-md-8 col-md-offset-2">
        <div ng-view></div>
    </div>
</body>
</html>
