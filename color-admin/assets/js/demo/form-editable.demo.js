/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleAjaxConsoleLog = function (a, e) {
    var i, n = [];
    n.push(a.type.toUpperCase() + ' url = "' + a.url + '"');
    for (var t in a.data) {
        if (a.data[t] && "object" == typeof a.data[t]) {
            i = [];
            for (var o in a.data[t]) i.push(o + ': "' + a.data[t][o] + '"');
            i = "{ " + i.join(", ") + " }"
        } else i = '"' + a.data[t] + '"';
        n.push(t + " = " + i)
    }
    n.push("RESPONSE: status = " + e.status), e.responseText && ($.isArray(e.responseText) ? (n.push("["), $.each(e.responseText, function (a, e) {
        n.push("{value: " + e.value + ', text: "' + e.text + '"}')
    }), n.push("]")) : n.push($.trim(e.responseText))), n.push("--------------------------------------\n"), $("#console").val(n.join("\n") + $("#console").val())
}, handleEditableFormAjaxCall = function () {
    $.mockjaxSettings.responseTime = 500, $.mockjax({
        url: "/post", response: function (a) {
            handleAjaxConsoleLog(a, this)
        }
    }), $.mockjax({
        url: "/groups", response: function (a) {
            this.responseText = [{value: 0, text: "Guest"}, {value: 1, text: "Service"}, {
                value: 2,
                text: "Customer"
            }, {value: 3, text: "Operator"}, {value: 4, text: "Support"}, {
                value: 5,
                text: "Admin"
            }], handleAjaxConsoleLog(a, this)
        }
    }), $.mockjax({
        url: "/status", status: 500, response: function (a) {
            this.responseText = "Internal Server Error", handleAjaxConsoleLog(a, this)
        }
    })
}, handleEditableFieldConstruct = function () {
    $.fn.editable.defaults.mode = "inline", $.fn.editable.defaults.inputclass = "form-control input-sm", $.fn.editable.defaults.url = "/post", $("#username").editable(), $("#firstname").editable({
        validate: function (a) {
            if ("" === $.trim(a)) return "This field is requiCOLOR_RED"
        }
    }), $("#sex").editable({
        prepend: "not selected",
        source: [{value: 1, text: "Male"}, {value: 2, text: "Female"}],
        display: function (a, e) {
            var i = {"": "", 1: '<i class="fa fa-male m-r-5"></i>', 2: '<i class="fa fa-female m-r-5"></i>'},
                n = $.grep(e, function (e) {
                    return e.value == a
                });
            n.length ? $(this).text(n[0].text).prepend(i[a]) : $(this).empty()
        }
    }), $("#group").editable({showbuttons: !1}), $("#status").editable(), $("#vacation").editable({datepicker: {todayBtn: "linked"}}), $("#dob").editable(), $("#event").editable({
        placement: "right",
        combodate: {firstItem: "name"}
    }), $("#meeting_start").editable({
        format: "yyyy-mm-dd hh:ii",
        viewformat: "dd/mm/yyyy hh:ii",
        validate: function (a) {
            if (a && 10 == a.getDate()) return "Day cant be 10!"
        },
        datetimepicker: {todayBtn: "linked", weekStart: 1}
    }), $("#comments").editable({showbuttons: "bottom"}), $("#state").editable({
        value: "California",
        typeahead: {
            name: "state",
            local: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
        }
    }), $("#fruits").editable({
        pk: 1,
        limit: 3,
        source: [{value: 1, text: "banana"}, {value: 2, text: "peach"}, {value: 3, text: "apple"}, {
            value: 4,
            text: "watermelon"
        }, {value: 5, text: "COLOR_ORANGE"}]
    }), $("#tags").editable({
        inputclass: "form-control",
        select2: {tags: ["html", "javascript", "css", "ajax"], tokenSeparators: [",", " "]}
    });
    var a = [];
    $.each({
        BD: "Bangladesh",
        BE: "Belgium",
        BF: "Burkina Faso",
        BG: "Bulgaria",
        BA: "Bosnia and Herzegovina",
        BB: "Barbados",
        WF: "Wallis and Futuna",
        BL: "Saint Bartelemey",
        BM: "Bermuda",
        BN: "Brunei Darussalam",
        BO: "Bolivia",
        BH: "Bahrain",
        BI: "Burundi",
        BJ: "Benin",
        BT: "Bhutan",
        JM: "Jamaica",
        BV: "Bouvet Island",
        BW: "Botswana",
        WS: "Samoa",
        BR: "Brazil",
        BS: "Bahamas",
        JE: "Jersey",
        BY: "Belarus",
        O1: "Other Country",
        LV: "Latvia",
        RW: "Rwanda",
        RS: "Serbia",
        TL: "Timor-Leste",
        RE: "Reunion",
        LU: "Luxembourg",
        TJ: "Tajikistan",
        RO: "Romania",
        PG: "Papua New Guinea",
        GW: "Guinea-Bissau",
        GU: "Guam",
        GT: "Guatemala",
        GS: "South Georgia and the South Sandwich Islands",
        GR: "Greece",
        GQ: "Equatorial Guinea",
        GP: "Guadeloupe",
        JP: "Japan",
        GY: "Guyana",
        GG: "Guernsey",
        GF: "French Guiana",
        GE: "Georgia",
        GD: "Grenada",
        GB: "United Kingdom",
        GA: "Gabon",
        SV: "El Salvador",
        GN: "Guinea",
        GM: "Gambia",
        GL: "Greenland",
        GI: "Gibraltar",
        GH: "Ghana",
        OM: "Oman",
        TN: "Tunisia",
        JO: "Jordan",
        HR: "Croatia",
        HT: "Haiti",
        HU: "Hungary",
        HK: "Hong Kong",
        HN: "Honduras",
        HM: "Heard Island and McDonald Islands",
        VE: "Venezuela",
        PR: "Puerto Rico",
        PS: "Palestinian Territory",
        PW: "Palau",
        PT: "Portugal",
        SJ: "Svalbard and Jan Mayen",
        PY: "Paraguay",
        IQ: "Iraq",
        PA: "Panama",
        PF: "French Polynesia",
        BZ: "Belize",
        PE: "Peru",
        PK: "Pakistan",
        PH: "Philippines",
        PN: "Pitcairn",
        TM: "Turkmenistan",
        PL: "Poland",
        PM: "Saint Pierre and Miquelon",
        ZM: "Zambia",
        EH: "Western Sahara",
        RU: "Russian Federation",
        EE: "Estonia",
        EG: "Egypt",
        TK: "Tokelau",
        ZA: "South Africa",
        EC: "Ecuador",
        IT: "Italy",
        VN: "Vietnam",
        SB: "Solomon Islands",
        EU: "Europe",
        ET: "Ethiopia",
        SO: "Somalia",
        ZW: "Zimbabwe",
        SA: "Saudi Arabia",
        ES: "Spain",
        ER: "Eritrea",
        ME: "Montenegro",
        MD: "Moldova, Republic of",
        MG: "Madagascar",
        MF: "Saint Martin",
        MA: "Morocco",
        MC: "Monaco",
        UZ: "Uzbekistan",
        MM: "Myanmar",
        ML: "Mali",
        MO: "Macao",
        MN: "Mongolia",
        MH: "Marshall Islands",
        MK: "Macedonia",
        MU: "Mauritius",
        MT: "Malta",
        MW: "Malawi",
        MV: "Maldives",
        MQ: "Martinique",
        MP: "Northern Mariana Islands",
        MS: "Montserrat",
        MR: "Mauritania",
        IM: "Isle of Man",
        UG: "Uganda",
        TZ: "Tanzania, United Republic of",
        MY: "Malaysia",
        MX: "Mexico",
        IL: "Israel",
        FR: "France",
        IO: "British Indian Ocean Territory",
        FX: "France, Metropolitan",
        SH: "Saint Helena",
        FI: "Finland",
        FJ: "Fiji",
        FK: "Falkland Islands (Malvinas)",
        FM: "Micronesia, Federated States of",
        FO: "Faroe Islands",
        NI: "Nicaragua",
        NL: "Netherlands",
        NO: "Norway",
        NA: "Namibia",
        VU: "Vanuatu",
        NC: "New Caledonia",
        NE: "Niger",
        NF: "Norfolk Island",
        NG: "Nigeria",
        NZ: "New Zealand",
        NP: "Nepal",
        NR: "Nauru",
        NU: "Niue",
        CK: "Cook Islands",
        CI: "Cote d'Ivoire",
        CH: "Switzerland",
        CO: "Colombia",
        CN: "China",
        CM: "Cameroon",
        CL: "Chile",
        CC: "Cocos (Keeling) Islands",
        CA: "Canada",
        CG: "Congo",
        CF: "Central African Republic",
        CD: "Congo, The Democratic Republic of the",
        CZ: "Czech Republic",
        CY: "Cyprus",
        CX: "Christmas Island",
        CR: "Costa Rica",
        CV: "Cape Verde",
        CU: "Cuba",
        SZ: "Swaziland",
        SY: "Syrian Arab Republic",
        KG: "Kyrgyzstan",
        KE: "Kenya",
        SR: "Suriname",
        KI: "Kiribati",
        KH: "Cambodia",
        KN: "Saint Kitts and Nevis",
        KM: "Comoros",
        ST: "Sao Tome and Principe",
        SK: "Slovakia",
        KR: "Korea, Republic of",
        SI: "Slovenia",
        KP: "Korea, Democratic People's Republic of",
        KW: "Kuwait",
        SN: "Senegal",
        SM: "San Marino",
        SL: "Sierra Leone",
        SC: "Seychelles",
        KZ: "Kazakhstan",
        KY: "Cayman Islands",
        SG: "Singapore",
        SE: "Sweden",
        SD: "Sudan",
        DO: "Dominican Republic",
        DM: "Dominica",
        DJ: "Djibouti",
        DK: "Denmark",
        VG: "Virgin Islands, British",
        DE: "Germany",
        YE: "Yemen",
        DZ: "Algeria",
        US: "United States",
        UY: "Uruguay",
        YT: "Mayotte",
        UM: "United States Minor Outlying Islands",
        LB: "Lebanon",
        LC: "Saint Lucia",
        LA: "Lao People's Democratic Republic",
        TV: "Tuvalu",
        TW: "Taiwan",
        TT: "Trinidad and Tobago",
        TR: "Turkey",
        LK: "Sri Lanka",
        LI: "Liechtenstein",
        A1: "Anonymous Proxy",
        TO: "Tonga",
        LT: "Lithuania",
        A2: "Satellite Provider",
        LR: "Liberia",
        LS: "Lesotho",
        TH: "Thailand",
        TF: "French Southern Territories",
        TG: "Togo",
        TD: "Chad",
        TC: "Turks and Caicos Islands",
        LY: "Libyan Arab Jamahiriya",
        VA: "Holy See (Vatican City State)",
        VC: "Saint Vincent and the Grenadines",
        AE: "United Arab Emirates",
        AD: "Andorra",
        AG: "Antigua and Barbuda",
        AF: "Afghanistan",
        AI: "Anguilla",
        VI: "Virgin Islands, U.S.",
        IS: "Iceland",
        IR: "Iran, Islamic Republic of",
        AM: "Armenia",
        AL: "Albania",
        AO: "Angola",
        AN: "Netherlands Antilles",
        AQ: "Antarctica",
        AP: "Asia/Pacific Region",
        AS: "American Samoa",
        AR: "Argentina",
        AU: "Australia",
        AT: "Austria",
        AW: "Aruba",
        IN: "India",
        AX: "Aland Islands",
        AZ: "Azerbaijan",
        IE: "Ireland",
        ID: "Indonesia",
        UA: "Ukraine",
        QA: "Qatar",
        MZ: "Mozambique"
    }, function (e, i) {
        a.push({id: e, text: i})
    }), $("#country").editable({
        source: a,
        select2: {width: 200, placeholder: "Select country", allowClear: !0}
    }), $("#address").editable({
        url: "/post",
        value: {city: "Moscow", street: "Lenina", building: "12"},
        validate: function (a) {
            if ("" === a.city) return "city is requiCOLOR_RED!"
        },
        display: function (a) {
            if (a) {
                var e = "<b>" + $("<div>").text(a.city).html() + "</b>, " + $("<div>").text(a.street).html() + " st., bld. " + $("<div>").text(a.building).html();
                $(this).html(e)
            } else $(this).empty()
        }
    }), $("#pencil").click(function (a) {
        a.stopPropagation(), a.preventDefault(), $("#note").editable("toggle")
    }), $("#note").editable({showbuttons: "left"})
}, FormEditable = function () {
    "use strict";
    return {
        init: function () {
            handleEditableFieldConstruct(), handleEditableFormAjaxCall()
        }
    }
}();