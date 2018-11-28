$(document).ready(function () {
    App.init();
    TableManageDefault.init();
    FormPlugins.init();
});

var app = angular.module('myApp', []);
app.controller('hostsAllCtrl', function ($scope, $http) {
    var url = "/api/host/all";
    $http.get(url).then(function (response) {
        $scope.hosts = response.data.data;
    })
});

app.controller('hostsUpCtrl', function ($scope, $http) {
    var url = "/api/host/up";
    $http.get(url).then(function (response) {
        $scope.hosts = response.data.data;
    })
});

app.controller('hostsDownCtrl', function ($scope, $http) {
    var url = "/api/host/down";
    $http.get(url).then(function (response) {
        $scope.hosts = response.data.data;
    })
});