$(document).ready(function () {
    App.init();
    TableManageDefault.init();
    FormPlugins.init();
});

var app = angular.module('myApp', []);
app.controller('hostsAllCtrl', function ($scope, $http) {
    var url = "/api/all";
    $http.get(url).then(function (response) {
        $scope.hosts = response.data.data;
        console.log(response.data.data);
    })
});

app.controller('hostsUpCtrl', function ($scope, $http) {
    var url = "/api/up";
    $http.get(url).then(function (response) {
        $scope.hosts = response.data.data;
        console.log(response.data.data);
    })
});