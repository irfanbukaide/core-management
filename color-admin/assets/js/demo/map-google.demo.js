/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleGoogleMapSetting = function () {
    "use strict";
    var e, t = {
        zoom: 6,
        center: new google.maps.LatLng(-33.397, 145.644),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: !0
    };
    e = new google.maps.Map(document.getElementById("google-map-default"), t), $(window).resize(function () {
        google.maps.event.trigger(e, "resize")
    });
    var s = [], a = [{stylers: [{visibility: "off"}]}, {
            featureType: "road",
            stylers: [{visibility: "on"}, {color: "#ffffff"}]
        }, {featureType: "road.arterial", stylers: [{visibility: "on"}, {color: "#fee379"}]}, {
            featureType: "road.highway",
            stylers: [{visibility: "on"}, {color: "#fee379"}]
        }, {featureType: "landscape", stylers: [{visibility: "on"}, {color: "#f3f4f4"}]}, {
            featureType: "water",
            stylers: [{visibility: "on"}, {color: "#7fc8ed"}]
        }, {}, {featureType: "road", elementType: "labels", stylers: [{visibility: "off"}]}, {
            featureType: "poi.park",
            elementType: "geometry.fill",
            stylers: [{visibility: "on"}, {color: "#83cead"}]
        }, {elementType: "labels", stylers: [{visibility: "off"}]}, {
            featureType: "landscape.man_made",
            elementType: "geometry",
            stylers: [{weight: .9}, {visibility: "off"}]
        }], i = [{
            featureType: "landscape.natural",
            elementType: "geometry.fill",
            stylers: [{visibility: "on"}, {color: "#e0efef"}]
        }, {
            featureType: "poi",
            elementType: "geometry.fill",
            stylers: [{visibility: "on"}, {hue: "#1900ff"}, {color: "#c0e8e8"}]
        }, {featureType: "landscape.man_made", elementType: "geometry.fill"}, {
            featureType: "road",
            elementType: "geometry",
            stylers: [{lightness: 100}, {visibility: "simplified"}]
        }, {featureType: "road", elementType: "labels", stylers: [{visibility: "off"}]}, {
            featureType: "water",
            stylers: [{color: "#7dcdcd"}]
        }, {featureType: "transit.line", elementType: "geometry", stylers: [{visibility: "on"}, {lightness: 700}]}],
        l = [{stylers: [{hue: "#2c3e50"}, {saturation: 250}]}, {
            featureType: "road",
            elementType: "geometry",
            stylers: [{lightness: 50}, {visibility: "simplified"}]
        }, {featureType: "road", elementType: "labels", stylers: [{visibility: "off"}]}], r = [{
            featureType: "landscape",
            stylers: [{hue: "#FFAD00"}, {saturation: 50.2}, {lightness: -34.8}, {gamma: 1}]
        }, {
            featureType: "road.highway",
            stylers: [{hue: "#FFAD00"}, {saturation: -19.8}, {lightness: -1.8}, {gamma: 1}]
        }, {
            featureType: "road.arterial",
            stylers: [{hue: "#FFAD00"}, {saturation: 72.4}, {lightness: -32.6}, {gamma: 1}]
        }, {
            featureType: "road.local",
            stylers: [{hue: "#FFAD00"}, {saturation: 74.4}, {lightness: -18}, {gamma: 1}]
        }, {
            featureType: "water",
            stylers: [{hue: "#00FFA6"}, {saturation: -63.2}, {lightness: 38}, {gamma: 1}]
        }, {featureType: "poi", stylers: [{hue: "#FFC300"}, {saturation: 54.2}, {lightness: -14.4}, {gamma: 1}]}], o = [{
            featureType: "all",
            elementType: "all",
            stylers: [{invert_lightness: !0}, {saturation: 10}, {lightness: 10}, {gamma: .8}, {hue: "#293036"}]
        }, {featureType: "water", stylers: [{visibility: "on"}, {color: "#293036"}]}], y = [{
            featureType: "all",
            elementType: "all",
            stylers: [{invert_lightness: !0}, {saturation: 10}, {lightness: 10}, {gamma: .8}, {hue: "#000000"}]
        }, {featureType: "water", stylers: [{visibility: "on"}, {color: "#293036"}]}];
    $("[data-map-theme]").click(function () {
        var t = $(this).attr("data-map-theme"), n = $(this).closest("li"), p = $(this).text(), f = !1;
        switch ($("#map-theme-selection li").not(n).removeClass("active"), $("#map-theme-text").text(p), $(n).addClass("active"), t) {
            case"flat":
                e.setOptions({styles: a});
                break;
            case"turquoise-water":
                e.setOptions({styles: i});
                break;
            case"icy-COLOR_BLUE":
                e.setOptions({styles: l});
                break;
            case"cobalt":
                e.setOptions({styles: o}), f = !0;
                break;
            case"old-dry-mud":
                e.setOptions({styles: r});
                break;
            case"dark-red":
                e.setOptions({styles: y}), f = !0;
                break;
            default:
                e.setOptions({styles: s})
        }
        !0 === f ? $("#content").addClass("content-inverse-mode") : $("#content").removeClass("content-inverse-mode")
    })
}, MapGoogle = function () {
    "use strict";
    return {
        init: function () {
            handleGoogleMapSetting()
        }
    }
}();