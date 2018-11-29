$(document).ready(function () {
    App.init();
    TableManageDefault.init();
    FormPlugins.init();
});

var app = angular.module('myApp', []);
app.controller('vendorsCtrl', function ($scope, $http) {
    var url = "/api/vendor";
    $http.get(url).then(function (response) {
        $scope.vendors = response.data.vendors;
    })
});