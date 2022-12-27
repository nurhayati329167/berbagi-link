<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:500,600,700"
    media="all">
<link href="https://berbagi.link/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
    type="text/css">
<link href="https://berbagi.link/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css">
<link href="https://berbagi.link/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" sizes="16x16" href="https://berbagi.link/images/b_berbagi_warna.svg">
<link rel="stylesheet" href="https://berbagi.link/css/toastr.min.css">

<link rel="stylesheet" href="https://berbagi.link/css/my_app.css?v=20">
<link rel="stylesheet" href="https://berbagi.link/css/modal_subscriptions.css?v=1">
<link rel="stylesheet" href="https://berbagi.link/css/promo.css?v=6">
<style>
.count {
    background-color: #ff9a3b;
    color: white;
    border-radius: 100%;
    padding: 8px;
    width: 20px;
    height: 20px;
    text-align: center;
    display: flex;
    font-size: 11px;
    font-weight: 600;
    justify-items: center;
    align-items: center;
    /* display: inline; */
}
</style>
<link rel="stylesheet"
    href="https://berbagi.link/plugins/bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
<link href="https://berbagi.link/css/highcharts/highcharts.css" rel="stylesheet" type="text/css">
<style>
#list-analytic .item-link {
    margin-top: 15px;
}

#list-analytic .item-link:first-child {
    margin-top: 0px;
}

.total-click {
    height: 100%;
    display: flex;
    align-items: center;
    text-align: center !important;
}

#list-analytic .item-link .title {
    font-weight: 600;
    font-size: 14px;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
    width: auto;
}

.block-analytic-container {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(80, 80, 80, 0.3);
    z-index: 2;
    display: flex;
    align-items: center;
    text-align: center;
}

.upgrade-container {
    width: 100%;
    max-width: 500px;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    display: inline-block;
    margin: auto;
}

#filter-date .datepicker tbody tr>td.disabled {
    background-color: #e6d8d8;
    cursor: not-allowed;
}

#view-chart .m-section,
#click-chart .m-section {
    overflow-x: auto;
}

#view-chart .m-section__content,
#click-chart .m-section__content {
    min-width: 500px;
}
</style>
<style type="text/css">
span.im-caret {
    -webkit-animation: 1s blink step-end infinite;
    animation: 1s blink step-end infinite;
}

@keyframes blink {

    from,
    to {
        border-right-color: black;
    }

    50% {
        border-right-color: transparent;
    }
}

@-webkit-keyframes blink {

    from,
    to {
        border-right-color: black;
    }

    50% {
        border-right-color: transparent;
    }
}

span.im-static {
    color: grey;
}

div.im-colormask {
    display: inline-block;
    border-style: inset;
    border-width: 2px;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}

div.im-colormask>input {
    position: absolute;
    display: inline-block;
    background-color: transparent;
    color: transparent;
    -webkit-appearance: caret;
    -moz-appearance: caret;
    appearance: caret;
    border-style: none;
    left: 0;
    /*calculated*/
}

div.im-colormask>input:focus {
    outline: none;
}

div.im-colormask>input::-moz-selection {
    background: none;
}

div.im-colormask>input::selection {
    background: none;
}

div.im-colormask>input::-moz-selection {
    background: none;
}

div.im-colormask>div {
    color: black;
    display: inline-block;
    width: 100px;
    /*calculated*/
}
</style>
<style type="text/css">
/* Chart.js */
@-webkit-keyframes chartjs-render-animation {
    from {
        opacity: 0.99
    }

    to {
        opacity: 1
    }
}

@keyframes chartjs-render-animation {
    from {
        opacity: 0.99
    }

    to {
        opacity: 1
    }
}

