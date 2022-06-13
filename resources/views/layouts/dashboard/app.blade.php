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
    <link href="{{ asset('assets/dashboard/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img
                    src="{{ asset('assets/dashboard/images/svg-icon/close.svg') }}"
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
                                        src="{{ asset('assets/dashboard/images/small_logo.svg') }}"
                                        class="img-fluid" alt="logo"></a>
                            </div>
                            <a class="nav-link active" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm"
                                role="tab" aria-controls="v-pills-crm" aria-selected="true"><img
                                    src="{{ asset('assets/dashboard/images/svg-icon/crm.svg') }}"
                                    class="img-fluid" alt="CRM" data-toggle="tooltip" data-placement="top"
                                    title="CRM"></a>
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
                                    src="{{ asset('assets/dashboard/images/svg-icon/pages.svg') }}"
                                    class="img-fluid" alt="Pages" data-toggle="tooltip" data-placement="top"
                                    title="Pages"></a>
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
                                    <li><a href="crm-clients.html"><img
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
                                            <li><a href="advanced-ui-kits-session-timeout.html">Session Timeout</a></li>
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
                                                class="img-fluid"
                                                alt="authentication"><span>Authentications</span><i
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
                                            <a class="dropdown-toggle" href="#" role="button" id="languagelink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                    class="live-icon">EN</span><span
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
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                    src="{{ asset('assets/dashboard/images/users/profile.svg') }}"
                                                    class="img-fluid" alt="profile"><span
                                                    class="live-icon">{{ Auth::user()->name }}</span><span
                                                    class="feather icon-chevron-down live-icon"></span></a>
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
                                </li>
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
