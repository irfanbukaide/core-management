/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleDataTableDefault = function () {
    "use strict";
    0 !== $("#data-table-default").length && $("#data-table-default").DataTable({responsive: !0})
}, TableManageDefault = function () {
    "use strict";
    return {
        init: function () {
            handleDataTableDefault()
        }
    }
}();

