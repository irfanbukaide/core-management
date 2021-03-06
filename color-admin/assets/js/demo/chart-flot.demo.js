/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/

function showFlotTooltip(a, t, o) {
    $('<div id="tooltip" class="flot-tooltip">' + o + "</div>").css({
            top: t, left: a + 35
        }
    ).appendTo("body").fadeIn(200)
}

var handleBasicChart = function () {
        "use strict";
        for (var a = [], t = 0;
             t < 2 * Math.PI;
             t += .25) a.push([t, Math.sin(t)]);
        for (var o = [], r = 0;
             r < 2 * Math.PI;
             r += .25) o.push([r, Math.cos(r)]);
        for (var e = [], l = 0;
             l < 2 * Math.PI;
             l += .1) e.push([l, Math.tan(l)]);
        0 !== $("#basic-chart").length && $.plot($("#basic-chart"), [{
                label: "data 1", data: a, color: COLOR_BLUE, shadowSize: 0
            }
                , {
                    label: "data 2", data: o, color: COLOR_GREEN, shadowSize: 0
                }
            ], {
                series: {
                    lines: {
                        show: !0
                    }
                    , points: {
                        show: !1
                    }
                }
                , xaxis: {
                    min: 0, max: 6, tickColor: COLOR_GREY_LIGHTER
                }
                , yaxis: {
                    min: -2, max: 2, tickColor: COLOR_GREY_LIGHTER
                }
                , grid: {
                    borderColor: COLOR_GREY_LIGHTER, borderWidth: 1, backgroundColor: COLOR_SILVER
                }
            }
        )
    }

    ,
    handleStackedChart = function () {
        "use strict";
        for (var a = [], t = 0;
             t <= 5;
             t += 1) a.push([t, parseInt(5 * Math.random())]);
        for (var o = [], r = 0;
             r <= 5;
             r += 1) o.push([r, parseInt(5 * Math.random() + 5)]);
        for (var e = [], l = 0;
             l <= 5;
             l += 1) e.push([l, parseInt(5 * Math.random() + 5)]);
        for (var i = [], n = 0;
             n <= 5;
             n += 1) i.push([n, parseInt(5 * Math.random() + 5)]);
        for (var s = [], h = 0;
             h <= 5;
             h += 1) s.push([h, parseInt(5 * Math.random() + 5)]);
        for (var d = [], c = 0;
             c <= 5;
             c += 1) d.push([c, parseInt(5 * Math.random() + 5)]);
        var R = [{
            data: a,
            color: COLOR_BLACK_LIGHTER,
            label: "China",
            bars: {
                fillColor: COLOR_BLACK_LIGHTER
            }
        }
            ,
            {
                data: o,
                color: COLOR_GREY,
                label: "Russia",
                bars: {
                    fillColor: COLOR_GREY
                }
            }
            ,
            {
                data: e,
                color: COLOR_WHITE,
                label: "Canada",
                bars: {
                    fillColor: COLOR_WHITE
                }
            }
            ,
            {
                data: i,
                color: COLOR_PURPLE,
                label: "Japan",
                bars: {
                    fillColor: COLOR_PURPLE
                }
            }
            ,
            {
                data: s,
                color: COLOR_BLUE,
                label: "USA",
                bars: {
                    fillColor: COLOR_BLUE
                }
            }
            ,
            {
                data: d,
                color: COLOR_AQUA,
                label: "Others",
                bars: {
                    fillColor: COLOR_AQUA
                }
            }
        ];
        $.plot("#stacked-chart", R, {
                xaxis: {
                    tickColor: COLOR_GREY_LIGHTER,
                    ticks: [[0, "MON"], [1, "TUE"], [2, "WED"], [3, "THU"], [4, "FRI"], [5, "SAT"]],
                    autoscaleMargin: .05
                }
                , yaxis: {
                    tickColor: COLOR_GREY_LIGHTER, ticksLength: 5
                }
                , grid: {
                    hoverable: !0,
                    tickColor: COLOR_GREY_LIGHTER,
                    borderWidth: 1,
                    borderColor: COLOR_GREY_LIGHTER,
                    backgroundColor: COLOR_SILVER_LIGHTER
                }
                , series: {
                    stack: !0, lines: {
                        show: !1, fill: !1, steps: !1
                    }
                    , bars: {
                        show: !0, barWidth: .6, align: "center", fillColor: null
                    }
                    , highlightColor: COLOR_BLACK_TRANSPARENT_9
                }
                , legend: {
                    show: !0, position: "ne", noColumns: 1
                }
            }
        );
        var C = null,
            O = null;
        $("#stacked-chart").bind("plothover", function (a, t, o) {
                if (o) {
                    var r = o.datapoint[1] - o.datapoint[2];
                    C == o.series.label && r == O || (C = o.series.label, O = r, $("#tooltip").remove(), showFlotTooltip(o.pageX, o.pageY, r + " " + o.series.label))
                }
                else $("#tooltip").remove(), C = null, O = null
            }
        )
    }

    ,
    handleTrackingChart = function () {
        "use strict";

        function a() {
            i = null;
            var a = n,
                t = e.getAxes();
            if (!(a.x < t.xaxis.min || a.x > t.xaxis.max || a.y < t.yaxis.min || a.y > t.yaxis.max)) {
                var o,
                    r,
                    s = e.getData();
                for (o = 0;
                     o < s.length;
                     ++o) {
                    var h = s[o];
                    for (r = 0;
                         r < h.data.length && !(h.data[r][0] > a.x);
                         ++r) ;
                    var d,
                        c = h.data[r - 1],
                        R = h.data[r];
                    d = null === c ? R[1] : c[1], l.eq(o).text(h.label.replace(/=.*/, "= " + d.toFixed(2)))
                }
            }
        }

        for (var t = [], o = [], r = 0;
             r < 14;
             r += .1) t.push([r, Math.sin(r)]),
            o.push([r, Math.cos(r)]);
        if (0 !== $("#tracking-chart").length) {
            var e = $.plot($("#tracking-chart"), [{
                    data: t, label: "Series1", color: COLOR_BLACK_LIGHTER, shadowSize: 0
                }
                    , {
                        data: o, label: "Series2", color: COLOR_BLUE, shadowSize: 0
                    }
                ], {
                    series: {
                        lines: {
                            show: !0
                        }
                    }
                    , crosshair: {
                        mode: "x", color: COLOR_RED
                    }
                    , grid: {
                        hoverable: !0,
                        autoHighlight: !1,
                        borderColor: COLOR_GREY_LIGHTER,
                        borderWidth: 1,
                        backgroundColor: COLOR_SILVER
                    }
                    , yaxis: {
                        tickColor: COLOR_GREY_LIGHTER
                    }
                    , legend: {
                        show: !0
                    }
                }
                ),
                l = $("#tracking-chart .legendLabel");
            l.each(function () {
                    $(this).css("width", $(this).width())
                }
            );
            var i = null,
                n = null;
            $("#tracking-chart").bind("plothover", function (t) {
                    n = t, i || (i = setTimeout(a, 50))
                }
            )
        }
    }

    ,
    handleBarChart = function () {
        "use strict";
        if (0 !== $("#bar-chart").length) {
            var a = [[0,
                    10],
                    [1,
                        8],
                    [2,
                        4],
                    [3,
                        13],
                    [4,
                        17],
                    [5,
                        9]],
                t = [[0,
                    "JAN"],
                    [1,
                        "FEB"],
                    [2,
                        "MAR"],
                    [3,
                        "APR"],
                    [4,
                        "MAY"],
                    [5,
                        "JUN"]];
            $.plot("#bar-chart", [{
                    label: "Bounce Rate", data: a, color: COLOR_BLACK_LIGHTER
                }
                ], {
                    series: {
                        bars: {
                            show: !0, barWidth: .6, align: "center", fill: !0, fillColor: COLOR_BLACK_LIGHTER, zero: !0
                        }
                    }
                    , xaxis: {
                        tickColor: COLOR_GREY_LIGHTER, autoscaleMargin: .05, ticks: t
                    }
                    , grid: {
                        borderColor: COLOR_GREY_LIGHTER, borderWidth: 1, backgroundColor: COLOR_SILVER
                    }
                    , legend: {
                        noColumns: 0
                    }
                }
            )
        }
    }

    ,
    handleInteractivePieChart = function () {
        "use strict";
        if (0 !== $("#interactive-pie-chart").length) {
            for (var a = [], t = [COLOR_ORANGE, COLOR_BLACK_LIGHTER, COLOR_GREY], o = 0;
                 o < 3;
                 o++) a[o] = {
                label: "Series" + (o + 1), data: Math.floor(100 * Math.random()) + 1, color: t[o]
            }
            ;
            $.plot($("#interactive-pie-chart"), a, {
                    series: {
                        pie: {
                            show: !0
                        }
                    }
                    , grid: {
                        hoverable: !0, clickable: !0
                    }
                }
            ),
                $("#interactive-pie-chart").bind("plotclick", function (a, t, o) {
                        if (o) {
                            var r = parseFloat(o.series.percent).toFixed(2);
                            alert(o.series.label + ": " + r + "%")
                        }
                    }
                )
        }
    }

    ,
    handleDonutChart = function () {
        "use strict";
        if (0 !== $("#donut-chart").length) {
            for (var a = [], t = [COLOR_BLACK_LIGHTER, COLOR_GREY, COLOR_RED], o = ["Unique Visitor", "Bounce Rate", "Total Page Views", "Avg Time On Site", "% New Visits"], r = [20, 14, 12, 31, 23], e = 0;
                 e < 3;
                 e++) a[e] = {
                label: o[e], data: r[e], color: t[e]
            }
            ;
            $.plot($("#donut-chart"), a, {
                    series: {
                        pie: {
                            innerRadius: .5, show: !0, combine: {
                                threshold: .1
                            }
                        }
                    }
                    , grid: {
                        borderWidth: 0, hoverable: !0, clickable: !0
                    }
                    , legend: {
                        show: !1
                    }
                }
            )
        }
    }

    ,
    handleInteractiveChart = function () {
        "use strict";
        if (0 !== $("#interactive-chart").length) {
            var a = [[0,
                    42],
                    [1,
                        53],
                    [2,
                        66],
                    [3,
                        60],
                    [4,
                        68],
                    [5,
                        66],
                    [6,
                        71],
                    [7,
                        75],
                    [8,
                        69],
                    [9,
                        70],
                    [10,
                        68],
                    [11,
                        72],
                    [12,
                        78],
                    [13,
                        86]],
                t = [[0,
                    12],
                    [1,
                        26],
                    [2,
                        13],
                    [3,
                        18],
                    [4,
                        35],
                    [5,
                        23],
                    [6,
                        18],
                    [7,
                        35],
                    [8,
                        24],
                    [9,
                        14],
                    [10,
                        14],
                    [11,
                        29],
                    [12,
                        30],
                    [13,
                        43]];
            $.plot($("#interactive-chart"), [{
                    data: a, label: "Page Views", color: COLOR_BLUE, lines: {
                        show: !0, fill: !1, lineWidth: 2.5
                    }
                    , points: {
                        show: !0, radius: 5, fillColor: COLOR_WHITE
                    }
                    , shadowSize: 0
                }
                    , {
                        data: t, label: "Visitors", color: COLOR_GREEN, lines: {
                            show: !0, fill: !1, lineWidth: 2.5, fillColor: ""
                        }
                        , points: {
                            show: !0, radius: 5, fillColor: COLOR_WHITE
                        }
                        , shadowSize: 0
                    }
                ], {
                    xaxis: {
                        tickColor: COLOR_GREY_LIGHTER, tickSize: 2
                    }
                    , yaxis: {
                        tickColor: COLOR_GREY_LIGHTER, tickSize: 20
                    }
                    , grid: {
                        hoverable: !0,
                        clickable: !0,
                        tickColor: COLOR_BLACK_TRANSPARENT_3,
                        borderWidth: 1,
                        borderColor: COLOR_BLACK_TRANSPARENT_2,
                        backgroundColor: COLOR_SILVER_LIGHTER
                    }
                    , legend: {
                        noColumns: 1, show: !0
                    }
                }
            );
            var o = null;
            $("#interactive-chart").bind("plothover", function (a, t, r) {
                    if ($("#x").text(t.x.toFixed(2)), $("#y").text(t.y.toFixed(2)), r) {
                        if (o !== r.dataIndex) {
                            o = r.dataIndex, $("#tooltip").remove();
                            var e = r.datapoint[1].toFixed(2), l = r.series.label + " " + e;
                            showFlotTooltip(r.pageX, r.pageY, l)
                        }
                    }
                    else $("#tooltip").remove(), o = null;
                    a.preventDefault()
                }
            )
        }
    }

    ,
    handleLiveUpdatedChart = function () {
        "use strict";

        function a() {
            l.setData([t()]),
                l.draw(),
                setTimeout(a, e)
        }

        function t() {
            for (o.length > 0 && (o = o.slice(1));
                 o.length < r;
            ) {
                var a = (o.length > 0 ? o[o.length - 1] : 50) + 10 * Math.random() - 5;
                a < 0 && (a = 0),
                a > 100 && (a = 100),
                    o.push(a)
            }
            for (var t = [], e = 0;
                 e < o.length;
                 ++e) t.push([e, o[e]]);
            return t
        }

        if (0 !== $("#live-updated-chart").length) {
            var o = [],
                r = 150,
                e = 1e3;
            $("#updateInterval").val(e).change(function () {
                    var a = $(this).val();
                    a && !isNaN(+a) && ((e = +a) < 1 && (e = 1), e > 2e3 && (e = 2e3), $(this).val("" + e))
                }
            );
            var l = $.plot($("#live-updated-chart"), [{
                    label: "Server stats", data: t()
                }
                ], {
                    series: {
                        shadowSize: 0, color: COLOR_GREEN, lines: {
                            show: !0, fill: !0
                        }
                    }
                    , yaxis: {
                        min: 0, max: 100, tickColor: COLOR_GREY_LIGHTER
                    }
                    , xaxis: {
                        show: !0, tickColor: COLOR_GREY_LIGHTER
                    }
                    , grid: {
                        borderWidth: 1, borderColor: COLOR_GREY_LIGHTER, backgroundColor: COLOR_SILVER_LIGHTER
                    }
                    , legend: {
                        noColumns: 1, show: !0
                    }
                }
            );
            a()
        }
    }

    ,
    Chart = function () {
        "use strict";
        return {
            init: function () {
                handleBasicChart(),
                    handleStackedChart(),
                    handleTrackingChart(),
                    handleBarChart(),
                    handleInteractivePieChart(),
                    handleDonutChart(),
                    handleInteractiveChart(),
                    handleLiveUpdatedChart()
            }
        }
    }

    ();