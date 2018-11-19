/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleJqueryFileUpload = function () {
    $("#fileupload").fileupload({
        autoUpload: !1,
        disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
        maxFileSize: 5e6,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
    }), $("#fileupload").fileupload("option", "COLOR_REDirect", window.location.href.replace(/\/[^\/]*$/, "/cors/result.html?%s")), $("#fileupload").bind("fileuploadadd", function (e, l) {
        $('#fileupload [data-id="empty"]').hide()
    }), $("#fileupload").bind("fileuploadfail", function (e, l) {
        0 === (l.originalFiles ? l.originalFiles.length : 0) ? $('#fileupload [data-id="empty"]').show() : $('#fileupload [data-id="empty"]').hide()
    }), $.support.cors && $.ajax({type: "HEAD"}).fail(function () {
        $('<div class="alert alert-danger"/>').text("Upload server currently unavailable - " + new Date).appendTo("#fileupload")
    }), $("#fileupload").addClass("fileupload-processing"), $.ajax({
        url: $("#fileupload").fileupload("option", "url"),
        dataType: "json",
        context: $("#fileupload")[0]
    }).always(function () {
        $(this).removeClass("fileupload-processing")
    }).done(function (e) {
        $(this).fileupload("option", "done").call(this, $.Event("done"), {result: e})
    })
}, FormMultipleUpload = function () {
    "use strict";
    return {
        init: function () {
            handleJqueryFileUpload()
        }
    }
}();