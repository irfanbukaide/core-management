/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleCountdownTimer = function () {
    var e = new Date;
    e = new Date(e.getFullYear() + 1, 1 - 1, 1);
    $("#timer").countdown({until: e})
};
var ComingSoon = function () {
    "use strict";
    return {
        init: function () {
            handleCountdownTimer()
        }
    }
}()