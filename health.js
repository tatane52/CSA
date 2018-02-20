var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";

    $scope.colorGreen = function() {
        var a = document.getElementById("prod");
        a.style.fontStyle = "italic";
        a.style.fontWeight = "bold";


    }
    $scope.noColor = function() {
        var a = document.getElementById("prod");
        a.style.fontStyle = "normal";
        a.style.fontWeight = "normal";

    }
});