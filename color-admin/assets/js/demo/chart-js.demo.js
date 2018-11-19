/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/

Chart.defaults.global.defaultFontColor = COLOR_BLACK,
    Chart.defaults.global.defaultFontFamily = FONT_FAMILY,
    Chart.defaults.global.defaultFontStyle = FONT_WEIGHT;
var randomScalingFactor = function () {
        return Math.round(100 * Math.random())
    }

    ,
    lineChartData = {
        labels: ["January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"],
        datasets: [{
            label: "Dataset 1",
            borderColor: COLOR_BLUE,
            pointBackgroundColor: COLOR_BLUE,
            pointRadius: 2,
            borderWidth: 2,
            backgroundColor: COLOR_BLUE_TRANSPARENT_3,
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        }
            ,
            {
                label: "Dataset 2",
                borderColor: COLOR_BLACK,
                pointBackgroundColor: COLOR_BLACK,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: COLOR_BLACK_TRANSPARENT_3,
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }
        ]
    }

    ,
    barChartData = {
        labels: ["January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"],
        datasets: [{
            label: "Dataset 1",
            borderWidth: 2,
            borderColor: COLOR_PURPLE,
            backgroundColor: COLOR_PURPLE_TRANSPARENT_3,
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        }
            ,
            {
                label: "Dataset 2",
                borderWidth: 2,
                borderColor: COLOR_BLACK,
                backgroundColor: COLOR_BLACK_TRANSPARENT_3,
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }
        ]
    }

    ,
    radarChartData = {
        labels: ["Eating",
            "Drinking",
            "Sleeping",
            "Designing",
            "Coding",
            "Cycling",
            "Running"],
        datasets: [{
            label: "Dataset 1",
            borderWidth: 2,
            borderColor: COLOR_RED,
            pointBackgroundColor: COLOR_RED,
            pointRadius: 2,
            backgroundColor: COLOR_RED_TRANSPARENT_2,
            data: [65, 59, 90, 81, 56, 55, 40]
        }
            ,
            {
                label: "Dataset 2",
                borderWidth: 2,
                borderColor: COLOR_BLACK,
                pointBackgroundColor: COLOR_BLACK,
                pointRadius: 2,
                backgroundColor: COLOR_BLACK_TRANSPARENT_2,
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    }

    ,
    polarAreaData = {
        labels: ["Dataset 1",
            "Dataset 2",
            "Dataset 3",
            "Dataset 4",
            "Dataset 5"],
        datasets: [{
            data: [300, 160, 100, 200, 120],
            backgroundColor: [COLOR_PURPLE_TRANSPARENT_7, COLOR_BLUE_TRANSPARENT_7, COLOR_GREEN_TRANSPARENT_7, COLOR_GREY_TRANSPARENT_7, COLOR_BLACK_TRANSPARENT_7],
            borderColor: [COLOR_PURPLE, COLOR_BLUE, COLOR_GREEN, COLOR_GREY, COLOR_BLACK],
            borderWidth: 2,
            label: "My dataset"
        }
        ]
    }

    ,
    pieChartData = {
        labels: ["Dataset 1",
            "Dataset 2",
            "Dataset 3",
            "Dataset 4",
            "Dataset 5"],
        datasets: [{
            data: [300, 50, 100, 40, 120],
            backgroundColor: [COLOR_RED_TRANSPARENT_7, COLOR_ORANGE_TRANSPARENT_7, COLOR_SILVER_TRANSPARENT_7, COLOR_GREY_TRANSPARENT_7, COLOR_BLACK_TRANSPARENT_7],
            borderColor: [COLOR_RED, COLOR_ORANGE, COLOR_SILVER_DARKER, COLOR_GREY, COLOR_BLACK],
            borderWidth: 2,
            label: "My dataset"
        }
        ]
    }

    ,
    doughnutChartData = {
        labels: ["Dataset 1",
            "Dataset 2",
            "Dataset 3",
            "Dataset 4",
            "Dataset 5"],
        datasets: [{
            data: [300, 50, 100, 40, 120],
            backgroundColor: [COLOR_PURPLE_TRANSPARENT_7, COLOR_BLUE_TRANSPARENT_7, COLOR_GREEN_TRANSPARENT_7, COLOR_GREY_TRANSPARENT_7, COLOR_BLACK_TRANSPARENT_7],
            borderColor: [COLOR_PURPLE, COLOR_BLUE, COLOR_GREEN, COLOR_GREY, COLOR_BLACK],
            borderWidth: 2,
            label: "My dataset"
        }
        ]
    }

    ,
    handleChartJs = function () {
        var a = document.getElementById("line-chart").getContext("2d"),
            t = (new Chart(a, {
                    type: "line", data: lineChartData
                }
            ), document.getElementById("bar-chart").getContext("2d")),
            r = (new Chart(t, {
                    type: "bar", data: barChartData
                }
            ), document.getElementById("radar-chart").getContext("2d")),
            o = (new Chart(r, {
                    type: "radar", data: radarChartData
                }
            ), document.getElementById("polar-area-chart").getContext("2d")),
            n = (new Chart(o, {
                    type: "polarArea", data: polarAreaData
                }
            ), document.getElementById("pie-chart").getContext("2d"));
        window.myPie = new Chart(n, {
                type: "pie", data: pieChartData
            }
        );
        var e = document.getElementById("doughnut-chart").getContext("2d");
        window.myDoughnut = new Chart(e, {
                type: "doughnut", data: doughnutChartData
            }
        )
    }

    ,
    ChartJs = function () {
        "use strict";
        return {
            init: function () {
                handleChartJs()
            }
        }
    }

    ();