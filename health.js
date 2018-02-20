var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";

    var recupLinkProduct = document.getElementById("prod");
    $scope.colorGreen = function() {
        recupLinkProduct.style.fontStyle = "italic";
        recupLinkProduct.style.fontWeight = "bold";


    }
    $scope.noColor = function() {
        recupLinkProduct.style.fontStyle = "normal";
        recupLinkProduct.style.fontWeight = "normal";

    }
});