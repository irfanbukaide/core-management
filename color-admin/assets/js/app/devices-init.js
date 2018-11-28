$(document).ready(function () {
    App.init();
    TableManageDefault.init();
    FormPlugins.init();
});

var app = angular.module('myApp', []);
app.controller('devicesCtrl', function ($scope, $http) {
    var url = "/api/device";
    $http.get(url).then(function (response) {
        $scope.devices = response.data.devices;
    })
});