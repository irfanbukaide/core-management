/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var getMonthName = function (t) {
    var e = [];
    return e[0] = "JAN", e[1] = "FEB", e[2] = "MAR", e[3] = "APR", e[4] = "MAY", e[5] = "JUN", e[6] = "JUL", e[7] = "AUG", e[8] = "SEP", e[9] = "OCT", e[10] = "NOV", e[11] = "DEC", e[t]
}, getDate = function (t) {
    var e = new Date(t), r = e.getDate(), n = e.getMonth() + 1, o = e.getFullYear();
    return r < 10 && (r = "0" + r), n < 10 && (n = "0" + n), e = o + "-" + n + "-" + r
}, handleVisitorsAreaChart = function () {
    var t = function (t) {
        var e = new Date;
        return e = e.setDate(e.getDate() - t)
    }, e = [{
        key: "Unique Visitors",
        color: COLOR_AQUA,
        values: [[t(77), 13], [t(76), 13], [t(75), 6], [t(73), 6], [t(72), 6], [t(71), 5], [t(70), 5], [t(69), 5], [t(68), 6], [t(67), 7], [t(66), 6], [t(65), 9], [t(64), 9], [t(63), 8], [t(62), 10], [t(61), 10], [t(60), 10], [t(59), 10], [t(58), 9], [t(57), 9], [t(56), 10], [t(55), 9], [t(54), 9], [t(53), 8], [t(52), 8], [t(51), 8], [t(50), 8], [t(49), 8], [t(48), 7], [t(47), 7], [t(46), 6], [t(45), 6], [t(44), 6], [t(43), 6], [t(42), 5], [t(41), 5], [t(40), 4], [t(39), 4], [t(38), 5], [t(37), 5], [t(36), 5], [t(35), 7], [t(34), 7], [t(33), 7], [t(32), 10], [t(31), 9], [t(30), 9], [t(29), 10], [t(28), 11], [t(27), 11], [t(26), 8], [t(25), 8], [t(24), 7], [t(23), 8], [t(22), 9], [t(21), 8], [t(20), 9], [t(19), 10], [t(18), 9], [t(17), 10], [t(16), 16], [t(15), 17], [t(14), 16], [t(13), 17], [t(12), 16], [t(11), 15], [t(10), 14], [t(9), 24], [t(8), 18], [t(7), 15], [t(6), 14], [t(5), 16], [t(4), 16], [t(3), 17], [t(2), 7], [t(1), 7], [t(0), 7]]
    }, {
        key: "Page Views",
        color: COLOR_BLUE,
        values: [[t(77), 14], [t(76), 13], [t(75), 15], [t(73), 14], [t(72), 13], [t(71), 15], [t(70), 16], [t(69), 16], [t(68), 14], [t(67), 14], [t(66), 13], [t(65), 12], [t(64), 13], [t(63), 13], [t(62), 15], [t(61), 16], [t(60), 16], [t(59), 17], [t(58), 17], [t(57), 18], [t(56), 15], [t(55), 15], [t(54), 15], [t(53), 19], [t(52), 19], [t(51), 18], [t(50), 18], [t(49), 17], [t(48), 16], [t(47), 18], [t(46), 18], [t(45), 18], [t(44), 16], [t(43), 14], [t(42), 14], [t(41), 13], [t(40), 14], [t(39), 13], [t(38), 10], [t(37), 9], [t(36), 10], [t(35), 11], [t(34), 11], [t(33), 11], [t(32), 10], [t(31), 9], [t(30), 10], [t(29), 13], [t(28), 14], [t(27), 14], [t(26), 13], [t(25), 12], [t(24), 11], [t(23), 13], [t(22), 13], [t(21), 13], [t(20), 13], [t(19), 14], [t(18), 13], [t(17), 13], [t(16), 19], [t(15), 21], [t(14), 22], [t(13), 25], [t(12), 24], [t(11), 24], [t(10), 22], [t(9), 16], [t(8), 15], [t(7), 12], [t(6), 12], [t(5), 15], [t(4), 15], [t(3), 15], [t(2), 18], [t(2), 18], [t(0), 17]]
    }];
    nv.addGraph(function () {
        var t = nv.models.stackedAreaChart().useInteractiveGuideline(!0).x(function (t) {
            return t[0]
        }).y(function (t) {
            return t[1]
        }).pointSize(.5).margin({
            left: 35,
            right: 25,
            top: 20,
            bottom: 20
        }).controlLabels({stacked: "Stacked"}).showControls(!1).duration(300);
        return t.xAxis.tickFormat(function (t) {
            var e = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            return t = new Date(t), t = e[t.getMonth()] + " " + t.getDate()
        }), t.yAxis.tickFormat(d3.format(",.0f")), d3.select("#visitors-line-chart").append("svg").datum(e).transition().duration(1e3).call(t).each("start", function () {
            setTimeout(function () {
                d3.selectAll("#visitors-line-chart *").each(function () {
                    this.__transition__ && (this.__transition__.duration = 1)
                })
            }, 0)
        }), nv.utils.windowResize(t.update), t
    })
}, handleVisitorsDonutChart = function () {
    var t = [{label: "Return Visitors", value: 784466, color: COLOR_BLUE}, {
        label: "New Visitors",
        value: 416747,
        color: COLOR_GREEN
    }], e = [{inner: .65, outer: .93}, {inner: .6, outer: 1}];
    nv.addGraph(function () {
        var r = nv.models.pieChart().x(function (t) {
            return t.label
        }).y(function (t) {
            return t.value
        }).margin({
            left: 10,
            right: 10,
            top: 10,
            bottom: 10
        }).showLegend(!1).donut(!0).growOnHover(!1).arcsRadius(e).donutRatio(.5);
        return r.labelFormat(d3.format(",.0f")), d3.select("#visitors-donut-chart").append("svg").datum(t).transition().duration(3e3).call(r), r
    })
}, handleVisitorsVectorMap = function () {
    0 !== $("#visitors-map").length && $("#visitors-map").vectorMap({
        map: "world_merc_en",
        scaleColors: [COLOR_BLACK_LIGHTER, COLOR_BLACK],
        container: $("#visitors-map"),
        normalizeFunction: "linear",
        hoverOpacity: .5,
        hoverColor: !1,
        zoomOnScroll: !1,
        markerStyle: {initial: {fill: COLOR_BLACK, stroke: "transparent", r: 3}},
        regions: [{attribute: "fill"}],
        regionStyle: {
            initial: {
                fill: COLOR_BLACK_LIGHTER,
                "fill-opacity": 1,
                stroke: "none",
                "stroke-width": .4,
                "stroke-opacity": 1
            }, hover: {"fill-opacity": .8}, selected: {fill: "yellow"}
        },
        series: {regions: [{values: {IN: COLOR_BLUE, US: COLOR_GREEN, MN: COLOR_GREY_DARKER}}]},
        focusOn: {x: .5, y: .5, scale: 1},
        backgroundColor: "transparent"
    })
}, handleScheduleCalendar = function () {
    var t = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        e = ["S", "M", "T", "W", "T", "F", "S"], r = new Date, n = r.getMonth() + 1, o = r.getFullYear(),
        a = [["2/" + n + "/" + o, "Popover Title", "#", COLOR_GREEN, "Some contents here"], ["5/" + n + "/" + o, "Tooltip with link", "http://www.seantheme.com/", COLOR_BLACK], ["18/" + n + "/" + o, "Popover with HTML Content", "#", COLOR_BLACK, 'Some contents here <div class="text-right"><a href="http://www.google.com">view more >>></a></div>'], ["28/" + n + "/" + o, "Color Admin V1.3 Launched", "http://www.seantheme.com/color-admin-v1.3", COLOR_BLACK]],
        i = $("#schedule-calendar");
    $(i).calendar({
        months: t,
        days: e,
        events: a,
        popover_options: {placement: "top", html: !0}
    }), $(i).find("td.event").each(function () {
        var t = $(this).css("background-color");
        $(this).removeAttr("style"), $(this).find("a").css("background-color", t)
    }), $(i).find(".icon-arrow-left, .icon-arrow-right").parent().on("click", function () {
        $(i).find("td.event").each(function () {
            var t = $(this).css("background-color");
            $(this).removeAttr("style"), $(this).find("a").css("background-color", t)
        })
    })
}, handleDashboardGritterNotification = function () {
    setTimeout(function () {
        $.gritter.add({
            title: "Welcome back, Admin!",
            text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat.",
            image: "../assets/img/user/user-12.jpg",
            sticky: !0,
            time: "",
            class_name: "my-sticky-class"
        })
    }, 1e3)
}, DashboardV2 = function () {
    "use strict";
    return {
        init: function () {
            handleVisitorsAreaChart(), handleVisitorsDonutChart(), handleVisitorsVectorMap(), handleScheduleCalendar(), handleDashboardGritterNotification()
        }
    }
}();