<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Naturaly healthy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="health.css" />   
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="health.js"></script>
</head>

<body ng-app="myApp">
    <header class="container-fluid" ng-controller="myCtrl">
        <img src="logoCSA.png" alt="logo" id="logo">
        <h1>NATURALLY HEALTHY</h1>
        <nav>
            <ul>
                <li id="prod" ng-mouseover="colorGreen()" ng-mouseleave="noColor()">Products</li>
                <li>Farms</li>
                <li>Events</li>
            </ul>
        </nav>
        
    
    </header>
</body>
</html>