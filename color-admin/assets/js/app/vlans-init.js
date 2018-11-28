$(document).ready(function () {
    App.init();
    TableManageDefault.init();
    FormPlugins.init();
});

var app = angular.module('myApp', []);
app.controller('vlansCtrl', function ($scope, $http) {
    var url = "/api/vlan";
    $http.get(url).then(function (response) {
        $scope.vlans = response.data.vlans;
    })
});