.chartjs-render-monitor {
    -webkit-animation: chartjs-render-animation 0.001s;
    animation: chartjs-render-animation 0.001s;
}
</style>
<style id="cs_cursor_css_no_hd">
.lbl-link,
.shadow-avatar.load-modal,
.slider.round,
.avatar-img-admin,
.fa.fa-plus.icon-new,
.link-left-item,
.btn-select-all,
.lbl-pro,
#css_cs_pointer,
.cs_pointer,
* a,
* button,
a *,
button *,
input[type=range] *,
[data-cur=pointer] *,
[data-cur=pointer],
[data-cur=pointer]:hover,
[data-cur=pointer] *:hover {
    cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAy5JREFUOE+tk2tIk2EUx895383prEaKNjLpIq5yaRdNMy9TUvODqaQRXYb1oSyovkSgKCFZJEE384tG0MUtc62gsotdNrqNcAuTMrMsLNREFBUv2969zxOvbl5wM4jOp+d93vP8zvmfC4IH04RoknmOzxRJRcHETu4Mzx/W5VvyOU/+rnt051ATen2ljaOmnLc5MhQh/VTx0dGqadXublPv+Sdg9bJrGVHHo2+HqhUSAYCAVKPQ3Fe3qbP+GbipOk0fGBPoNQ4E0Ci09/4rUBuqfR70vS09GUocs2XptobxxU8yyveu169eIpvIUBel4+WxchqXcqIBhrpPA0XKA/dTkvelaWoAt0C4/WqLQRWhT/SbI3ZJNu4z8qrLSQyM9lB6fwuCcp8dLTdGrRai9K140zmzy3UNqd48w1szI1+4BeYbiaoyiQEKQHXxADkGil2DlKSeQjpP8gM6+ivEXVUXEQwGEfZLWqLn+izuGrFjL2Cx1c59faZadXNahhNACrR2I2CugQLrjXxkAbDmMiBpJzm++Vc2gv518vaF/g+00QopTyjc7ezjdpi/tT9PCFuc6D93UrJ7ICWRBchYypB29FHHhuIsFOlNcbH+vvXGBKVUkCNYWWunI2r+HJISOG+sKYIZ9xtJUpUgmQLVxVHMMQKyEnCsOYZs4xmA3wPArS/MRCihDKx511gRFqw8GCJnhMc2ngCDCGJmsme2PhtI/MbmHGCkB0AaMH7+PQAgl00BOjNY8eS9yZwcHuPDOCnu+w8uFWPTLpigSjgP9hJaujVr8lmdJV1O+Lrvm9cyEoYZd3JnLoDrn/Obtt6ygrk0d9oz9o5p1+ElAVfPrl4q8rgNzjpPy1Bwrlk3wHhZY6bnIdQzwnTu8fJFB1IVCyUwpYazBujt46Fe9ZlVN4fPFFZpFrdX1hYFFWcXYFaMswuzbS8AvfSI2tuLgqXnP3S4rRRdoPZ1MD4PUXskARNXeqrmRBWJ8uhLccuFJNeaegzvOHTFhiXbxMLszTBEEO7Jzgs8beo84NVdeeWvQJt/XiEbIIulQBCIa0wogABjGQAHD8wQ95Ttqip3BfwDgLBUNeramj0AAAAASUVORK5CYII= ) 7 1, auto !important;
}

.blockUI.blockOverlay,
.form-control-label,
.form-control.m-input.required,
#css_cs_cursor,
.cs_cursor,
body,
html,
input,
[data-cur=cursor]:hover,
[data-cur=cursor] *:hover {
    cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAmdJREFUOE9jZEAC8xXmc/jmTOsRlvi2kDHm6mlkOWLZjMgK58rOlTIrVn+gKZT2i5mDQYUx7NoLYg2CqcMw0KTM5IFOLB/Lv53x/xl+v/JkjbmxixRDsRuYqc0KMuTflqDfLH8e2DJcuXSasYHhHzEGYzcwS4eV4f9/BoYf7/4znOn49vfpjiK26GuzKDeQkZGB4d/v//9OtfxjerKhnIlRcwJj2Oq/+AzG7UJkXf/+MDDcXvmz/eGs/hrPI5WkGwgKQ5DrUMB/ht33Vv1fe3PGhtk+h4JwGYo/DDEMZWDYdXcFw/rbs2784mI0XOB44Ae6wcR5GU3XiSc7/y+43H5qts9hC6oYCDJk+90lfzfdmn/m12sGhwWJCJcS7cJjT7b/2XBzDvOf/38YWJnYwA779PvdNRZOBotpjge+4M8psHT4/8///28u/WMUM2a+9ub032kXak5wsf0J6HU88Ib0SPn78///M23f/j/Zz8UUuI+RgYnlf8W+MIY/759x94cd/06agbECLP+Plv1j/nLF/h8DW/h/m2k5jBJmjJdeHfsz81xN2Qzvg/1EG2iawf1QU6H3NQvrR1PGsFtP/y/TEf+nGnubwaiEF5Qdb2dWHNSY3eNAlIGrGFYxe8zqTmJg/7yOL/7GW5Cm/w0MTH+VtbYwRl50Z2BkYvrfufH/78n77TmfTz6MzVD07IDV4v/LdML+yngsY7TqYGZ49eHff6PKF8y2H+QYV2Pma+IM/M/A+HeN/VtGl7kC/8u3fv236ertthdSJg0MDRhFGlEGgpz9fbmaLcs/FmeW28LbGBsOn8IVhgARiywkuRC4zAAAAABJRU5ErkJggg== ) 4 1, auto !important;
}
</style>