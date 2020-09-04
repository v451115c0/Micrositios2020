<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Flaticon Icon | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 
    <link href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
        .icon-container { text-align: center; }
        .icon-container [class^="flaticon-"], .icon-container [class*=" flaticon-"] {
            color: #888ea8; font-size: 27px; background-color: #fff; margin: 0 auto; margin-bottom: 24px; padding: 18px; border-radius: 10px; 
            -moz-transition: all 0.3s; -webkit-transition: all 0.3s; transition: all 0.3s; display: block; width: 65px; box-shadow: 0px 3px 25px 0px rgba(113, 106, 202, 0.2);
        }
        .icon-name { color: #888ea8; font-size: 14px; transition: .3s; }
        .icon-container [class*="flaticon-"]:hover { color: #3862f5; }
        .icon-container [class*="flaticon-"]:hover + span[class="icon-name"] { color: #3862f5; }
        h4 { color: #ee3d50; font-weight: 600; margin: 0; padding: 16px 15px; font-size: 1.3rem; }
    </style>
</head>
<body>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown language-dropdown ml-1  ml-lg-0">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="flagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/ca.svg" alt=""> <span class="d-lg-inline-block d-none"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="flagDropdown">
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/de.svg" class="flag-width" alt=""> &#xA0;German</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/jp.svg" class="flag-width" alt=""> &#xA0;Japanese</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/fr.svg" class="flag-width" alt=""> &#xA0;French</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ru.svg" class="flag-width" alt=""> &#xA0;Russian</a>
                    <a class="dropdown-item" href="javascript:void(0);"><img src="assets/img/ca.svg" class="flag-width" alt=""> &#xA0;English</a>
                </div>
            </li>
        </ul>


        <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
            <li class="nav-item dropdown message-dropdown ml-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-mail-10"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="messageDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-chat-line mr-3"></i><span>You have 13 new messages</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Browse latest projects...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Kara Young</p>
                                    <p class="meta-time mb-0  align-self-center">1 min ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Design, Development and...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Amy Diaz</p>
                                    <p class="meta-time mb-0  align-self-center">5 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">We can ensure...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Shaun Park</p>
                                    <p class="meta-time mb-0  align-self-center">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="footer dropdown-item" href="javascript:void(0);">
                        <div class="btn btn-info mb-3 mr-2 btn-rounded"><i class="flaticon-arrow-right mr-3"></i> View more</div>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bell-4"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-bell-13 mr-3"></i> <span>You have 15 new notifications</span>
                    </a>

                    <a class="dropdown-item text-center  p-1" href="javascript:void(0);">

                        <div class="notification-list ">
                            
                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                               
                                <h6 class="mb-1">5 new members joined today</h6>
                                <p><span class="meta-time">1 minute ago</span> . <span class="meta-member-notification">4 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/90x90.jpg" alt="admin-profile" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/90x90.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/90x90.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/90x90.jpg" alt="admin-profile">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">

                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn2" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-1">Very long description...</h6>
                                <p><span class="meta-time">5 minutes ago</span> . <span class="meta-member-notification">5 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-1">New item are in queue</h6>
                                <p><span class="meta-time">25 minutes ago</span> . <span class="meta-member-notification">3 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <a class="footer dropdown-item text-center p-2">
                        <span class="mr-1">View All</span>
                        <div class="btn btn-gradient-warning rounded-circle"><i class="flaticon-arrow-right flaticon-circle-p"></i></div>
                    </a>
                </div>
            </li>
        </ul>


        <ul class="navbar-nav flex-row ml-lg-auto">
            
            <li class="nav-item  d-lg-block d-none">
                <form class="form-inline" role="search">
                    <input type="text" class="form-control search-form-control" placeholder="Search...">
                </form>
            </li>

            <li class="nav-item dropdown app-dropdown  ml-lg-4 mr-lg-2 order-lg-0 order-2">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="appDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bulb"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="appDropdown">
                    <a class="dropdown-item" href="ecommerce_dashboard.html">
                        <i class="flaticon-commerce"></i><span>eCommerce</span>
                    </a>
                    <a class="dropdown-item" href="form_bootstrap_basic.html">
                        <i class="flaticon-edit-3"></i><span>Forms</span>
                    </a>
                    <a class="dropdown-item" href="table_basic.html">
                        <i class="flaticon-table"></i><span>Tables</span>
                    </a>
                    <a class="dropdown-item" href="ui_buttons.html">
                        <i class="flaticon-switch"></i><span>Buttons</span>
                    </a>
                    <a class="dropdown-item" href="ui_flaticon_icon.html">
                        <i class="flaticon-edit"></i><span>Font Icons</span>
                    </a>
                    <a class="dropdown-item" href="modules_widgets.html">
                        <i class="flaticon-computer-5"></i><span>Modules</span>
                    </a>
                    <a class="dropdown-item" href="map_google_basic.html">
                        <i class="flaticon-location"></i><span>Maps</span>
                    </a>
                    <a class="dropdown-item" href="apps_drag_n_drop_calendar.html">
                        <i class="flaticon-calendar-1"></i><span>Calendar</span>
                    </a>
                    <a class="dropdown-item" href="am_column_and_barchart.html">
                        <i class="flaticon-chart-3"></i><span>Charts</span>
                    </a>
                </div>
            </li>


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="user_profile.html">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <a class="dropdown-item" href="apps_scheduler.html">
                        <i class="mr-1 flaticon-calendar-bold"></i> <span>My Schedule</span>
                    </a>
                    <a class="dropdown-item" href="apps_mailbox.html">
                        <i class="mr-1 flaticon-email-fill-1"></i> <span>My Inbox</span>
                    </a>
                    <a class="dropdown-item" href="user_lockscreen_1.html">
                        <i class="mr-1 flaticon-lock-2"></i> <span>Lock Screen</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="user_login_1.html">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown cs-toggle order-lg-0 order-3"> 
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="flaticon-menu-dot-fill d-lg-inline-block d-none"></span>
                    <span class="flaticon-dots d-lg-none"></span>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="index.html" class="navbar-brand">
                            <img src="assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> Equation </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>

                            <div>
                                <span class="badge badge-pill badge-secondary mr-2">7</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                            <li>
                                <a href="index.html"> <i class="flaticon-computer-4"></i> Default </a>
                            </li>
                            <li>
                                <a href="accounting_dashboard.html"> <i class="flaticon-chart-line"></i> Accounting </a>
                            </li>
                            <li>
                                <a href="analytics_dashboard.html"> <i class="flaticon-computer-2"></i> Analytics </a>
                            </li>
                            <li>
                                <a href="car_dashboard.html"> <i class="flaticon-car"></i> Car </a>
                            </li>
                            <li>
                                <a href="classic_dashboard.html"> <i class="flaticon-computer-8"></i> Classic </a>
                            </li>
                            <li>
                                <a href="stock_market_dashboard.html"> <i class="flaticon-up-chart"></i> Stock Market </a>
                            </li>
                            <li>
                                <a href="cryptocurrency_dashboard.html"> <i class="flaticon-bitcoin-circle"></i> Cryptocurrency </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-2"></i>
                                <span>Ecommerce</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="ecommerce_dashboard.html"> Dashboard </a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html"> Orders </a>
                            </li>
                            <li>
                                <a href="ecommerce_product.html"> Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_product_catalog.html"> Product Catalog </a>
                            </li>
                            <li>
                                <a href="#product-details" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Product Details <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="product-details">
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Product Details 1 </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_2.html"> Product Details 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_product.html"> Add/Edit Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_categories.html"> Add/Edit Categories </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_cart.html"> View Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_payments.html"> View Payments </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_customers.html"> View Customers </a>
                            </li>
                            <li>
                                <a href="ecommerce_checkout.html"> Checkout </a>
                            </li>
                            <li>
                                <a href="ecommerce_invoices.html"> Invoice </a>
                            </li>
                            <li>
                                <a href="ecommerce_shipments.html"> Shipments </a>
                            </li>
                            <li>
                                <a href="ecommerce_products_cart.html"> Products in Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_coupons.html"> Coupons </a>
                            </li>
                            <li>
                                <a href="ecommerce_low_stock.html"> Low Stock </a>
                            </li>
                            <li>
                                <a href="ecommerce_best_sellers.html"> Best Sellers </a>
                            </li>
                            <li>
                                <a href="ecommerce_refunds.html"> Refunds </a>
                            </li>
                            <li>
                                <a href="ecommerce_search_terms.html"> Search Terms </a>
                            </li>
                            <li>
                                <a href="ecommerce_newsletters.html"> Newsletters </a>
                            </li>
                            <li>
                                <a href="ecommerce_wizards.html"> Payment Wizard </a>
                            </li>
                            <li>
                                <a href="ecommerce_reviews.html"> Reviews </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>UI Kit</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="ui-features"  data-parent="#accordionExample">
                            <li>
                                <a href="ui_helper_classes.html"> Helper Classes </a>
                            </li>
                            <li>
                                <a href="ui_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="ui_grid.html"> Grid System </a>
                            </li>
                            <li>
                                <a href="ui_typography.html"> Typography </a>
                            </li>
                            <li>
                                <a href="ui_shadows.html"> Shadow </a>
                            </li>
                            <li>
                                <a href="ui_miscellaneous.html"> Miscellaneous </a>
                            </li>
                            <li>
                                <a href="ui_pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui_alert.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_tooltips_and_popovers.html"> Tooltips And Popovers </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Loaders </a>
                            </li>
                            <li>
                                <a href="#ui-buttons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Buttons <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-buttons" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_buttons.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="ui_creative.html"> Creative </a>
                                    </li>
                                    <li>
                                        <a href="ui_switches.html"> Switches </a>
                                    </li>
                                    <li>
                                        <a href="ui_social_button.html"> Social </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="#ui-font-icons" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Font Icons <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="ui-font-icons" data-parent="#ui-features">
                                    <li class="active">
                                        <a href="ui_flaticon_icon.html"> Flaticon </a>
                                    </li>
                                    <li>
                                        <a href="ui_linea_icon.html"> Linea </a>
                                    </li>
                                    <li>
                                        <a href="ui_themify_icon.html"> Themify </a>
                                    </li>
                                    <li>
                                        <a href="ui_pixeden_icon.html"> Pixeden </a>
                                    </li>
                                    <li>
                                        <a href="ui_fontawesome_icon.html"> Fontawesome </a>
                                    </li>
                                    <li>
                                        <a href="ui_metro_icon.html"> Metro </a>
                                    </li>
                                    <li>
                                        <a href="ui_weather_icon.html"> Weather </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="ui_accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="ui_modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="ui_sliders.html"> Range Sliders </a>
                            </li>
                            <li>
                                <a href="ui_timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="ui_tree.html"> Tree View </a>
                            </li>
                            <li>
                                <a href="#ui-progress" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Progress Bar <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-progress" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_bootstrap_progress_bar.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="ui_material_progress_bar.html"> Custom </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#ui-notification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Notifications <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-notification" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_toastr.html"> Toastr </a>
                                    </li>
                                    <li>
                                        <a href="ui_notification.html"> Creative </a>
                                    </li>
                                    <li>
                                        <a href="ui_snackbar.html"> Snackbar </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="ui_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="ui_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="ui_nestable_list.html"> Nested List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-3d-cube"></i>
                                <span>Components</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="component_portlet.html"> Portlets </a>
                            </li>
                            <li>
                                <a href="component_keypad.html"> Keypad </a>
                            </li>

                            <li>
                                <a href="#component-carousel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Carousel <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-carousel" data-parent="#components">                                    
                                    <li>
                                        <a href="component_bootstrap_carousel.html">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a href="component_carousel.html">Metro</a>
                                    </li>
                                    <li>
                                        <a href="component_sliders.html">Swiper</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="component_rating.html"> Rating </a>
                            </li>
                            <li>
                                <a href="component_blockui.html"> Block UI </a>
                            </li>
                            <li>
                                <a href="component_popup.html"> Popup </a>
                            </li>
                            <li>
                                <a href="component_scroll_bars_basic.html"> Scrollbar </a>
                            </li>
                            <li>
                                <a href="component_todo_list.html"> Todo List </a>
                            </li>
                            <li>
                                <a href="component_scrollspy.html"> Scrollspy </a>
                            </li>
                            <li>
                                <a href="component_countdown.html"> Countdown </a>
                            </li>

                            <li>
                                <a href="component_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="component_datetime_picker.html"> Date &amp; Time Picker </a>
                            </li>
                            <li>
                                <a href="component_lightbox.html"> LightBox </a>
                            </li>
                            <li>
                                <a href="component_color_picker.html"> Color Picker </a>
                            </li>
                            <li>
                                <a href="#component-media" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Media <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-media" data-parent="#components"> 
                                    <li>
                                        <a href="component_video_player.html"> Video Player </a>
                                    </li>
                                    <li>
                                        <a href="component_audio_player.html"> Audio Player </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="component_clipboard.html"> Clipboard </a>
                            </li>
                            <li>
                                <a href="component_typeahead.html"> Typeahead </a>
                            </li>
                            <li>
                                <a href="#component-search" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Search <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-search" data-parent="#components"> 
                                    <li>
                                        <a href="component_search_multiple.html"> Multiple </a>
                                    </li>
                                    <li>
                                        <a href="component_search_web.html"> Web </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#component-animation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Animations <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-animation" data-parent="#components"> 
                                    <li>
                                        <a href="component_animation_buttons.html"> Buttons </a>
                                    </li>
                                    <li>
                                        <a href="component_animation_css.html"> CSS </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#component-img-crop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Image Cropping <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-img-crop" data-parent="#components"> 
                                    <li>
                                        <a href="component_image_cropping_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="component_image_cropping_advanced.html"> Advanced </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy-line"></i>
                                <span>Forms</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                            <li>
                                <a href="#forms-bootstrap" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Bootstrap <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-bootstrap" data-parent="#forms"> 
                                    <li>
                                        <a href="form_bootstrap_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_bootstrap_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms-input-group" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Input Group <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-input-group" data-parent="#forms"> 
                                    <li>
                                        <a href="form_input_group_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_input_group_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="form_bootstrap_material.html"> Material </a>
                            </li>
                            <li>
                                <a href="#forms-layout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Layouts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-layout" data-parent="#forms"> 
                                    <li>
                                        <a href="form_layouts.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_layouts_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms-validation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Validation <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-validation" data-parent="#forms"> 
                                    <li>
                                        <a href="form_validation.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="form_jqvalidation.html"> jQuery </a>
                                    </li>
                                    <li>
                                        <a href="form_validation_material.html"> Custom </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="form_input_mask.html"> Input Mask </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                            </li>
                            <li>
                                <a href="form_select2.html"> Select2 </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="form_multiselect.html"> Multi Select </a>
                            </li>
                            <li>
                                <a href="form_maxlength.html"> Maxlength </a>
                            </li>
                            <li>
                                <a href="form_repeater.html"> Repeater </a>
                            </li>                           
                            <li>
                                <a href="form_checkbox_radio.html"> Checkbox and Radio </a>
                            </li>

                            <li>
                                <a href="#forms-wizard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Wizards <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-wizard" data-parent="#forms"> 
                                    <li>
                                        <a href="form_bs_wizard.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="form_wizard.html"> jQuery Steps </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="form_fileupload.html"> File Upload </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-layers"></i>
                                <span>Elements</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="element_steps.html"> Steps </a>
                            </li>
                            <li>
                                <a href="element_list.html"> List </a>
                            </li>
                            <li>
                                <a href="element_ribbon.html"> Ribbons </a>
                            </li>
                            <li>
                                <a href="element_overlays.html"> Overlays </a>
                            </li>
                            <li>
                                <a href="element_weatherapp.html"> Weather Apps </a>
                            </li>
                            <li>
                                <a href="element_testimonial.html"> Testimonials </a>
                            </li>
                            <li>
                                <a href="element_team.html"> Team </a>
                            </li>
                            <li>
                                <a href="element_contacts.html"> Contacts </a>
                            </li>
                            <li>
                                <a href="element_blog.html"> Blog Elements </a>
                            </li>
                            <li>
                                <a href="element_pricing_table.html"> Pricing Tables </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#editors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-edit-2"></i>
                                <span>Editors</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="editors" data-parent="#accordionExample">
                            <li>
                                <a href="editor_tinymce.html"> Tinymce </a>
                            </li>
                            <li>
                                <a href="editor_quill.html"> Quill </a>
                            </li>
                            <li>
                                <a href="editor_markdown.html"> Markdown </a>
                            </li>
                            <li>
                                <a href="editor_contenttools.html"> ContentTools </a>
                            </li>
                            <li>
                                <a href="editor_summernote.html"> Summernote </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-table"></i>
                                <span>Tables</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#accordionExample">
                            <li>
                                <a href="table_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="table_tablesaw.html"> Tablesaw</a>
                            </li>
                            <li>
                                <a href="table_sticky_table_header.html"> Sticky Headers</a>
                            </li>
                            <li>
                                <a href="#tables-editable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Editable <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="tables-editable" data-parent="#tables"> 
                                    <li>
                                        <a href="table_jq_spreadsheet.html"> Spreadsheet </a>
                                    </li>
                                    <li>
                                        <a href="table_jquery_tabledit.html"> TableEdit </a>
                                    </li>
                                    <li>
                                        <a href="table_editablegrid.html"> Editable Grid </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#tables-data-tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="tables-data-tables" data-parent="#tables"> 
                                    <li>
                                        <a href="table_dt_zero_configuration.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_alternative_pagination.html"> Alternative Pagination</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_custom.html"> Custom </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_scrollable.html"> Scrollable </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_range_search.html"> Range Search </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_html5.html"> HTML5 Export </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-bar-chart-2"></i>
                                <span>Charts</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="charts" data-parent="#accordionExample">
                            <li>
                                <a href="#chart-amcharts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> amCharts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-amcharts" data-parent="#charts"> 
                                    <li>
                                        <a href="am_column_and_barchart.html"> Column &amp; Bar </a>
                                    </li>
                                    <li>
                                        <a href="am_line_and_areachart.html"> Line &amp; Area </a>
                                    </li>
                                    <li>
                                        <a href="am_pie_and_donutchart.html"> Pie &amp; Donut </a>
                                    </li>
                                    <li>
                                        <a href="am_gauge_and_otherchart.html"> Gauges  &amp; Other </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#chart-c3chart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> C3 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-c3chart" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_c3_chart.html"> Simple</a>
                                    </li>
                                    <li>
                                        <a href="charts_c3_api.html"> Api </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts_cssplot.html"> CSS Plot </a>
                            </li>
                            <li>
                                <a href="charts_morris.html"> Morris </a>
                            </li>
                            <li>
                                <a href="charts_flowchart.html"> Flowcharts </a>
                            </li>
                            <li>
                                <a href="charts_jQuery_sparklines.html"> jQuery Sparklines </a>
                            </li>
                            <li>
                                <a href="#chart-echart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> eCharts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-echart" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_echart_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_candlestick.html"> Candlestick </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_funnel_radar.html"> Funnel & Radar </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_scatters.html"> Scatter </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#chart-chartist" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Chartist <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-chartist" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_chartist_bar.html"> Bar </a>
                                    </li>
                                    <li>
                                        <a href="charts_chartist_line.html"> Line &amp; Area </a>
                                    </li>
                                    <li>
                                        <a href="charts_chartist_pie.html"> Pie </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts_google.html"> Google </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Maps</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps" data-parent="#accordionExample">
                            <li>
                                <a href="#map-googleMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Google <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-googleMaps" data-parent="#maps"> 
                                    <li>
                                        <a href="map_google_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="map_google_event.html"> Event </a>
                                    </li>
                                    <li>
                                        <a href="map_google_controls_interaction.html"> Controls and Interaction </a>
                                    </li>
                                    <li>
                                        <a href="map_google_styles.html"> Styles </a>
                                    </li>
                                    <li>
                                        <a href="map_google_other.html"> Other </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#map-jqMapael" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jquery Mapael <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-jqMapael" data-parent="#maps"> 
                                    <li>
                                        <a href="map_jquerymapael_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="map_jquerymapael_advanced.html"> Advanced </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="map_jhere.html"> jhere </a>
                            </li>
                            <li>
                                <a href="map_open_layers.html"> OpenLayers </a>
                            </li>
                            <li>
                                <a href="#map-vMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Vector Maps <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-vMaps" data-parent="#maps"> 
                                    <li>
                                        <a href="map_amvector.html"> amVector</a>
                                    </li>
                                    <li>
                                        <a href="map_jvector.html"> jVector</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#mailing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-mail-19"></i>
                                <span>Apps</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="mailing" data-parent="#accordionExample">
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="apps_mailbox.html"> Mailbox </a>
                            </li>
                            <li>
                                <a href="apps_mailbox_with_chat.html"> Mailbox With Chat </a>
                            </li>
                            <li>
                                <a href="apps_newsletter.html"> Newsletter </a>
                            </li>
                            <li>
                                <a href="apps_scheduler.html"> Scheduler </a>
                            </li>
                            <li>
                                <a href="#apps-calendars" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Calendar <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="apps-calendars" data-parent="#apps-calendars"> 
                                    <li>
                                        <a href="apps_basic_calendar.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="apps_full_calendar.html"> Full Calendar </a>
                                    </li>
                                    <li>
                                        <a href="apps_drag_n_drop_calendar.html"> Drag n Drop </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#modules" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-5"></i>
                                <span>Modules</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="modules" data-parent="#accordionExample">
                            <li>
                                <a href="modules_widgets.html"> Widgets </a>
                            </li>
                            <li>
                                <a href="modules_table_and_event.html"> Tables &amp; Events </a>
                            </li>
                            <li>
                                <a href="modules_charts_and_maps.html"> Charts &amp; Maps </a>
                            </li>
                            <li>
                                <a href="modules_weather_and_calendar.html"> Weather &amp; Calendar </a>
                            </li>
                            <li>
                                <a href="modules_cards.html"> Cards </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>Users</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                            <li>
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html"> Account Settings </a>
                            </li>

                            <li>
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#users"> 
                                    <li>
                                        <a href="user_login_1.html"> Login 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_login_2.html"> Login 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_login_3.html"> Login 3 </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#users"> 
                                    <li>
                                        <a href="user_register_1.html"> Register 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_register_2.html"> Register 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_register_3.html"> Register 3 </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#users"> 
                                    <li>
                                        <a href="user_pass_recovery_1.html"> Password Recovery 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_pass_recovery_2.html"> Password Recovery 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_pass_recovery_3.html"> Password Recovery 3 </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#users"> 
                                    <li>
                                        <a href="user_lockscreen_1.html"> Lockscreen 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_lockscreen_2.html"> Lockscreen 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_lockscreen_3.html"> Lockscreen 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy"></i>
                                <span>Pages</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                            <li>
                                <a href="pages_blank_page.html"> Blank Page</a>
                            </li>
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_blog.html"> Blog </a>
                            </li>                            
                            <li>
                                <a href="pages_privacy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_cookie_consent.html"> Cookie Consent </a>
                            </li>
                            <li>
                                <a href="pages_landing_page.html" target="_blank"> Landing Page </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html"> Coming Soon </a>
                            </li>

                            <li>
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages"> 
                                    <li>
                                        <a href="pages_error404.html"> 404 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error404-2.html"> 404 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html"> 500 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500-2.html"> 500 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html"> 503 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503-2.html"> 503 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenence.html"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#dragndrop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-redo-1"></i>
                                <span>Drag and Drop</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dragndrop" data-parent="#accordionExample">
                            <li>
                                <a href="dragndrop_gridstack.html"> Grid Stack</a>
                            </li>
                            <li>
                                <a href="dragndrop_dragula.html"> Dragula</a>
                            </li>
                            <li>
                                <a href="#dragndrop-jqueryui" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jQuery UI <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="dragndrop-jqueryui" data-parent="#dragndrop"> 
                                    <li>
                                        <a href="dragndrop_ui_product_cart.html"> Shopping Cart </a>
                                    </li>
                                    <li>
                                        <a href="dragndrop_scrumboard.html"> Scrum Task Board</a>
                                    </li>                                    
                                    <li>
                                        <a href="dragndrop_scroll_bars.html"> Scrollbar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#menulevel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-menu-4"></i>
                                <span>Menu Level</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="menulevel" data-parent="#accordionExample">
                            
                            <li>
                                <a href="javascript:void(0);"> Sample Link 1 </a>
                            </li>
                            <li>
                                <a href="#menulevel-sample-link1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Sub Menu 2 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="menulevel-sample-link1" data-parent="#menulevel"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 2 </a>
                                    </li>                                    
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#menulevel-sample-link2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Sub Menu 3 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="menulevel-sample-link2" data-parent="#menulevel"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 2 </a>
                                    </li>                                    
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sample Link 2 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sample Link 3 </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Flaticon</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">UI Kit</a></li>
                                <li><a href="#">Font Icons</a> </li>
                                <li class="active"><a href="#">Flaticon</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area bx-top-6">
                                <div class="icon-section">
                                    <div class="row">
                                        <div class="col-lg-12  mb-5">
                                            <h4>Theme Icons</h4>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-menu-dot"></span><span class="icon-name"> flaticon-circle-menu-dot</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stop"></span><span class="icon-name"> flaticon-stop</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-cross"></span><span class="icon-name"> flaticon-circle-cross</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log"></span><span class="icon-name"> flaticon-log</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-double-tick"></span><span class="icon-name"> flaticon-circle-double-tick</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-tree"></span><span class="icon-name"> flaticon-tree</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-fill-car"></span><span class="icon-name"> flaticon-fill-car</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-building"></span><span class="icon-name"> flaticon-building</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-fill-arrow"></span><span class="icon-name"> flaticon-left-fill-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bath"></span><span class="icon-name"> flaticon-bath</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-single-circle-tick"></span><span class="icon-name"> flaticon-single-circle-tick</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reload-bold"></span><span class="icon-name"> flaticon-reload-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-bold"></span><span class="icon-name"> flaticon-circle-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-single-tick"></span><span class="icon-name"> flaticon-single-tick</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-right-menu"></span><span class="icon-name"> flaticon-right-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pause"></span><span class="icon-name"> flaticon-pause</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-building-1"></span><span class="icon-name"> flaticon-building-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-dot-menu"></span><span class="icon-name"> flaticon-left-dot-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-square-cross"></span><span class="icon-name"> flaticon-square-cross</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-fill-area"></span><span class="icon-name"> flaticon-fill-area</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-refresh-bold"></span><span class="icon-name"> flaticon-refresh-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-play-bold"></span><span class="icon-name"> flaticon-play-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-plus"></span><span class="icon-name"> flaticon-circle-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-square-menu"></span><span class="icon-name"> flaticon-square-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-three-line-menu"></span><span class="icon-name"> flaticon-three-line-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-menu"></span><span class="icon-name"> flaticon-left-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-off"></span><span class="icon-name"> flaticon-off</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-bold"></span><span class="icon-name"> flaticon-menu-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pause-bold"></span><span class="icon-name"> flaticon-pause-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-play-fill"></span><span class="icon-name"> flaticon-play-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-paly-bold"></span><span class="icon-name"> flaticon-paly-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-next2"></span><span class="icon-name"> flaticon-next2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-fill"></span><span class="icon-name"> flaticon-cart-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-link-line"></span><span class="icon-name"> flaticon-link-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bed-fill"></span><span class="icon-name"> flaticon-bed-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-center-menu"></span><span class="icon-name"> flaticon-center-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stop-fill"></span><span class="icon-name"> flaticon-stop-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-square-tick"></span><span class="icon-name"> flaticon-square-tick</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell"></span><span class="icon-name"> flaticon-bell</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-danger-2"></span><span class="icon-name"> flaticon-danger-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mailbox"></span><span class="icon-name"> flaticon-mailbox</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-view"></span><span class="icon-name"> flaticon-view</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-danger-3"></span><span class="icon-name"> flaticon-danger-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-send-arrow"></span><span class="icon-name"> flaticon-send-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete"></span><span class="icon-name"> flaticon-delete</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-outline"></span><span class="icon-name"> flaticon-star-outline</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-3"></span><span class="icon-name"> flaticon-bell-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-line-2"></span><span class="icon-name"> flaticon-mail-line-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-9"></span><span class="icon-name"> flaticon-bell-9</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-disk"></span><span class="icon-name"> flaticon-disk</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-arrow"></span><span class="icon-name"> flaticon-shuffle-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-logout-arrow"></span><span class="icon-name"> flaticon-logout-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-dot"></span><span class="icon-name"> flaticon-shuffle-dot</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-1"></span><span class="icon-name"> flaticon-delete-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-fill"></span><span class="icon-name"> flaticon-star-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">         
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-line"></span><span class="icon-name"> flaticon-shuffle-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-send-fill"></span><span class="icon-name"> flaticon-send-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-danger-line"></span><span class="icon-name"> flaticon-danger-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-2"></span><span class="icon-name"> flaticon-delete-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-double-chat"></span><span class="icon-name"> flaticon-double-chat</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-edit"></span><span class="icon-name"> flaticon-mail-edit</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-10"></span><span class="icon-name"> flaticon-bell-10</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-key-2"></span><span class="icon-name"> flaticon-key-2</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">        
                                            <div class="icon-container">
                                                <span class="flaticon-mail-open"></span><span class="icon-name"> flaticon-mail-open</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reload-line"></span><span class="icon-name"> flaticon-reload-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dobble-down-arrow"></span><span class="icon-name"> flaticon-dobble-down-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bitcoin-circle"></span><span class="icon-name"> flaticon-bitcoin-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cancel-line-circle"></span><span class="icon-name"> flaticon-cancel-line-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reload-dash"></span><span class="icon-name"> flaticon-reload-dash</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-leaf"></span><span class="icon-name"> flaticon-leaf</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-refresh-circle"></span><span class="icon-name"> flaticon-refresh-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pie-line-chart"></span><span class="icon-name"> flaticon-pie-line-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-crm-screen"></span><span class="icon-name"> flaticon-crm-screen</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-line"></span><span class="icon-name"> flaticon-chat-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-file-upload-line"></span><span class="icon-name"> flaticon-file-upload-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reload-lite"></span><span class="icon-name"> flaticon-reload-lite</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-drink-dash-line"></span><span class="icon-name"> flaticon-drink-dash-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-location-line"></span><span class="icon-name"> flaticon-location-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-refresh-line-arrow"></span><span class="icon-name"> flaticon-refresh-line-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-reload-line"></span><span class="icon-name"> flaticon-circle-reload-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-primary"></span><span class="icon-name"> flaticon-primary</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-location-fill"></span><span class="icon-name"> flaticon-location-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-home-fill"></span><span class="icon-name"> flaticon-home-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bitcoin-logo"></span><span class="icon-name"> flaticon-bitcoin-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-crm-screen-line"></span><span class="icon-name"> flaticon-crm-screen-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-saas"></span><span class="icon-name"> flaticon-saas</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-double-arrow-up"></span><span class="icon-name"> flaticon-double-arrow-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-simple-screen-line"></span><span class="icon-name"> flaticon-simple-screen-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-plus-file"></span><span class="icon-name"> flaticon-plus-file</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-non-veg"></span><span class="icon-name"> flaticon-non-veg</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-map"></span><span class="icon-name"> flaticon-map</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cloud-upload"></span><span class="icon-name"> flaticon-cloud-upload</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-2"></span><span class="icon-name"> flaticon-settings-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-2"></span><span class="icon-name"> flaticon-bell-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-fill"></span><span class="icon-name"> flaticon-mail-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-package"></span><span class="icon-name"> flaticon-package</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-7"></span><span class="icon-name"> flaticon-edit-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-line"></span><span class="icon-name"> flaticon-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-scale"></span><span class="icon-name"> flaticon-scale</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stethoscope-line"></span><span class="icon-name"> flaticon-stethoscope-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-1"></span><span class="icon-name"> flaticon-computer-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-4"></span><span class="icon-name"> flaticon-computer-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-1"></span><span class="icon-name"> flaticon-settings-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat"></span><span class="icon-name"> flaticon-chat</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-redo-1"></span><span class="icon-name"> flaticon-redo-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-bell-11"></span><span class="icon-name"> flaticon-bell-11</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-home-square"></span><span class="icon-name"> flaticon-home-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-1"></span><span class="icon-name"> flaticon-log-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-luggage"></span><span class="icon-name"> flaticon-luggage</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-download"></span><span class="icon-name"> flaticon-download</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-2"></span><span class="icon-name"> flaticon-log-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-file"></span><span class="icon-name"> flaticon-file</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-3"></span><span class="icon-name"> flaticon-log-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-square-plus"></span><span class="icon-name"> flaticon-square-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stats"></span><span class="icon-name"> flaticon-stats</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle"></span><span class="icon-name"> flaticon-shuffle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-line"></span><span class="icon-name"> flaticon-star-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-5"></span><span class="icon-name"> flaticon-computer-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-6"></span><span class="icon-name"> flaticon-computer-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-arrow"></span><span class="icon-name"> flaticon-left-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-checked"></span><span class="icon-name"> flaticon-checked</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-credit-card-1"></span><span class="icon-name"> flaticon-credit-card-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-7"></span><span class="icon-name"> flaticon-computer-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-airplane"></span><span class="icon-name"> flaticon-airplane</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-attachment"></span><span class="icon-name"> flaticon-attachment</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-fill-1"></span><span class="icon-name"> flaticon-star-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-table"></span><span class="icon-name"> flaticon-table</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-refresh-2"></span><span class="icon-name"> flaticon-refresh-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bar-chart-2"></span><span class="icon-name"> flaticon-bar-chart-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-search-1"></span><span class="icon-name"> flaticon-search-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-full-screen"></span><span class="icon-name"> flaticon-full-screen</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calendar"></span><span class="icon-name"> flaticon-calendar</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-controller"></span><span class="icon-name"> flaticon-controller</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-heart-1"></span><span class="icon-name"> flaticon-heart-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-8"></span><span class="icon-name"> flaticon-computer-8</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-1"></span><span class="icon-name"> flaticon-email-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-hourglass"></span><span class="icon-name"> flaticon-hourglass</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-search"></span><span class="icon-name"> flaticon-search</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-view-1"></span><span class="icon-name"> flaticon-view-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-layers"></span><span class="icon-name"> flaticon-layers</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit"></span><span class="icon-name"> flaticon-edit</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-13"></span><span class="icon-name"> flaticon-bell-13</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cup"></span><span class="icon-name"> flaticon-cup</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-line-dot"></span><span class="icon-name"> flaticon-menu-line-dot</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-line"></span><span class="icon-name"> flaticon-share-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-1"></span><span class="icon-name"> flaticon-bell-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-controller-1"></span><span class="icon-name"> flaticon-controller-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-4"></span><span class="icon-name"> flaticon-log-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-note-1"></span><span class="icon-name"> flaticon-note-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-crop"></span><span class="icon-name"> flaticon-crop</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bar-chart"></span><span class="icon-name"> flaticon-bar-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-2"></span><span class="icon-name"> flaticon-edit-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-3"></span><span class="icon-name"> flaticon-edit-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-4"></span><span class="icon-name"> flaticon-email-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-3"></span><span class="icon-name"> flaticon-email-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-3"></span><span class="icon-name"> flaticon-computer-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-location"></span><span class="icon-name"> flaticon-location</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calculator"></span><span class="icon-name"> flaticon-calculator</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-4"></span><span class="icon-name"> flaticon-delete-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear"></span><span class="icon-name"> flaticon-gear</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cutlery-1"></span><span class="icon-name"> flaticon-cutlery-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-down-arrow"></span><span class="icon-name"> flaticon-down-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-9"></span><span class="icon-name"> flaticon-computer-9</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-14"></span><span class="icon-name"> flaticon-bell-14</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-logistics"></span><span class="icon-name"> flaticon-logistics</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-3d-cube"></span><span class="icon-name"> flaticon-3d-cube</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-note-2"></span><span class="icon-name"> flaticon-note-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-minimize"></span><span class="icon-name"> flaticon-minimize</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-laptop"></span><span class="icon-name"> flaticon-laptop</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-bag"></span><span class="icon-name"> flaticon-cart-bag</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer"></span><span class="icon-name"> flaticon-computer</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-10"></span><span class="icon-name"> flaticon-computer-10</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-5"></span><span class="icon-name"> flaticon-email-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock-3"></span><span class="icon-name"> flaticon-lock-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-crop-1"></span><span class="icon-name"> flaticon-crop-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-dot-fill"></span><span class="icon-name"> flaticon-menu-dot-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-2"></span><span class="icon-name"> flaticon-computer-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-15"></span><span class="icon-name"> flaticon-bell-15</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrows-1"></span><span class="icon-name"> flaticon-arrows-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-warning"></span><span class="icon-name"> flaticon-warning</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-ruler-and-pencil"></span><span class="icon-name"> flaticon-ruler-and-pencil</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-circle-line"></span><span class="icon-name"> flaticon-menu-circle-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-flip"></span><span class="icon-name"> flaticon-flip</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-5"></span><span class="icon-name"> flaticon-delete-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-2"></span><span class="icon-name"> flaticon-shuffle-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-home-line"></span><span class="icon-name"> flaticon-home-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calendar-1"></span><span class="icon-name"> flaticon-calendar-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-1"></span><span class="icon-name"> flaticon-edit-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chart-2"></span><span class="icon-name"> flaticon-chart-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-elements"></span><span class="icon-name"> flaticon-elements</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-danger"></span><span class="icon-name"> flaticon-danger</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrows-8"></span><span class="icon-name"> flaticon-arrows-8</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-1"></span><span class="icon-name"> flaticon-shuffle-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-5"></span><span class="icon-name"> flaticon-log-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-bubble"></span><span class="icon-name"> flaticon-chat-bubble</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-table-1"></span><span class="icon-name"> flaticon-table-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-group"></span><span class="icon-name"> flaticon-user-group</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-11"></span><span class="icon-name"> flaticon-computer-11</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email"></span><span class="icon-name"> flaticon-email</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-car"></span><span class="icon-name"> flaticon-car</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-6"></span><span class="icon-name"> flaticon-log-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-circle-menu-line"></span><span class="icon-name"> flaticon-circle-menu-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-16"></span><span class="icon-name"> flaticon-bell-16</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-medical-box"></span><span class="icon-name"> flaticon-medical-box</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-copy"></span><span class="icon-name"> flaticon-copy</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-4"></span><span class="icon-name"> flaticon-edit-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-1"></span><span class="icon-name"> flaticon-cart-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-power-off"></span><span class="icon-name"> flaticon-power-off</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chart"></span><span class="icon-name"> flaticon-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reload-1"></span><span class="icon-name"> flaticon-reload-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dot-menu"></span><span class="icon-name"> flaticon-dot-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-credit-card"></span><span class="icon-name"> flaticon-credit-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dot-menu-line"></span><span class="icon-name"> flaticon-dot-menu-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-time"></span><span class="icon-name"> flaticon-time</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-5"></span><span class="icon-name"> flaticon-edit-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chart-3"></span><span class="icon-name"> flaticon-chart-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notes-2"></span><span class="icon-name"> flaticon-notes-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-right-arrow"></span><span class="icon-name"> flaticon-right-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-map-1"></span><span class="icon-name"> flaticon-map-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-expand"></span><span class="icon-name"> flaticon-expand</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-list"></span><span class="icon-name"> flaticon-menu-list</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-download-1"></span><span class="icon-name"> flaticon-download-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-2"></span><span class="icon-name"> flaticon-mail-2</span>
                                            </div> 
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bed"></span><span class="icon-name"> flaticon-bed</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-profits"></span><span class="icon-name"> flaticon-profits</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-drugs"></span><span class="icon-name"> flaticon-drugs</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-medicine"></span><span class="icon-name"> flaticon-medicine</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-google-plus-bold"></span><span class="icon-name"> flaticon-google-plus-bold</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notes"></span><span class="icon-name"> flaticon-notes</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bank-safe-box"></span><span class="icon-name"> flaticon-bank-safe-box</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shooting-star"></span><span class="icon-name"> flaticon-shooting-star</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-moon"></span><span class="icon-name"> flaticon-moon</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-youtube-logo"></span><span class="icon-name"> flaticon-youtube-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-paypal-outlined-logo"></span><span class="icon-name"> flaticon-paypal-outlined-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-target"></span><span class="icon-name"> flaticon-target</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wind"></span><span class="icon-name"> flaticon-wind</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-check"></span><span class="icon-name"> flaticon-check</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bed-1"></span><span class="icon-name"> flaticon-bed-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cloud-1"></span><span class="icon-name"> flaticon-cloud-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-instagram-logo"></span><span class="icon-name"> flaticon-instagram-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-moon-1"></span><span class="icon-name"> flaticon-moon-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pinterest-logo"></span><span class="icon-name"> flaticon-pinterest-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-instagram-social-outlined-logo"></span><span class="icon-name"> flaticon-instagram-social-outlined-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shower"></span><span class="icon-name"> flaticon-shower</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-2"></span><span class="icon-name"> flaticon-chat-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-money"></span><span class="icon-name"> flaticon-money</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-facebook-line"></span><span class="icon-name"> flaticon-facebook-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-note-like"></span><span class="icon-name"> flaticon-note-like</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-rainbow"></span><span class="icon-name"> flaticon-rainbow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-linkedin-line"></span><span class="icon-name"> flaticon-linkedin-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-twitter-logo"></span><span class="icon-name"> flaticon-twitter-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-of-dots"></span><span class="icon-name"> flaticon-spinner-of-dots</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-youtube-play-button-line"></span><span class="icon-name"> flaticon-youtube-play-button-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-weather-4"></span><span class="icon-name"> flaticon-weather-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-summer"></span><span class="icon-name"> flaticon-summer</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-17"></span><span class="icon-name"> flaticon-bell-17</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cloud"></span><span class="icon-name"> flaticon-cloud</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-display"></span><span class="icon-name"> flaticon-display</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notes-3"></span><span class="icon-name"> flaticon-notes-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-1"></span><span class="icon-name"> flaticon-arrow-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notes-1"></span><span class="icon-name"> flaticon-notes-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-note-copy"></span><span class="icon-name"> flaticon-note-copy</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-bag-1"></span><span class="icon-name"> flaticon-cart-bag-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-setting-line"></span><span class="icon-name"> flaticon-setting-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-line-chart"></span><span class="icon-name"> flaticon-line-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sort-down"></span><span class="icon-name"> flaticon-sort-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sun"></span><span class="icon-name"> flaticon-sun</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-earth-globe"></span><span class="icon-name"> flaticon-earth-globe</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-search-chart"></span><span class="icon-name"> flaticon-search-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-tree-1"></span><span class="icon-name"> flaticon-tree-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dollar-coin"></span><span class="icon-name"> flaticon-dollar-coin</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-fill-1"></span><span class="icon-name"> flaticon-cart-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-humidity"></span><span class="icon-name"> flaticon-humidity</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-storm"></span><span class="icon-name"> flaticon-storm</span>
                                            </div>      
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-1"></span><span class="icon-name"> flaticon-user-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-3"></span><span class="icon-name"> flaticon-settings-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wind-2"></span><span class="icon-name"> flaticon-wind-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dribbble-line"></span><span class="icon-name"> flaticon-dribbble-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-line-1"></span><span class="icon-name"> flaticon-share-line-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-exchange"></span><span class="icon-name"> flaticon-exchange</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-android-line"></span><span class="icon-name"> flaticon-android-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-windy"></span><span class="icon-name"> flaticon-windy</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-video-camera"></span><span class="icon-name"> flaticon-video-camera</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-weather-3"></span><span class="icon-name"> flaticon-weather-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-idea-bulb"></span><span class="icon-name"> flaticon-idea-bulb</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-twitter-line"></span><span class="icon-name"> flaticon-twitter-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-telephone"></span><span class="icon-name"> flaticon-telephone</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-weather"></span><span class="icon-name"> flaticon-weather</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-google-plus-line"></span><span class="icon-name"> flaticon-google-plus-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-display-1"></span><span class="icon-name"> flaticon-display-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pinterest-line"></span><span class="icon-name"> flaticon-pinterest-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-weather-5"></span><span class="icon-name"> flaticon-weather-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-speedometer-tool"></span><span class="icon-name"> flaticon-speedometer-tool</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-night"></span><span class="icon-name"> flaticon-night</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-circle-line"></span><span class="icon-name"> flaticon-star-circle-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock-4"></span><span class="icon-name"> flaticon-lock-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-switch"></span><span class="icon-name"> flaticon-switch</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-users"></span><span class="icon-name"> flaticon-users</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">  
                                            <div class="icon-container">
                                                <span class="flaticon-user-group-1"></span><span class="icon-name"> flaticon-user-group-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-1"></span><span class="icon-name"> flaticon-chat-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-airplane-1"></span><span class="icon-name"> flaticon-airplane-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sky-rain"></span><span class="icon-name"> flaticon-sky-rain</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-bag-2"></span><span class="icon-name"> flaticon-cart-bag-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-avatar"></span><span class="icon-name"> flaticon-avatar</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-home-line-1"></span><span class="icon-name"> flaticon-home-line-1</span>
                                            </div>
                                        </div>


                                         <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-link"></span><span class="icon-name"> flaticon-link</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-behance-logo"></span><span class="icon-name"> flaticon-behance-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-nurse"></span><span class="icon-name"> flaticon-nurse</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-storm-1"></span><span class="icon-name"> flaticon-storm-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-healthy"></span><span class="icon-name"> flaticon-healthy</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-youtube-play-fill"></span><span class="icon-name"> flaticon-youtube-play-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cloud-2"></span><span class="icon-name"> flaticon-cloud-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-weather-6"></span><span class="icon-name"> flaticon-weather-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-1"></span><span class="icon-name"> flaticon-share-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bar-chart-1"></span><span class="icon-name"> flaticon-bar-chart-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-photo-camera"></span><span class="icon-name"> flaticon-photo-camera</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-send"></span><span class="icon-name"> flaticon-send</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dribbble-bold"></span><span class="icon-name"> flaticon-dribbble-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sky-sun"></span><span class="icon-name"> flaticon-sky-sun</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-placeholder"></span><span class="icon-name"> flaticon-placeholder</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-social"></span><span class="icon-name"> flaticon-social</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-question"></span><span class="icon-name"> flaticon-question</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-3"></span><span class="icon-name"> flaticon-shuffle-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sky-rain-1"></span><span class="icon-name"> flaticon-sky-rain-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-up-arrow-fill"></span><span class="icon-name"> flaticon-up-arrow-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pinterest"></span><span class="icon-name"> flaticon-pinterest</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-time-2"></span><span class="icon-name"> flaticon-time-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-circle"></span><span class="icon-name"> flaticon-spinner-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-robot"></span><span class="icon-name"> flaticon-robot</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-up-chart"></span><span class="icon-name"> flaticon-up-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">  
                                            <div class="icon-container">
                                                <span class="flaticon-paypal-logo"></span><span class="icon-name"> flaticon-paypal-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-resize"></span><span class="icon-name"> flaticon-resize</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">      
                                            <div class="icon-container">
                                                <span class="flaticon-gift"></span><span class="icon-name"> flaticon-gift</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-target-1"></span><span class="icon-name"> flaticon-target-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-linkedin-logo"></span><span class="icon-name"> flaticon-linkedin-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-commerce"></span><span class="icon-name"> flaticon-commerce</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chart-line"></span><span class="icon-name"> flaticon-chart-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-3"></span><span class="icon-name"> flaticon-share-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-bitcoin-chart"></span><span class="icon-name"> flaticon-bitcoin-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear-2"></span><span class="icon-name"> flaticon-gear-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-night-1"></span><span class="icon-name"> flaticon-night-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-desk-chair"></span><span class="icon-name"> flaticon-desk-chair</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-business"></span><span class="icon-name"> flaticon-business</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-crescent-moon-1"></span><span class="icon-name"> flaticon-crescent-moon-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-apple-logotype"></span><span class="icon-name"> flaticon-apple-logotype</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pencil-1"></span><span class="icon-name"> flaticon-pencil-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-downloading"></span><span class="icon-name"> flaticon-downloading</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lightning-1"></span><span class="icon-name"> flaticon-lightning-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-facebook-logo"></span><span class="icon-name"> flaticon-facebook-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-circle"></span><span class="icon-name"> flaticon-user-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-weather-2"></span><span class="icon-name"> flaticon-weather-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-2"></span><span class="icon-name"> flaticon-share-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-moon-2"></span><span class="icon-name"> flaticon-moon-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-upload-file"></span><span class="icon-name"> flaticon-upload-file</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-apple-line"></span><span class="icon-name"> flaticon-apple-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lightning"></span><span class="icon-name"> flaticon-lightning</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-waning-moon"></span><span class="icon-name"> flaticon-waning-moon</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-behance-line"></span><span class="icon-name"> flaticon-behance-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-crescent-moon"></span><span class="icon-name"> flaticon-crescent-moon</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-tag"></span><span class="icon-name"> flaticon-tag</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-networking"></span><span class="icon-name"> flaticon-networking</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calendar-2"></span><span class="icon-name"> flaticon-calendar-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-medical-history"></span><span class="icon-name"> flaticon-medical-history</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-rain"></span><span class="icon-name"> flaticon-rain</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notepad"></span><span class="icon-name"> flaticon-notepad</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stopwatch-outlined-sportive-tool-symbol"></span><span class="icon-name"> flaticon-stopwatch-outlined-sportive-tool-symbol</span>
                                            </div>
                                        </div> -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-humidity-1"></span><span class="icon-name"> flaticon-humidity-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock-5"></span><span class="icon-name"> flaticon-lock-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-waning-moon-1"></span><span class="icon-name"> flaticon-waning-moon-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-android-logo"></span><span class="icon-name"> flaticon-android-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-roomkey-2"></span><span class="icon-name"> flaticon-roomkey-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-car-1"></span><span class="icon-name"> flaticon-car-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mic-1"></span><span class="icon-name"> flaticon-mic-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wind2"></span><span class="icon-name"> flaticon-wind2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wind-1"></span><span class="icon-name"> flaticon-wind-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wink"></span><span class="icon-name"> flaticon-wink</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-confused-fill"></span><span class="icon-name"> flaticon-confused-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dead-fill"></span><span class="icon-name"> flaticon-dead-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-laughing-fill"></span><span class="icon-name"> flaticon-laughing-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-neutral-fill"></span><span class="icon-name"> flaticon-neutral-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-angry-fill"></span><span class="icon-name"> flaticon-angry-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-smile-fill"></span><span class="icon-name"> flaticon-smile-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sad-fill"></span><span class="icon-name"> flaticon-sad-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-angry-1"></span><span class="icon-name"> flaticon-angry-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-happy"></span><span class="icon-name"> flaticon-happy</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-confused"></span><span class="icon-name"> flaticon-confused</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-angry"></span><span class="icon-name"> flaticon-angry</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sad-teardrop"></span><span class="icon-name"> flaticon-sad-teardrop</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-happy-smiling"></span><span class="icon-name"> flaticon-happy-smiling</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-smiling"></span><span class="icon-name"> flaticon-smiling</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sad"></span><span class="icon-name"> flaticon-sad</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pdf"></span><span class="icon-name"> flaticon-pdf</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notes-4"></span><span class="icon-name"> flaticon-notes-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-notes-5"></span><span class="icon-name"> flaticon-notes-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit2"></span><span class="icon-name"> flaticon-edit2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stop-watch"></span><span class="icon-name"> flaticon-stop-watch</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-picture"></span><span class="icon-name"> flaticon-picture</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-search-2"></span><span class="icon-name"> flaticon-search-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bulb"></span><span class="icon-name"> flaticon-bulb</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-14"></span><span class="icon-name"> flaticon-mail-14</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-group-2"></span><span class="icon-name"> flaticon-user-group-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-target-2"></span><span class="icon-name"> flaticon-target-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-6"></span><span class="icon-name"> flaticon-edit-6</span>
                                            </div> 
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">         
                                            <div class="icon-container">
                                                <span class="flaticon-notes-6"></span><span class="icon-name"> flaticon-notes-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-send-fill-1"></span><span class="icon-name"> flaticon-send-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wall-clock"></span><span class="icon-name"> flaticon-wall-clock</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-clock-2"></span><span class="icon-name"> flaticon-clock-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-currency"></span><span class="icon-name"> flaticon-currency</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-6"></span><span class="icon-name"> flaticon-delete-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-like-3"></span><span class="icon-name"> flaticon-like-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-like-2"></span><span class="icon-name"> flaticon-like-2</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">        
                                            <div class="icon-container">
                                                <span class="flaticon-like-1"></span><span class="icon-name"> flaticon-like-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-right-arrow-3"></span><span class="icon-name"> flaticon-right-arrow-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-arrows"></span><span class="icon-name"> flaticon-left-arrows</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-back-arrow"></span><span class="icon-name"> flaticon-back-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cancel-2"></span><span class="icon-name"> flaticon-cancel-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-checked-2"></span><span class="icon-name"> flaticon-checked-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-plus-2"></span><span class="icon-name"> flaticon-plus-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-right-arrow-2"></span><span class="icon-name"> flaticon-right-arrow-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-down-arrow-1"></span><span class="icon-name"> flaticon-down-arrow-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-up-arrow-2"></span><span class="icon-name"> flaticon-up-arrow-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-add-circle-outline"></span><span class="icon-name"> flaticon-add-circle-outline</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-minus-1"></span><span class="icon-name"> flaticon-minus-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-minus-2"></span><span class="icon-name"> flaticon-minus-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-minus-fill"></span><span class="icon-name"> flaticon-minus-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-twitter-letter-logo"></span><span class="icon-name"> flaticon-twitter-letter-logo</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-download-2"></span><span class="icon-name"> flaticon-download-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bill"></span><span class="icon-name"> flaticon-bill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-12"></span><span class="icon-name"> flaticon-user-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-18"></span><span class="icon-name"> flaticon-bell-18</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-clock-1"></span><span class="icon-name"> flaticon-clock-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-view-2"></span><span class="icon-name"> flaticon-view-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-view-3"></span><span class="icon-name"> flaticon-view-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stopwatch-1"></span><span class="icon-name"> flaticon-stopwatch-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-print"></span><span class="icon-name"> flaticon-print</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-copy-document"></span><span class="icon-name"> flaticon-copy-document</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-copy-line"></span><span class="icon-name"> flaticon-copy-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-back-arrow-1"></span><span class="icon-name"> flaticon-back-arrow-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cancel-12"></span><span class="icon-name"> flaticon-cancel-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-plus-1"></span><span class="icon-name"> flaticon-plus-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-previous"></span><span class="icon-name"> flaticon-previous</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-next"></span><span class="icon-name"> flaticon-next</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-profits-1"></span><span class="icon-name"> flaticon-profits-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-next-arrow"></span><span class="icon-name"> flaticon-next-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-send-line-1"></span><span class="icon-name"> flaticon-send-line-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-right-arrow-12"></span><span class="icon-name"> flaticon-right-arrow-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-document-3"></span><span class="icon-name"> flaticon-document-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-document-2"></span><span class="icon-name"> flaticon-document-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bounce"></span><span class="icon-name"> flaticon-bounce</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-zoom-in"></span><span class="icon-name"> flaticon-zoom-in</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-zoom-out"></span><span class="icon-name"> flaticon-zoom-out</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-globe"></span><span class="icon-name"> flaticon-globe</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-13"></span><span class="icon-name"> flaticon-mail-13</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-15"></span><span class="icon-name"> flaticon-mail-15</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-16"></span><span class="icon-name"> flaticon-mail-16</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-mail-17"></span><span class="icon-name"> flaticon-mail-17</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-3"></span><span class="icon-name"> flaticon-menu-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-12"></span><span class="icon-name"> flaticon-mail-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-dot-1"></span><span class="icon-name"> flaticon-menu-dot-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-11"></span><span class="icon-name"> flaticon-mail-11</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-10"></span><span class="icon-name"> flaticon-mail-10</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-more-dot-line"></span><span class="icon-name"> flaticon-more-dot-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-18"></span><span class="icon-name"> flaticon-mail-18</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-bubble-fill"></span><span class="icon-name"> flaticon-chat-bubble-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-bubble-line"></span><span class="icon-name"> flaticon-chat-bubble-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-3"></span><span class="icon-name"> flaticon-chat-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-1"></span><span class="icon-name"> flaticon-menu-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-line-2"></span><span class="icon-name"> flaticon-menu-line-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-19"></span><span class="icon-name"> flaticon-mail-19</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-7"></span><span class="icon-name"> flaticon-mail-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dot-four"></span><span class="icon-name"> flaticon-dot-four</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-6"></span><span class="icon-name"> flaticon-mail-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-5"></span><span class="icon-name"> flaticon-mail-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-line-3"></span><span class="icon-name"> flaticon-menu-line-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-list2"></span><span class="icon-name"> flaticon-list2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-stack"></span><span class="icon-name"> flaticon-stack</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-line-4"></span><span class="icon-name"> flaticon-menu-line-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-fill"></span><span class="icon-name"> flaticon-email-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-fill-1"></span><span class="icon-name"> flaticon-email-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-fill-2"></span><span class="icon-name"> flaticon-email-fill-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dot-three"></span><span class="icon-name"> flaticon-dot-three</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-email-fill-3"></span><span class="icon-name"> flaticon-email-fill-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chart-finance"></span><span class="icon-name"> flaticon-chart-finance</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-refresh-1"></span><span class="icon-name"> flaticon-refresh-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-7"></span><span class="icon-name"> flaticon-bell-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-setting-1"></span><span class="icon-name"> flaticon-setting-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-setting-2"></span><span class="icon-name"> flaticon-setting-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-key-1"></span><span class="icon-name"> flaticon-key-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-setting-3"></span><span class="icon-name"> flaticon-setting-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-6"></span><span class="icon-name"> flaticon-bell-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-20"></span><span class="icon-name"> flaticon-mail-20</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-21"></span><span class="icon-name"> flaticon-mail-21</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-3"></span><span class="icon-name"> flaticon-mail-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-22"></span><span class="icon-name"> flaticon-mail-22</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-5"></span><span class="icon-name"> flaticon-bell-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-1"></span><span class="icon-name"> flaticon-mail-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-profits-2"></span><span class="icon-name"> flaticon-profits-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-loss-arrow"></span><span class="icon-name"> flaticon-loss-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reply"></span><span class="icon-name"> flaticon-reply</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-19"></span><span class="icon-name"> flaticon-bell-19</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-20"></span><span class="icon-name"> flaticon-bell-20</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-like-circle"></span><span class="icon-name"> flaticon-like-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-loading-1"></span><span class="icon-name"> flaticon-loading-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-4"></span><span class="icon-name"> flaticon-bell-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-21"></span><span class="icon-name"> flaticon-bell-21</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-loading"></span><span class="icon-name"> flaticon-loading</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-danger-4"></span><span class="icon-name"> flaticon-danger-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart-2"></span><span class="icon-name"> flaticon-cart-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-5"></span><span class="icon-name"> flaticon-share-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star"></span><span class="icon-name"> flaticon-star</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-11"></span><span class="icon-name"> flaticon-user-11</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-gear-fill"></span><span class="icon-name"> flaticon-gear-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-fill"></span><span class="icon-name"> flaticon-user-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-internet"></span><span class="icon-name"> flaticon-internet</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-folder-fill"></span><span class="icon-name"> flaticon-folder-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-document-fill"></span><span class="icon-name"> flaticon-document-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-phone--fill"></span><span class="icon-name"> flaticon-phone--fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-key-3"></span><span class="icon-name"> flaticon-key-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-23"></span><span class="icon-name"> flaticon-mail-23</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-9"></span><span class="icon-name"> flaticon-user-9</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-12"></span><span class="icon-name"> flaticon-shuffle-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-8"></span><span class="icon-name"> flaticon-user-8</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-7"></span><span class="icon-name"> flaticon-log-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear-5"></span><span class="icon-name"> flaticon-gear-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-7"></span><span class="icon-name"> flaticon-user-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-bold"></span><span class="icon-name"> flaticon-shuffle-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-22"></span><span class="icon-name"> flaticon-bell-22</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-locked"></span><span class="icon-name"> flaticon-locked</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock-2"></span><span class="icon-name"> flaticon-lock-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-6"></span><span class="icon-name"> flaticon-user-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-5"></span><span class="icon-name"> flaticon-user-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-placeholder-fill"></span><span class="icon-name"> flaticon-placeholder-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-unlink"></span><span class="icon-name"> flaticon-unlink</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-folder-fill-1"></span><span class="icon-name"> flaticon-folder-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-time-1"></span><span class="icon-name"> flaticon-time-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-fill-1"></span><span class="icon-name"> flaticon-bell-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear-4"></span><span class="icon-name"> flaticon-gear-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-6"></span><span class="icon-name"> flaticon-share-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-share-4"></span><span class="icon-name"> flaticon-share-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-fill-tick"></span><span class="icon-name"> flaticon-fill-tick</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-close-fill"></span><span class="icon-name"> flaticon-close-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-plus-fill"></span><span class="icon-name"> flaticon-plus-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">          
                                            <div class="icon-container">
                                                <span class="flaticon-folder"></span><span class="icon-name"> flaticon-folder</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock-1"></span><span class="icon-name"> flaticon-lock-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-12"></span><span class="icon-name"> flaticon-bell-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-film"></span><span class="icon-name"> flaticon-film</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-double-check"></span><span class="icon-name"> flaticon-double-check</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sort"></span><span class="icon-name"> flaticon-sort</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-back-1"></span><span class="icon-name"> flaticon-back-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-checked-1"></span><span class="icon-name"> flaticon-checked-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-single-checked"></span><span class="icon-name"> flaticon-single-checked</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cancel-circle"></span><span class="icon-name"> flaticon-cancel-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear-3"></span><span class="icon-name"> flaticon-gear-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-link-2"></span><span class="icon-name"> flaticon-link-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-up-arrow-12"></span><span class="icon-name"> flaticon-up-arrow-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-down-arrow-2"></span><span class="icon-name"> flaticon-down-arrow-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock-6"></span><span class="icon-name"> flaticon-lock-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-4"></span><span class="icon-name"> flaticon-settings-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-log-8"></span><span class="icon-name"> flaticon-log-8</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear-22"></span><span class="icon-name"> flaticon-gear-22</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-warning-fill"></span><span class="icon-name"> flaticon-warning-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gear-1"></span><span class="icon-name"> flaticon-gear-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-24"></span><span class="icon-name"> flaticon-bell-24</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-down-arrow-3"></span><span class="icon-name"> flaticon-down-arrow-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-up-arrow-3"></span><span class="icon-name"> flaticon-up-arrow-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-video-fill"></span><span class="icon-name"> flaticon-video-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-inverted-comma"></span><span class="icon-name"> flaticon-inverted-comma</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-5"></span><span class="icon-name"> flaticon-settings-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-shuffle-4"></span><span class="icon-name"> flaticon-shuffle-4</span>
                                            </div> 
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-6"></span><span class="icon-name"> flaticon-settings-6</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-25"></span><span class="icon-name"> flaticon-bell-25</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chart-line-1"></span><span class="icon-name"> flaticon-chart-line-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-keypad-dot"></span><span class="icon-name"> flaticon-keypad-dot</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-menu-4"></span><span class="icon-name"> flaticon-menu-4</span>
                                            </div>  
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-settings-7"></span><span class="icon-name"> flaticon-settings-7</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-26"></span><span class="icon-name"> flaticon-bell-26</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-left"></span><span class="icon-name"> flaticon-arrow-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-down"></span><span class="icon-name"> flaticon-arrow-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-fill"></span><span class="icon-name"> flaticon-delete-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-inverted-comma-1"></span><span class="icon-name"> flaticon-inverted-comma-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-reload-2"></span><span class="icon-name"> flaticon-reload-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-refresh"></span><span class="icon-name"> flaticon-refresh</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-arrow-12"></span><span class="icon-name"> flaticon-left-arrow-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-fill"></span><span class="icon-name"> flaticon-chat-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-fill"></span><span class="icon-name"> flaticon-edit-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-dots"></span><span class="icon-name"> flaticon-dots</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-fill-1"></span><span class="icon-name"> flaticon-chat-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-fill-2"></span><span class="icon-name"> flaticon-bell-fill-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-forward-arrow"></span><span class="icon-name"> flaticon-forward-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-24"></span><span class="icon-name"> flaticon-mail-24</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cart"></span><span class="icon-name"> flaticon-cart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-lock"></span><span class="icon-name"> flaticon-lock</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-home-fill-1"></span><span class="icon-name"> flaticon-home-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-gift-fill"></span><span class="icon-name"> flaticon-gift-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-up-arrow-fill-1"></span><span class="icon-name"> flaticon-up-arrow-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-right-arrow-fill"></span><span class="icon-name"> flaticon-right-arrow-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-left-arrow-fill"></span><span class="icon-name"> flaticon-left-arrow-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-fill-1"></span><span class="icon-name"> flaticon-mail-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-down-arrow-fill"></span><span class="icon-name"> flaticon-down-arrow-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-error"></span><span class="icon-name"> flaticon-error</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wallet"></span><span class="icon-name"> flaticon-wallet</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-employees"></span><span class="icon-name"> flaticon-employees</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-plane-1"></span><span class="icon-name"> flaticon-plane-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-black-plane"></span><span class="icon-name"> flaticon-black-plane</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-edit-fill-2"></span><span class="icon-name"> flaticon-edit-fill-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-camera"></span><span class="icon-name"> flaticon-camera</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mic"></span><span class="icon-name"> flaticon-mic</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-copy-line-1"></span><span class="icon-name"> flaticon-copy-line-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-plus"></span><span class="icon-name"> flaticon-user-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-user-check"></span><span class="icon-name"> flaticon-user-check</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-quotes-left"></span><span class="icon-name"> flaticon-quotes-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-quotes-right"></span><span class="icon-name"> flaticon-quotes-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-1"></span><span class="icon-name"> flaticon-spinner-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-4"></span><span class="icon-name"> flaticon-spinner-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-3"></span><span class="icon-name"> flaticon-spinner-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-2"></span><span class="icon-name"> flaticon-spinner-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-spinner-5"></span><span class="icon-name"> flaticon-spinner-5</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-empty"></span><span class="icon-name"> flaticon-star-empty</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-half"></span><span class="icon-name"> flaticon-star-half</span>
                                            </div>      
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-star-full"></span><span class="icon-name"> flaticon-star-full</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-volume-medium"></span><span class="icon-name"> flaticon-volume-medium</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-volume-mute"></span><span class="icon-name"> flaticon-volume-mute</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-volume-mute-fill"></span><span class="icon-name"> flaticon-volume-mute-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-volume-increase"></span><span class="icon-name"> flaticon-volume-increase</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-volume-decrease"></span><span class="icon-name"> flaticon-volume-decrease</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-up-left"></span><span class="icon-name"> flaticon-arrow-up-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-up"></span><span class="icon-name"> flaticon-arrow-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-up-right"></span><span class="icon-name"> flaticon-arrow-up-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-right"></span><span class="icon-name"> flaticon-arrow-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-down-right"></span><span class="icon-name"> flaticon-arrow-down-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-down-1"></span><span class="icon-name"> flaticon-arrow-down-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-down-left"></span><span class="icon-name"> flaticon-arrow-down-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-left-1"></span><span class="icon-name"> flaticon-arrow-left-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-text-height"></span><span class="icon-name"> flaticon-text-height</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-text-width"></span><span class="icon-name"> flaticon-text-width</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-font-size"></span><span class="icon-name"> flaticon-font-size</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-clock"></span><span class="icon-name"> flaticon-clock</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-hour"></span><span class="icon-name"> flaticon-hour</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-clock-3"></span><span class="icon-name"> flaticon-clock-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-watch"></span><span class="icon-name"> flaticon-watch</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-25"></span><span class="icon-name"> flaticon-mail-25</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-26"></span><span class="icon-name"> flaticon-mail-26</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-27"></span><span class="icon-name"> flaticon-mail-27</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-28"></span><span class="icon-name"> flaticon-mail-28</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-29"></span><span class="icon-name"> flaticon-mail-29</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-mail-30"></span><span class="icon-name"> flaticon-mail-30</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-27"></span><span class="icon-name"> flaticon-bell-27</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-28"></span><span class="icon-name"> flaticon-bell-28</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-bell-32"></span><span class="icon-name"> flaticon-bell-bell-32</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-30"></span><span class="icon-name"> flaticon-bell-30</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-bell-23"></span><span class="icon-name"> flaticon-bell-23</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-primary-bold"></span><span class="icon-name"> flaticon-primary-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-rubbish-bin"></span><span class="icon-name"> flaticon-rubbish-bin</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-plus"></span><span class="icon-name"> flaticon-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-close"></span><span class="icon-name"> flaticon-close</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-like-12"></span><span class="icon-name"> flaticon-like-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-heart"></span><span class="icon-name"> flaticon-heart</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-next"></span><span class="icon-name"> flaticon-arrow-next</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-back"></span><span class="icon-name"> flaticon-arrow-back</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-down-2"></span><span class="icon-name"> flaticon-arrow-down-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-timer"></span><span class="icon-name"> flaticon-timer</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-arrow-up-2"></span><span class="icon-name"> flaticon-arrow-up-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-microphone"></span><span class="icon-name"> flaticon-microphone</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-microphone-1"></span><span class="icon-name"> flaticon-microphone-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-location-1"></span><span class="icon-name"> flaticon-location-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-can-fill-1"></span><span class="icon-name"> flaticon-delete-can-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-delete-can-fill-2"></span><span class="icon-name"> flaticon-delete-can-fill-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-comment"></span><span class="icon-name"> flaticon-comment</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-chat-line-1"></span><span class="icon-name"> flaticon-chat-line-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-camera-fill"></span><span class="icon-name"> flaticon-camera-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sky-fill"></span><span class="icon-name"> flaticon-sky-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-umbrella"></span><span class="icon-name"> flaticon-umbrella</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sea-waves"></span><span class="icon-name"> flaticon-sea-waves</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-moon-fill"></span><span class="icon-name"> flaticon-moon-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-multi-star-fill"></span><span class="icon-name"> flaticon-multi-star-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-rain-fill"></span><span class="icon-name"> flaticon-rain-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-drop-fill"></span><span class="icon-name"> flaticon-drop-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-cloudy-fill"></span><span class="icon-name"> flaticon-cloudy-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sun-fill"></span><span class="icon-name"> flaticon-sun-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-moon-fill-1"></span><span class="icon-name"> flaticon-moon-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-rain-fill-1"></span><span class="icon-name"> flaticon-rain-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-temperature"></span><span class="icon-name"> flaticon-temperature</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-rain-fill-3"></span><span class="icon-name"> flaticon-rain-fill-3</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-windy-fill"></span><span class="icon-name"> flaticon-windy-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-umbrella-1"></span><span class="icon-name"> flaticon-umbrella-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-windy-fill-1"></span><span class="icon-name"> flaticon-windy-fill-1</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-wind-bold"></span><span class="icon-name"> flaticon-wind-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-light-fill"></span><span class="icon-name"> flaticon-light-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-sunset-fill"></span><span class="icon-name"> flaticon-sunset-fill</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-computer-line"></span><span class="icon-name"> flaticon-computer-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-pencil-line"></span><span class="icon-name"> flaticon-pencil-line</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calendar-bold"></span><span class="icon-name"> flaticon-calendar-bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calendar-12"></span><span class="icon-name"> flaticon-calendar-12</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-calendar-22"></span><span class="icon-name"> flaticon-calendar-22</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-logout"></span><span class="icon-name"> flaticon-logout</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-power-button"></span><span class="icon-name"> flaticon-power-button</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                                            <div class="icon-container">
                                                <span class="flaticon-like-4"></span><span class="icon-name"> flaticon-like-4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Arrows Icons -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <div class="">

            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="close-sidebar">
                        <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="usr-info text-center mb-5">
                        <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid rounded-circle mb-3">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">Linda Nelson</h5>
                            <p class="usr-occupation mb-0 mt-1">Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#feeds-tab" class="nav-link rounded-circle active show">
                            <p class="mb-0">Task</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Friends</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#alerts-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Settings</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div id="feeds-tab" class="tab-pane tab-1 fade show active">
                    
                    <div class="tasks">

                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">
                                
                                <div class="icon">
                                    <i class="flaticon-clock-1"></i>
                                </div>


                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>


                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                        </div>



                        <div class="today mt-5">
                            
                            <div class="d-flex justify-content-between mb-5">
                                
                                <div class="icon">
                                    <i class="flaticon-bell-fill-1"></i>
                                </div>
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                        </div>


                        <div class="task-stats mt-5">
                            
                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <h6><span>Task Statistics</span></h6>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <i class="flaticon-close-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">
                                
                                <div class="row">

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between">
                                            <p>Feature Development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total Progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                                <div class="text-center mt-5 mb-5">
                                    <button class="btn btn-primary btn-rounded mb-5">See all</button>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">

                        <div class="recent">

                            <div class="t-s-header mb-5">

                                <div class="row">
                                    
                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>New Activity</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p>See all</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <ul class="list-inline text-center mb-5">
                                
                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg">
                                    <span class="badge badge-pill badge-new">8</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg">
                                    <span class="badge badge-pill badge-new">5</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg">
                                </li>

                            </ul>


                            <div class="friend-request">
                                
                                <div class="d-flex justify-content-between header mb-5">
                                    
                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-1">Friend request</h6>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="mb-0 mt-2">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>


                        </div>



                        <div class="online mt-5">
                            
                            <div class="t-s-header mb-5">

                                <div class="row">
                                    
                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>Online</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p class="mb-0 mt-0">See all</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3" src="assets/img/120x120.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Irene Collins</span><span class="badge badge-info float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded" src="assets/img/120x120.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Thomas Granger</span><span class="badge badge-secondary float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">13 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded-circle" src="assets/img/120x120.jpg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Grace Roberts</span><span class="badge badge-warning float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>


                        <div class="away-stats">
                            

                            <div class="t-s-header mb-5 mt-5">

                                <div class="row">
                                        
                                    <div class="col-md-12">
                                        <h6>
                                            <span>Away</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>

                            <div class="a-s-media mb-5">
                                    
                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/90x90.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Traci Lopez</h6>
                                    </div>
                                </div>
                                
                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Kristen Beck</h6>
                                    </div>
                                </div>
                                
                                <div class="media mb-5">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Keith Foster</h6>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div id="alerts-tab" class="tab-pane tab-3 fade">

                    <div class="settings">

                        <div class="admin-setting">


                            <div class="d-flex justify-content-between">
                                        
                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0 mt-2">See all</p>
                                </div>

                            </div>


                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">


                            <div class="d-flex justify-content-between mb-5">
                                        
                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>



                            


                            <div class="chk-settings mt-5">
                                
                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Report panel usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Allow mail redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Show author name in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Sync phone when connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-5 delete-chat mb-5">
                                
                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Delete chat history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat-his flaticon-delete-1 mb-4"></i>

                                </div>

                            </div>


                            

                            <div class="mt-5 usr-status mb-5">
                                
                                <div class="d-flex justify-content-between mb-5">
                                        
                                    <div class="media">
                                        <i class="flaticon-chat-fill mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Status</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Online</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-success new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>

                                </div>


                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Offline</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-default new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>



                                <div class="media mb-5 stats">
                                    <div class="media-body mb-5">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Away</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-warning new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fpro/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('fpro/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
</body>
</html>