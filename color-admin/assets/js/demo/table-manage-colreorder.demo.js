/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleDataTableColReorder = function () {
    "use strict";
    0 !== $("#data-table-colreorder").length && $("#data-table-colreorder").DataTable({colReorder: !0, responsive: !0})
}, TableManageColReorder = function () {
    "use strict";
    return {
        init: function () {
            handleDataTableColReorder()
        }
    }
}();