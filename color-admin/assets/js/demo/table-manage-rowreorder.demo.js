/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleDataTableRowReorder = function () {
    "use strict";
    0 !== $("#data-table-rowreorder").length && $("#data-table-rowreorder").DataTable({responsive: !0, rowReorder: !0})
}, TableManageRowReorder = function () {
    "use strict";
    return {
        init: function () {
            handleDataTableRowReorder()
        }
    }
}();