/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleGritterNotification = function () {
    $("#add-sticky").click(function () {
        return $.gritter.add({
            title: "This is a sticky notice!",
            text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat. ",
            image: "../assets/img/user/user-2.jpg",
            sticky: !0,
            time: "",
            class_name: "my-sticky-class"
        }), !1
    }), $("#add-regular").click(function () {
        return $.gritter.add({
            title: "This is a regular notice!",
            text: "This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ",
            image: "../assets/img/user/user-3.jpg",
            sticky: !1,
            time: ""
        }), !1
    }), $("#add-max").click(function () {
        return $.gritter.add({
            title: "This is a notice with a max of 3 on screen at one time!",
            text: "This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ",
            sticky: !1,
            image: "../assets/img/user/user-4.jpg",
            before_open: function () {
                if (3 === $(".gritter-item-wrapper").length) return !1
            }
        }), !1
    }), $("#add-without-image").click(function () {
        return $.gritter.add({
            title: "This is a notice without an image!",
            text: "This will fade out after a certain amount of time."
        }), !1
    }), $("#add-gritter-light").click(function () {
        return $.gritter.add({
            title: "This is a light notification",
            text: "Just add a 'gritter-light' class_name to your $.gritter.add or globally to $.gritter.options.class_name",
            class_name: "gritter-light"
        }), !1
    }), $("#add-with-callbacks").click(function () {
        return $.gritter.add({
            title: "This is a notice with callbacks!",
            text: "The callback is...",
            before_open: function () {
                alert("I am called before it opens")
            },
            after_open: function (e) {
                alert("I am called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e)
            },
            before_close: function (e) {
                var t = e ? "The 'X' was clicked to close me!" : "";
                alert("I am called before it closes: I am passed the jQuery object for the Gritter element... \n" + t)
            },
            after_close: function (e) {
                var t = e ? "The 'X' was clicked to close me!" : "";
                alert("I am called after it closes. " + t)
            }
        }), !1
    }), $("#add-sticky-with-callbacks").click(function () {
        return $.gritter.add({
            title: "This is a sticky notice with callbacks!",
            text: "Sticky sticky notice.. sticky sticky notice...",
            sticky: !0,
            before_open: function () {
                alert("I am a sticky called before it opens")
            },
            after_open: function (e) {
                alert("I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e)
            },
            before_close: function (e) {
                alert("I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n" + e)
            },
            after_close: function () {
                alert("I am a sticky called after it closes")
            }
        }), !1
    }), $("#remove-all").click(function () {
        return $.gritter.removeAll(), !1
    }), $("#remove-all-with-callbacks").click(function () {
        return $.gritter.removeAll({
            before_close: function (e) {
                alert("I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n" + e)
            }, after_close: function () {
                alert("I am called after everything has been closed.")
            }
        }), !1
    })
}, handleSweetNotification = function () {
    $('[data-click="swal-primary"]').click(function (e) {
        e.preventDefault(), swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "info",
            buttons: {
                cancel: {text: "Cancel", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
                confirm: {text: "Primary", value: !0, visible: !0, className: "btn btn-primary", closeModal: !0}
            }
        })
    }), $('[data-click="swal-info"]').click(function (e) {
        e.preventDefault(), swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "info",
            buttons: {
                cancel: {text: "Cancel", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
                confirm: {text: "Info", value: !0, visible: !0, className: "btn btn-info", closeModal: !0}
            }
        })
    }), $('[data-click="swal-success"]').click(function (e) {
        e.preventDefault(), swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "success",
            buttons: {
                cancel: {text: "Cancel", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
                confirm: {text: "Success", value: !0, visible: !0, className: "btn btn-success", closeModal: !0}
            }
        })
    }), $('[data-click="swal-warning"]').click(function (e) {
        e.preventDefault(), swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: {
                cancel: {text: "Cancel", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
                confirm: {text: "Warning", value: !0, visible: !0, className: "btn btn-warning", closeModal: !0}
            }
        })
    }), $('[data-click="swal-danger"]').click(function (e) {
        e.preventDefault(), swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "error",
            buttons: {
                cancel: {text: "Cancel", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
                confirm: {text: "Warning", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
            }
        })
    })
}, Notification = function () {
    "use strict";
    return {
        init: function () {
            handleGritterNotification(), handleSweetNotification()
        }
    }
}();