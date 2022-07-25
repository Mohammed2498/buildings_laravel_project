<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Soyuz is a bootstrap 4x + laravel admin dashboard template">
    <meta name="keywords"
        content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, laravel, clean, crm, ecommerce, hospital, responsive, rtl, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Soyuz - Bootstrap 4x + Laravel Admin Dashboard Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/images/favicon.ico') }}">
    <!-- Start css -->
    <!-- Apex css -->
    <link href="{{ asset('assets/dashboard/css/apexcharts.css') }}" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="{{ asset('assets/dashboard/css/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{ asset('assets/dashboard/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/slick-theme.css') }}" rel="stylesheet">
    <!-- Switchery css -->
    <link href="{{ asset('assets/dashboard/css/switchery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dashboard/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dashboard/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .apexcharts-canvas.dark {
            background: #343F57;
        }

        .apexcharts-inner {
            position: relative;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-text {
            pointer-events: none;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line {
            pointer-events: none;
        }

        .apexcharts-tooltip.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-z-label:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-candlestick {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-candlestick>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-candlestick span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }


        .apexcharts-xaxistooltip.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.active {
            opacity: 1;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.active,
        .apexcharts-ycrosshairs.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-zoom-rect {
            pointer-events: none;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_points,
        .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .svg_select_points_l,
        .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
            fill: #888;
        }

        .apexcharts-canvas.zoomable .hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-canvas.zoomable .hovering-pan {
            cursor: move
        }

        .apexcharts-xaxis,
        .apexcharts-yaxis {
            pointer-events: none;
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoom-in-icon,
        .apexcharts-zoom-out-icon,
        .apexcharts-reset-zoom-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }


        .apexcharts-zoom-icon svg,
        .apexcharts-zoom-in-icon svg,
        .apexcharts-zoom-out-icon svg,
        .apexcharts-reset-zoom-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .dark .apexcharts-zoom-icon svg,
        .dark .apexcharts-zoom-in-icon svg,
        .dark .apexcharts-zoom-out-icon svg,
        .dark .apexcharts-reset-zoom-icon svg,
        .dark .apexcharts-pan-icon svg,
        .dark .apexcharts-selection-icon svg,
        .dark .apexcharts-menu-icon svg,
        .dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
            fill: #008FFB;
        }

        .light .apexcharts-selection-icon:not(.selected):hover svg,
        .light .apexcharts-zoom-icon:not(.selected):hover svg,
        .light .apexcharts-zoom-in-icon:hover svg,
        .light .apexcharts-zoom-out-icon:hover svg,
        .light .apexcharts-reset-zoom-icon:hover svg,
        .light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-zoom-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-zoom-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoom-in-icon,
        .apexcharts-zoom-out-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoom-out-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            top: 0px;
            right: 3px;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-toolbar svg {
            pointer-events: none;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-toolbar {
                /*opacity: 0;*/
            }

            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    <style type="text/css">
        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close"
                class="infobar-settings-close"><img src="{{ asset('assets/dashboard/images/svg-icon/close.svg') }}"
                    class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">New Order Notification</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Low Stock Alerts</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Vacation Mode</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Order Tracking</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Newsletter Subscription</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Show Review</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Enable Wallet</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="mb-0">Sales Report</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked />
                    </div>
                </div>
            </div>
            <div class="custom-layout-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-12">
                        <h6 class="mb-3">Select Account</h6>
                    </div>
                    <div class="col-6">
                        <div class="account-box active">
                            <img src="{{ asset('assets/dashboard/images/users/boy.svg') }}" class="img-fluid"
                                alt="user">
                            <h5>John</h5>
                            <p>CEO</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="account-box">
                            <img src="{{ asset('assets/dashboard/images/users/women.svg') }}" class="img-fluid"
                                alt="user">
                            <h5>Kate</h5>
                            <p>COO</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="account-box">
                            <img src="{{ asset('assets/dashboard/images/users/men.svg') }}" class="img-fluid"
                                alt="user">
                            <h5>Mark</h5>
                            <p>MD</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="account-box">
                            <p class="dash-analytic-icon"><i class="feather icon-plus font-35"></i></p>
                            <h5>Add</h5>
                            <p>ACCOUNT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <div class="vertical-menu-icon">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <div class="logobar">
                                <a href="index.html" class="logo logo-small"><img
                                        src="{{ asset('assets/dashboard/images/small_logo.svg') }}" class="img-fluid"
                                        alt="logo"></a>
                            </div>
                            <a class="nav-link active" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm"
                                role="tab" aria-controls="v-pills-crm" aria-selected="true"><img
                                    src="{{ asset('assets/dashboard/images/svg-icon/crm.svg') }}" class="img-fluid"
                                    alt="CRM" data-toggle="tooltip" data-placement="top" title="CRM"></a>
                            <a class="nav-link" id="v-pills-ecommerce-tab" data-toggle="pill"
                                href="#v-pills-ecommerce" role="tab" aria-controls="v-pills-ecommerce"
                                aria-selected="false"><img
                                    src="{{ asset('assets/dashboard/images/svg-icon/ecommerce.svg') }}"
                                    class="img-fluid" alt="eCommerce" data-toggle="tooltip" data-placement="top"
                                    title="eCommerce"></a>
                            <a class="nav-link" id="v-pills-hospital-tab" data-toggle="pill"
                                href="#v-pills-hospital" role="tab" aria-controls="v-pills-hospital"
                                aria-selected="false"><img
                                    src="{{ asset('assets/dashboard/images/svg-icon/hospital.svg') }}"
                                    class="img-fluid" alt="Hospital" data-toggle="tooltip" data-placement="top"
                                    title="Hospital"></a>
                            <a class="nav-link" id="v-pills-uikits-tab" data-toggle="pill" href="#v-pills-uikits"
                                role="tab" aria-controls="v-pills-uikits" aria-selected="false"><img
                                    src="{{ asset('assets/dashboard/images/svg-icon/ui-kits.svg') }}"
                                    class="img-fluid" alt="UI Kits" data-toggle="tooltip" data-placement="top"
                                    title="UI Kits"></a>
                            <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages"
                                role="tab" aria-controls="v-pills-pages" aria-selected="false"><img
                                    src="{{ asset('assets/dashboard/images/svg-icon/pages.svg') }}" class="img-fluid"
                                    alt="Pages" data-toggle="tooltip" data-placement="top" title="Pages"></a>
                        </div>
                    </div>
                    <div class="vertical-menu-detail">
                        <div class="logobar">
                            <a href="index.html" class="logo logo-large"><img
                                    src="{{ asset('assets/dashboard/images/logo.svg') }}" class="img-fluid"
                                    alt="logo"></a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-crm" role="tabpanel"
                                aria-labelledby="v-pills-crm-tab">
                                <ul class="vertical-menu">
                                    <li>
                                        <h5 class="menu-title">اسكان</h5>
                                    </li>
                                    <li><a href="index.html"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/dashboard.svg') }}"
                                                class="img-fluid" alt="dashboard">لوحة التحكم</a></li>
                                    <li><a href="{{ route('buildings.index') }}"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/reports.svg') }}"
                                                class="img-fluid" alt="projects">العمارات السكنية</a></li>
                                    <li><a href="{{ route('apartments.index') }}"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/charts.svg') }}"
                                                class="img-fluid" alt="leads">الشقق</a></li>
                                    <li><a href="{{ route('users.index') }}"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/customers.svg') }}"
                                                class="img-fluid" alt="clients">العملاء</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-ecommerce" role="tabpanel"
                                aria-labelledby="v-pills-ecommerce-tab">
                                <ul class="vertical-menu">
                                    <li>
                                        <h5 class="menu-title">eCommerce</h5>
                                    </li>
                                    <li><a href="dashboard-ecommerce.html"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/dashboard.svg') }}"
                                                class="img-fluid" alt="dashboard">Dashboard</a></li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/frontend.svg') }}"
                                                class="img-fluid" alt="frontend"><span>Front End</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="ecommerce-shop.html">Shop</a></li>
                                            <li><a href="ecommerce-single-product.html">Single Product</a></li>
                                            <li><a href="ecommerce-cart.html">Cart</a></li>
                                            <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                            <li><a href="ecommerce-thankyou.html">Thank You</a></li>
                                            <li><a href="ecommerce-myaccount.html">My Account</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/backend.svg') }}"
                                                class="img-fluid" alt="backend"><span>Back End</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="ecommerce-product-list.html">Product List</a></li>
                                            <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                            <li><a href="ecommerce-order-list.html">Order List</a></li>
                                            <li><a href="ecommerce-order-detail.html">Order Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel"
                                aria-labelledby="v-pills-hospital-tab">
                                <ul class="vertical-menu">
                                    <li>
                                        <h5 class="menu-title">Hospital</h5>
                                    </li>
                                    <li><a href="dashboard-hospital.html"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/dashboard.svg') }}"
                                                class="img-fluid" alt="dashboard">لوحة التحكم</a></li>
                                    <li><a href="hospital-appointment.html"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/calender.svg') }}"
                                                class="img-fluid" alt="appointments">Appointments</a></li>
                                    <li><a href="hospital-doctor.html"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/doctor.svg') }}"
                                                class="img-fluid" alt="doctors">Doctors</a></li>
                                    <li><a href="hospital-patient.html"><img
                                                src="{{ asset('assets/dashboard/images/svg-icon/customers.svg') }}"
                                                class="img-fluid" alt="patients">Patients</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-uikits" role="tabpanel"
                                aria-labelledby="v-pills-uikits-tab">
                                <ul class="vertical-menu">
                                    <li>
                                        <h5 class="menu-title">UI Kits</h5>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/basic.svg') }}"
                                                class="img-fluid" alt="basic"><span>Basic UI</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="basic-ui-kits-alerts.html">Alerts</a></li>
                                            <li><a href="basic-ui-kits-badges.html">Badges</a></li>
                                            <li><a href="basic-ui-kits-buttons.html">Buttons</a></li>
                                            <li><a href="basic-ui-kits-cards.html">Cards</a></li>
                                            <li><a href="basic-ui-kits-carousel.html">Carousel</a></li>
                                            <li><a href="basic-ui-kits-collapse.html">Collapse</a></li>
                                            <li><a href="basic-ui-kits-dropdowns.html">Dropdowns</a></li>
                                            <li><a href="basic-ui-kits-embeds.html">Embeds</a></li>
                                            <li><a href="basic-ui-kits-grids.html">Grids</a></li>
                                            <li><a href="basic-ui-kits-images.html">Images</a></li>
                                            <li><a href="basic-ui-kits-media.html">Media</a></li>
                                            <li><a href="basic-ui-kits-modals.html">Modals</a></li>
                                            <li><a href="basic-ui-kits-paginations.html">Paginations</a></li>
                                            <li><a href="basic-ui-kits-popovers.html">Popovers</a></li>
                                            <li><a href="basic-ui-kits-progressbars.html">Progress Bars</a></li>
                                            <li><a href="basic-ui-kits-spinners.html">Spinners</a></li>
                                            <li><a href="basic-ui-kits-tabs.html">Tabs</a></li>
                                            <li><a href="basic-ui-kits-toasts.html">Toasts</a></li>
                                            <li><a href="basic-ui-kits-tooltips.html">Tooltips</a></li>
                                            <li><a href="basic-ui-kits-typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/advanced.svg') }}"
                                                class="img-fluid" alt="advanced"><span>Advanced UI</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="advanced-ui-kits-image-crop.html">Image Crop</a></li>
                                            <li><a href="advanced-ui-kits-jquery-confirm.html">jQuery Confirm</a></li>
                                            <li><a href="advanced-ui-kits-nestable.html">Nestable</a></li>
                                            <li><a href="advanced-ui-kits-pnotify.html">Pnotify</a></li>
                                            <li><a href="advanced-ui-kits-range-slider.html">Range Slider</a></li>
                                            <li><a href="advanced-ui-kits-ratings.html">Ratings</a></li>
                                            <li><a href="advanced-ui-kits-session-timeout.html">Session Timeout</a>
                                            </li>
                                            <li><a href="advanced-ui-kits-sweet-alerts.html">Sweet Alerts</a></li>
                                            <li><a href="advanced-ui-kits-switchery.html">Switchery</a></li>
                                            <li><a href="advanced-ui-kits-toolbar.html">Toolbar</a></li>
                                            <li><a href="advanced-ui-kits-tour.html">Tour</a></li>
                                            <li><a href="advanced-ui-kits-treeview.html">Tree View</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/apps.svg') }}"
                                                class="img-fluid" alt="apps"><span>Apps</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="apps-calender.html">Calender</a></li>
                                            <li><a href="apps-chat.html">Chat</a></li>
                                            <li>
                                                <a href="javaScript:void();">Email<i
                                                        class="feather icon-chevron-right"></i></a>
                                                <ul class="vertical-submenu">
                                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                                    <li><a href="apps-email-open.html">Open</a></li>
                                                    <li><a href="apps-email-compose.html">Compose</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="apps-kanban-board.html">Kanban Board</a></li>
                                            <li><a href="apps-onboarding-screens.html">Onboarding Screens</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/forms.svg') }}"
                                                class="img-fluid" alt="forms"><span>Forms</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="form-inputs.html">Basic Elements</a></li>
                                            <li><a href="form-groups.html">Groups</a></li>
                                            <li><a href="form-layouts.html">Layouts</a></li>
                                            <li><a href="form-colorpickers.html">Color Pickers</a></li>
                                            <li><a href="form-datepickers.html">Date Pickers</a></li>
                                            <li><a href="form-editors.html">Editors</a></li>
                                            <li><a href="form-file-uploads.html">File Uploads</a></li>
                                            <li><a href="form-input-mask.html">Input Mask</a></li>
                                            <li><a href="form-maxlength.html">MaxLength</a></li>
                                            <li><a href="form-selects.html">Selects</a></li>
                                            <li><a href="form-touchspin.html">Touchspin</a></li>
                                            <li><a href="form-validations.html">Validations</a></li>
                                            <li><a href="form-wizards.html">Wizards</a></li>
                                            <li><a href="form-xeditable.html">X-editable</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/charts.svg') }}"
                                                class="img-fluid" alt="charts"><span>Charts</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="chart-apex.html">Apex</a></li>
                                            <li><a href="chart-c3.html">C3</a></li>
                                            <li><a href="chart-chartistjs.html">Chartist</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                                            <li><a href="chart-flot.html">Flot</a></li>
                                            <li><a href="chart-knob.html">Knob</a></li>
                                            <li><a href="chart-morris.html">Morris</a></li>
                                            <li><a href="chart-piety.html">Piety</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/icons.svg') }}"
                                                class="img-fluid" alt="icons"><span>Icons</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="icon-svg.html">SVG</a></li>
                                            <li><a href="icon-dripicons.html">Dripicons</a></li>
                                            <li><a href="icon-feather.html">Feather</a></li>
                                            <li><a href="icon-flag.html">Flag</a></li>
                                            <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                                            <li><a href="icon-ionicons.html">Ion</a></li>
                                            <li><a href="icon-line-awesome.html">Line Awesome</a></li>
                                            <li><a href="icon-material-design.html">Material Design</a></li>
                                            <li><a href="icon-simple-line.html">Simple Line</a></li>
                                            <li><a href="icon-socicon.html">Socicon</a></li>
                                            <li><a href="icon-themify.html">Themify</a></li>
                                            <li><a href="icon-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/tables.svg') }}"
                                                class="img-fluid" alt="tables"><span>Tables</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="table-bootstrap.html">Bootstrap</a></li>
                                            <li><a href="table-datatable.html">Datatable</a></li>
                                            <li><a href="table-editable.html">Editable</a></li>
                                            <li><a href="table-footable.html">Foo</a></li>
                                            <li><a href="table-rwdtable.html">RWD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/maps.svg') }}"
                                                class="img-fluid" alt="maps"><span>Maps</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="map-google.html">Google</a></li>
                                            <li><a href="map-vector.html">Vector</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="widgets.html">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/widgets.svg') }}"
                                                class="img-fluid" alt="widgets"><span>Widgets</span><span
                                                class="badge badge-success pull-right">New</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pages" role="tabpanel"
                                aria-labelledby="v-pills-pages-tab">
                                <ul class="vertical-menu">
                                    <li>
                                        <h5 class="menu-title">Pages</h5>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/basic_page.svg') }}"
                                                class="img-fluid" alt="basic_page"><span>Basic</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="page-starter.html">Starter</a></li>
                                            <li><a href="page-blog.html">Blog</a></li>
                                            <li><a href="page-faq.html">FAQ</a></li>
                                            <li><a href="page-gallery.html">Gallery</a></li>
                                            <li><a href="page-invoice.html">Invoice</a></li>
                                            <li><a href="page-pricing.html">Pricing</a></li>
                                            <li><a href="page-timeline.html">Timeline</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javaScript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/authentication.svg') }}"
                                                class="img-fluid" alt="authentication"><span>Authentications</span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li><a href="user-login.html">Login</a></li>
                                            <li><a href="user-register.html">Register</a></li>
                                            <li><a href="user-forgotpsw.html">Forgot Password</a></li>
                                            <li><a href="user-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="error-comingsoon.html">Coming Soon</a></li>
                                            <li><a href="error-maintenance.html">Maintenance</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="error-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img
                                    src="{{ asset('assets/dashboard/images/logo.svg') }}" class="img-fluid"
                                    alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/horizontal.svg') }}"
                                                class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/verticle.svg') }}"
                                                class="img-fluid menu-hamburger-vertical" alt="verticle">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/menu.svg') }}"
                                                class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/close.svg') }}"
                                                class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/menu.svg') }}"
                                                class="img-fluid menu-hamburger-collapse" alt="menu">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/close.svg') }}"
                                                class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit"
                                                        id="button-addonSearch"><img
                                                            src="{{ asset('assets/dashboard/images/svg-icon/search.svg') }}"
                                                            class="img-fluid" alt="search"></button>
                                                </div>
                                                <input type="search" class="form-control" placeholder="Search"
                                                    aria-label="Search" aria-describedby="button-addonSearch">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="languagebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="languagelink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><span class="live-icon">EN</span><span
                                                    class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu" aria-labelledby="languagelink">
                                                <a class="dropdown-item" href="#"><i
                                                        class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="flag flag-icon-de flag-icon-squared"></i>German</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="flag flag-icon-bl flag-icon-squared"></i>France</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="settingbar">
                                        <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                            <img src="{{ asset('assets/dashboard/images/svg-icon/settings.svg') }}"
                                                class="img-fluid" alt="settings">
                                            <span class="live-icon">3</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="#" role="button"
                                                id="notoficationlink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><img
                                                    src="{{ asset('assets/dashboard/images/svg-icon/notifications.svg') }}"
                                                    class="img-fluid" alt="notifications">
                                                <span class="live-icon">2</span></a>
                                            <div class="dropdown-menu" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h4>Notifications</h4>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-success-inverse">N</span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">New trends for you</h5>
                                                            <p><span class="timing">10 min ago</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-primary-inverse"><i
                                                                class="feather icon-gift"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">John birthday today</h5>
                                                            <p><span class="timing">Today, 12:00 AM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-warning-inverse">T</span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">This is start of your story</h5>
                                                            <p><span class="timing">Yesterday, 01:25 PM</span>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-danger-inverse"><i
                                                                class="feather icon-thumbs-up"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Admin has 1 new like</h5>
                                                            <p><span class="timing">5 Feb 2020, 03:31 PM</span>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="profilelink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><img
                                                    src="{{ asset('assets/dashboard/images/users/profile.svg') }}"
                                                    class="img-fluid" alt="profile"><span class="live-icon">
                                                        {{ Auth::user()->name }}
                                                </span><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                        <h5>John Doe</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img
                                                                    src="{{ asset('assets/dashboard/images/svg-icon/crm.svg') }}"
                                                                    class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img
                                                                    src="{{ asset('assets/dashboard/images/svg-icon/email.svg') }}"
                                                                    class="img-fluid" alt="email">Email</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img
                                                                    src="{{ asset('assets/dashborad/images/svg-icon/logout.svg') }}"
                                                                    class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown show">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="profilelink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="true"><img
                                                    src="{{ asset('assets/dashboard/images/users/profile.svg') }}"
                                                    class="img-fluid" alt="profile"><span class="live-icon">
                                                    {{ Auth::user()->name }}
                                                </span><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu show" aria-labelledby="profilelink"
                                                x-placement="bottom-start"
                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                        <h5> {{ Auth::user()->name }}</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img
                                                                    src="{{ asset('assets/dashboard/images/svg-icon/crm.svg') }}"
                                                                    class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img
                                                                    src="{{ asset('assets/dashboard/images/svg-icon/email.svg') }}"
                                                                    class="img-fluid" alt="email">Email</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <form action="{{ route('logout') }}" method="post">
                                                                @csrf
                                                                <button class="profile-icon">
                                                                    <img src="{{ asset('assets/dashboard/images/svg-icon/logout.svg') }}"
                                                                        class="img-fluid"
                                                                        alt="logout">Logout</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li class="list-inline-item">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Logout</button>
                                    </form>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">@yield('page_title')</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            @yield('action')
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->
            <div class="contentbar">
                <!-- Start row -->
                <!-- End row -->
                @yield('content')
                <!-- Start row -->
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Soyuz - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{ asset('assets/dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap.min.jsz') }}"></script>
    <script src="{{ asset('assets/dashboard/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/detect.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('assets/dashboard/js/switchery.min.js') }}"></script>
    <!-- Apex js -->
    <script src="{{ asset('assets/dashboard/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/irregular-data-series.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/dashboard/js/slick.min.js') }}"></script>
    <!-- Vector Maps js -->
    <script src="{{ asset('assets/dashboard/js/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Custom Dashboard js -->
    <script src="{{ asset('assets/dashboard/js/custom-dashboard.js') }}"></script>
    <!-- Core js -->
    <script src="{{ asset('assets/dashboard/js/core.js') }}"></script>
    <!-- End js -->
</body>

</html>
