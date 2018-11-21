/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleDataTableCombinationSetting = function () {
    "use strict";
    if (0 !== $(".table").length) {
        var e = {
            dom: "lBfrtip",
            buttons: [{extend: "excel", className: "btn-sm"}, {extend: "pdf", className: "btn-sm"}, {
                extend: "print",
                className: "btn-sm"
            }],
            responsive: !0,
            colReorder: !0
        };
        $(window).width() <= 767 && (e.colReorder = !1), $(".table").DataTable(e)
    }
}, TableManageCombine = function () {
    "use strict";
    return {
        init: function () {
            handleDataTableCombinationSetting()
        }
    }
}();