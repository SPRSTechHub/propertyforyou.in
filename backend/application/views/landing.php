<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="<?=base_url();?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>PVR - Lite Admin | Dashboard v1</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/css/colors.css" rel="stylesheet" id="themecolor" />
    <link href="<?=base_url();?>/assets/css/style.css" rel="stylesheet" />
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/plugins/amcharts/export.css" type="text/css" media="all" />
    <link href="<?=base_url();?>/assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLE -->
    <style id="clock-animations"></style>



    <!--   Core JS Files   -->
<script src="<?=base_url();?>/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/pace/pace.min.js"></script>
<script src="<?=base_url();?>/assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/waitme/waitme.min.js"></script>
<script src="<?=base_url();?>/assets/js/pvr_lite_app.js" id="appjs"></script>
<!-- PVR Lite DEMO, don't include it in your project! -->
<script src="<?=base_url();?>/assets/js/pvr_lite_demo.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-8"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?=base_url();?>/assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/chartjs/chart.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/countup/countup.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/amcharts.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/serial.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/export.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/none.js"></script>
<script src="<?=base_url();?>/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?=base_url();?>/assets/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url();?>/assets/plugins/real-shadow/realshadow.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/typeit/typeit.js"></script>
<script src="<?=base_url();?>/assets/js/pvr_lite_dashboard_v1.js"></script>
<!-- END PAGE LEVEL JS -->
</head>
<!--Body Begins-->

<body>
    <!--Begin Loading-->
    <div class="preloader">
        <div class="loading">
            <h2>
                Loading...
            </h2>
            <span class="progress"></span>
        </div>
    </div>
    <!--End Loading-->
    <!--Begin wrapper-->
    <div class="wrapper">
        <!--Begin Sidebar-->
        <div class="sidebar" data-color="purple" data-image="<?=base_url();?>/assets/img/sidebar-bg.jpg">
            <div class="sidebar-wrapper">
                <!--Begins Logo start-->
                <div class="logo">
                    
                    <a href="javascript:void(0)" class="simple-text logo-normal">
                     PROPERTY FOR YOU
                    </a>
                </div>
                <!--End Logo start-->
                <!--Begins User Section-->
                <div class="user">
                    <div class="photo">
                        <img src="<?=base_url();?>/assets/img/default-avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed">
                            <span>Administrator
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse m-t-10" id="pvr_user_nav">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="javascript:void(0)">
                                        <span class="sidebar-mini"><i class="icon-user"></i></span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="javascript:void(0)">
                                        <span class="sidebar-mini"><i class="icon-settings"></i></span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="javascript:void(0)">
                                        <span class="sidebar-mini"><i class="icon-logout"></i></span>
                                        <span class="sidebar-normal">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End User Section-->
                <ul class="nav">
                    <li class="nav-item has-sub-menu active">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_dashboard">
                            <i class="material-icons">home</i>
                            <p>
                                Dashboard
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu show" id="pvr_dashboard">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <a class="nav-link sub_link" href="index.html">
                                        <i class="material-icons">insert_chart</i>
                                        <span class="sidebar-normal">Dashboard v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_dashboard_v2.html">
                                        <i class="material-icons">pie_chart</i>
                                        <span class="sidebar-normal">Dashboard v2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_applications">
                            <i class="material-icons">low_priority</i>
                            <p>
                                Applications
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_applications">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_e_commerce.html">
                                        <i class="material-icons">shopping_cart</i>
                                        <span class="sidebar-normal">E-commerce</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_blog.html">
                                        <i class="material-icons">pets</i>
                                        <span class="sidebar-normal">Blog</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_file_manager.html">
                                        <i class="material-icons">folder_shared</i>
                                        <span class="sidebar-normal">File Manager</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_contact_v1.html">
                                        <i class="material-icons">contact_phone</i>
                                        <span class="sidebar-normal">Contact v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_contact_v2.html">
                                        <i class="material-icons">contacts</i>
                                        <span class="sidebar-normal">Contact v2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_calendar.html">
                                        <i class="material-icons">perm_contact_calendar</i>
                                        <span class="sidebar-normal">Calendar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_essential">
                            <i class="material-icons">library_add</i>
                            <p>
                                Essential
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_essential">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_login_v1.html">
                                        <i class="material-icons">input</i>
                                        <span class="sidebar-normal">Login v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_login_v2.html">
                                        <i class="material-icons">lock_open</i>
                                        <span class="sidebar-normal">Login v2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_registration.html">
                                        <i class="material-icons">person_add</i>
                                        <span class="sidebar-normal">Registration</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_forgot_password.html">
                                        <i class="material-icons">email</i>
                                        <span class="sidebar-normal">Forgot Password</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_lock_screen.html">
                                        <i class="material-icons">lock</i>
                                        <span class="sidebar-normal">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_coming_soon.html">
                                        <i class="material-icons">av_timer</i>
                                        <span class="sidebar-normal">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_404_v1.html">
                                        <i class="material-icons">error</i>
                                        <span class="sidebar-normal">404 v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_404_v2.html">
                                        <i class="material-icons">stop_screen_share</i>
                                        <span class="sidebar-normal">404 v2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_cookie_v1.html">
                                        <i class="material-icons">weekend</i>
                                        <span class="sidebar-normal">Cookie v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_cookie_v2.html">
                                        <i class="material-icons">save</i>
                                        <span class="sidebar-normal">Cookie v2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_profile_v1.html">
                                        <i class="material-icons">verified_user</i>
                                        <span class="sidebar-normal">Profile v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_profile_v2.html">
                                        <i class="material-icons">account_box</i>
                                        <span class="sidebar-normal">Profile v2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_ui_elements">
                            <i class="material-icons">code</i>
                            <p>
                                UI Elements
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_ui_elements">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_spinner_buttons.html">
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Spinner Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_badges.html">
                                        <i class="material-icons">aspect_ratio</i>
                                        <span class="sidebar-normal">Badges</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_typography.html">
                                        <i class="material-icons">text_format</i>
                                        <span class="sidebar-normal">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_tabs_accordion.html">
                                        <i class="material-icons">tab</i>
                                        <span class="sidebar-normal">Tabs & Accordion</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_progress_bar.html">
                                        <i class="material-icons">alarm_add</i>
                                        <span class="sidebar-normal">Progress Bar</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_grid_system.html">
                                        <i class="material-icons">alarm_on</i>
                                        <span class="sidebar-normal">Grid System</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_tree_view.html">
                                        <i class="material-icons">trending_down</i>
                                        <span class="sidebar-normal">Tree View</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_block_ui.html">
                                        <i class="material-icons">block</i>
                                        <span class="sidebar-normal">Block UI</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_notifications.html">
                                        <i class="material-icons">notifications_active</i>
                                        <span class="sidebar-normal">Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_modals.html">
                                        <i class="material-icons">burst_mode</i>
                                        <span class="sidebar-normal">Modals</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_nestable_list.html">
                                        <i class="material-icons">filter_list</i>
                                        <span class="sidebar-normal">Nestable List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_components">
                            <i class="material-icons">fingerprint</i>
                            <p>
                                Components
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_components">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_date_time_picker.html">
                                        <i class="material-icons">date_range</i>
                                        <span class="sidebar-normal">Date & Time Pickers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link"
                                        href="demo/pvrlite/pvrlite/pvr_bootstrap_color_pickers.html">
                                        <i class="material-icons">wb_incandescent</i>
                                        <span class="sidebar-normal">Color Pickers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_select2.html">
                                        <i class="material-icons">arrow_drop_down_circle</i>
                                        <span class="sidebar-normal">Select2 Dropdown</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_bootstrap_select.html">
                                        <i class="material-icons">select_all</i>
                                        <span class="sidebar-normal">Bootstrap Select</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_list_box.html">
                                        <i class="material-icons">list</i>
                                        <span class="sidebar-normal">List Box</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_clipboard.html">
                                        <i class="material-icons">copyright</i>
                                        <span class="sidebar-normal">Clipboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_bootstrap_tags.html">
                                        <i class="material-icons">backspace</i>
                                        <span class="sidebar-normal">Bootstrap Tags</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_touchspin.html">
                                        <i class="material-icons">call_split</i>
                                        <span class="sidebar-normal">Bootstrap Touchspin</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_session.html">
                                        <i class="material-icons">slow_motion_video</i>
                                        <span class="sidebar-normal">Session</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_form_stuff">
                            <i class="material-icons">note_add</i>
                            <p>
                                Form Stuff
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_form_stuff">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_form_layout.html">
                                        <i class="material-icons">dvr</i>
                                        <span class="sidebar-normal">Form Layout</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_form_repeater.html">
                                        <i class="material-icons">playlist_add</i>
                                        <span class="sidebar-normal">Form Repeater</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_form_input_mask.html">
                                        <i class="material-icons">money_off</i>
                                        <span class="sidebar-normal">Form Input Mask</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_form_editor.html">
                                        <i class="material-icons">border_color</i>
                                        <span class="sidebar-normal">Text Editor</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_form_wizard.html">
                                        <i class="material-icons">switch_camera</i>
                                        <span class="sidebar-normal">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_icheck_controls.html">
                                        <i class="material-icons">check_box</i>
                                        <span class="sidebar-normal">iCheck Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_image_croping.html">
                                        <i class="material-icons">crop</i>
                                        <span class="sidebar-normal">Image Cropping</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_file_upload.html">
                                        <i class="material-icons">file_upload</i>
                                        <span class="sidebar-normal">File Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_tables">
                            <i class="material-icons">view_agenda</i>
                            <p>
                                Tables
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_tables" style="">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_basic_tables.html">
                                        <i class="material-icons">view_list</i>
                                        <span class="sidebar-normal">Regular Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_extended_tables.html">
                                        <i class="material-icons">view_module</i>
                                        <span class="sidebar-normal">Extended Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_bootstrap_tables.html">
                                        <i class="material-icons">view_quilt</i>
                                        <span class="sidebar-normal">Bootstrap Table</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" href="#pvr_data_table">
                                        <i class="material-icons">view_week</i>
                                        <p>
                                            DataTable
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <div class="collapse" id="pvr_data_table">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_basic.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Default</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_autofill.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Autofill</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_buttons.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_col_reorder.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">ColReorder</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_fixed_column.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Fixed Column</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_fixed_header.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Fixed Header</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_key_table.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Key Table</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_responsive.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Responsive</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_row_reorder.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Row Reorder</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_scroller.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Scroller</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_select.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Select</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="demo/pvrlite/pvrlite/pvr_datatable_combination.html">
                                                    <i class="material-icons">dvr</i>
                                                    <span class="sidebar-normal">Combination</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_charts">
                            <i class="material-icons">bubble_chart</i>
                            <p>
                                Charts
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_charts">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_am_charts.html">
                                        <i class="material-icons">insert_chart</i>
                                        <span class="sidebar-normal">AM Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_high_charts.html">
                                        <i class="material-icons">multiline_chart</i>
                                        <span class="sidebar-normal">Highcharts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_chart_js.html">
                                        <i class="material-icons">pie_chart</i>
                                        <span class="sidebar-normal">Chart JS</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_moris_chart.html">
                                        <i class="material-icons">pie_chart_outlined</i>
                                        <span class="sidebar-normal">Morris Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_maps">
                            <i class="material-icons">add_location</i>
                            <p>
                                Maps
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_maps">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_google_map.html">
                                        <i class="material-icons">streetview</i>
                                        <span class="sidebar-normal">Google Map</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_vector_map.html">
                                        <i class="material-icons">terrain</i>
                                        <span class="sidebar-normal">Vector Map</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_full_screen.html">
                                        <i class="material-icons">directions</i>
                                        <span class="sidebar-normal">Full Screen Map</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_gallery">
                            <i class="material-icons">photo_library</i>
                            <p>
                                Gallery
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_gallery">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_gallery_v1.html">
                                        <i class="material-icons">important_devices</i>
                                        <span class="sidebar-normal">Gallery v1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_gallery_v2.html">
                                        <i class="material-icons">monochrome_photos</i>
                                        <span class="sidebar-normal">Gallery v2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_page_layouts">
                            <i class="material-icons">pages</i>
                            <p>
                                Page Layouts
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_page_layouts">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_minified.html">
                                        <i class="material-icons">find_in_page</i>
                                        <span class="sidebar-normal">Page Minified Sidebar</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_page_with_sidebar.html">
                                        <i class="material-icons">restore_page</i>
                                        <span class="sidebar-normal">Page with Sidebar</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_page_with_footer.html">
                                        <i class="material-icons">play_for_work</i>
                                        <span class="sidebar-normal">Page with Footer</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link"
                                        href="demo/pvrlite/pvrlite/pvr_page_without_footer.html">
                                        <i class="material-icons">polymer</i>
                                        <span class="sidebar-normal">Page without Footer</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_page_blank.html">
                                        <i class="material-icons">check_box_outline_blank</i>
                                        <span class="sidebar-normal">Page Blank</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_extras">
                            <i class="material-icons">stars</i>
                            <p>
                                Extras
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_extras">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_search_result.html">
                                        <i class="material-icons">present_to_all</i>
                                        <span class="sidebar-normal">Search Results</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_invoice.html">
                                        <i class="material-icons">receipt</i>
                                        <span class="sidebar-normal">Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_icons">
                            <i class="material-icons">pets</i>
                            <p>
                                Icons
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_icons">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link"
                                        href="demo/pvrlite/pvrlite/pvr_font_material_icon.html">
                                        <i class="material-icons">face</i>
                                        <span class="sidebar-normal">Material Icon</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_font_awesome.html">
                                        <i class="material-icons">favorite</i>
                                        <span class="sidebar-normal">Font Awesome</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link"
                                        href="demo/pvrlite/pvrlite/pvr_font_simple_line_icon.html">
                                        <i class="material-icons">line_style</i>
                                        <span class="sidebar-normal">Simple line Icons</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_font_weather_icon.html">
                                        <i class="material-icons">language</i>
                                        <span class="sidebar-normal">Weather Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_menu_levels">
                            <i class="material-icons">menu</i>
                            <p>
                                Menu Levels
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_menu_levels" style="">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="javascript:void(0)">
                                        <i class="material-icons">sentiment_dissatisfied</i>
                                        <span class="sidebar-normal">Menu 1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub_link" href="javascript:void(0)">
                                        <i class="material-icons">sentiment_neutral</i>
                                        <span class="sidebar-normal">Menu 2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" href="#pvr_menu_sub_level">
                                        <i class="material-icons">sentiment_satisfied</i>
                                        <p>
                                            Menu 3
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <div class="collapse" id="pvr_menu_sub_level">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="javascript:void(0)">
                                                    <i class="material-icons">sentiment_very_satisfied</i>
                                                    <span class="sidebar-normal">Menu 3.1</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="javascript:void(0)">
                                                    <i class="material-icons">sentiment_very_satisfied</i>
                                                    <span class="sidebar-normal">Menu 3.2</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link sub_link second_level_link"
                                                    href="javascript:void(0)">
                                                    <i class="material-icons">sentiment_very_satisfied</i>
                                                    <span class="sidebar-normal">Menu 3.3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--End Sidebar-->
        <!--Begin Main Panel-->
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" data-color="purple"
                                class="btn btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" id="page_header_title" href="javascript:void(0)">
                            <i class="material-icons">insert_chart</i>
                            Dashboard v1
                        </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav">
                            <li>
                                <form class="navbar-form navbar-left navbar-search-form d-none d-lg-block"
                                    role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-addon"><i
                                                class="icons icon-magnifier p-r-10"></i></span>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="dropdown dropdown-slide nav-item d-none d-lg-block">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="notification">4</span> <i
                                        class="material-icons">notifications_active</i></a>
                                <ul class="dropdown-menu dropdown-menu-right notification_left">
                                    <li>
                                        <div class="list-item" data-id="item-12">
                                            <span class="w-40 avatar circle" data-color="green">
                                                <i class="material-icons">loyalty</i>
                                            </span>
                                            <div class="list-body"><a href="javascript:void(0)"
                                                    class="item-title _500">Server
                                                    Error
                                                    Reports</a>
                                                <div class="item-except text-sm text-muted h-1x f-s-12">
                                                    Lorem Ipsum is simply dummy text.
                                                </div>
                                            </div>
                                            <div><span class="item-date text-xs text-muted f-s-13">11:30</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-item" data-id="item-12">
                                            <span class="w-40 avatar circle" data-color="red">
                                                <i class="material-icons">supervisor_account</i>
                                            </span>
                                            <div class="list-body"><a href="javascript:void(0)"
                                                    class="item-title _500">John
                                                    Smith</a>
                                                <div class="item-except text-sm text-muted h-1x f-s-12">
                                                    Looking for some client-work
                                                </div>
                                            </div>
                                            <div><span class="item-date text-xs text-muted f-s-13">01:15</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-item" data-id="item-12">
                                            <span class="w-40 avatar circle" data-color="orange">
                                                <i class="material-icons">group_add</i>
                                            </span>
                                            <div class="list-body"><a href="javascript:void(0)"
                                                    class="item-title _500">Olivia</a>
                                                <div class="item-except text-sm text-muted h-1x f-s-12">
                                                    Looking for some client-work
                                                </div>
                                            </div>
                                            <div><span class="item-date text-xs text-muted f-s-13">03:03</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-item" data-id="item-12">
                                            <span class="w-40 avatar circle" data-color="purple">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <div class="list-body"><a href="javascript:void(0)" class="item-title _500">
                                                    New
                                                    User
                                                    Registered</a>
                                                <div class="item-except text-sm text-muted h-1x f-s-12">
                                                    Lorem Ipsum is simply dummy text.
                                                </div>
                                            </div>
                                            <div><span class="item-date text-xs text-muted f-s-13">14:40</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">account_box</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="material-icons align-middle">mail_outline</i> Messages
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="material-icons align-middle">account_circle</i> Profile
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="material-icons align-middle">settings</i> Settings
                                    </a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="material-icons align-middle">lock_outline</i> Lock Screen
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <i class="material-icons align-middle">power_settings_new</i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--Begin Content-->
            <div class="content dashboard_v1">
                <div class="row">
                    <div class="col-lg-12 col-xl-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pvr-wrapper">
                                    <div class="welcome_message pvr-box-gray">
                                        <div class="element-info">
                                            <div class="element-info-with-icon">
                                                <div class="element-info-icon">
                                                    <p
                                                        class="wi wi-night-alt-snow-thunderstorm f-s-70 text-center text-purple">
                                                    </p>
                                                    <p class="text-center m-t-10 m-b-0 text-purple">
                                                        <span data-count="true" data-number="24" id="degree"></span>
                                                        <sup>o</sup>C</p>
                                                    <h6 class="text-center text-purple"><span id="cloudy"
                                                            data-typeit="true">cloudy</span>
                                                    </h6>
                                                </div>
                                                <div class="element-info-text">
                                                    <h2 class="element-inner-header m-t-0 text-purple" id="good_morning"
                                                        data-typeit="true">
                                                        Good Morning, Andrew!
                                                    </h2>
                                                    <div class="element-inner-desc text-justify m-b-20">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard of type
                                                        and
                                                        scrambled it to make a type specimen book. It has survived not
                                                        only
                                                        five centuries
                                                    </div>
                                                    <button type="button" class="btn btn-purple">Today's
                                                        Weather</button>
                                                    <button type="button" class="btn btn-outline-danger">Today's Task
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-outline-warning">Calendar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="pvr-wrapper">
                                    <div class="widget_box p-15 p-b-0">
                                        <h6><i class="fa fa-pie-chart"></i> <span id="site_trafic"
                                                data-typeit="true">Site Traffic</span>
                                        </h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Overall</p>
                                                <p><i class="fa fa-caret-down f-s-20 text-danger"></i>
                                                    <span data-count="true" data-number="70" id="st_overall"></span>%
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Daily</p>
                                                <p><i class="fa fa-caret-up f-s-20 text-success"></i>
                                                    <span data-count="true" data-number="90" id="st_daily"></span>%</p>
                                            </div>
                                            <div class="col-md-12 sparkline_chart">
                                                <canvas height="100" id="pvrLineChart_1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="pvr-wrapper">
                                    <div class="widget_box p-15 p-b-0">
                                        <h6><i class="fa fa-pie-chart"></i> <span id="data_transfer"
                                                data-typeit="true">Data Transfer</span>
                                        </h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Overall</p>
                                                <p><i class="fa fa-caret-down f-s-20 text-danger"></i>
                                                    <span data-count="true" data-number="90" id="dt_overall"></span>%
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Daily</p>
                                                <p><i class="fa fa-caret-up f-s-20 text-success"></i>
                                                    <span data-count="true" data-number="100" id="dt_daily"></span>%</p>
                                            </div>
                                            <div class="col-md-12 sparkline_chart">
                                                <canvas height="100" id="pvrLineChart_2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="pvr-wrapper">
                                    <div class="widget_box p-15 p-b-0">
                                        <h6><i class="fa fa-pie-chart"></i> <span id="band_width"
                                                data-typeit="true">Bandwidth Usage</span>
                                        </h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Overall</p>
                                                <p><i class="fa fa-caret-down f-s-20 text-danger"></i>
                                                    <span data-count="true" data-number="95" id="bw_overall"></span>%
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Daily</p>
                                                <p><i class="fa fa-caret-up f-s-20 text-success"></i>
                                                    <span data-count="true" data-number="98" id="bw_daily"></span>%</p>
                                            </div>
                                            <div class="col-md-12 sparkline_chart">
                                                <canvas height="100" id="pvrLineChart_3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Stats
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <div class="p-0 am_chart" id="chartdiv_aminated">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Sites Visits
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <div class="p-0 am_chart" id="world-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Visits by Country
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/us.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td>USA</td>
                                                        <td class="text-right">
                                                            2,420
                                                        </td>
                                                        <td class="text-right">
                                                            77.23%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/br.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td>Brazil</td>
                                                        <td class="text-right">
                                                            4,550
                                                        </td>
                                                        <td class="text-right">
                                                            44.34%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/ru.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td>Russia</td>
                                                        <td class="text-right">
                                                            7,390
                                                        </td>
                                                        <td class="text-right">
                                                            70.43%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/in.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td>India</td>
                                                        <td class="text-right">
                                                            7,602
                                                        </td>
                                                        <td class="text-right">
                                                            80.35%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/au.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td>Australia</td>
                                                        <td class="text-right">
                                                            690
                                                        </td>
                                                        <td class="text-right">
                                                            7.87%
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Calendar
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <div id="datepicker-inline" class="datepicker-full-width">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="col-md-12 p-0">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="icon-people text-primary f-s-40"></i>
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="m-0">New Users</h6>
                                                    <p class="mb-0">114 New Users</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="icon-basket-loaded text-info f-s-40"></i>
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="m-0">Order Placed</h6>
                                                    <p class="mb-0">574 New Order</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="icon-handbag text-danger f-s-40"></i>
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="m-0">Delivery </h6>
                                                    <p class="mb-0">489 New Delivery</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="icon-trophy text-success f-s-40"></i>
                                                </div>
                                                <div class="col-9">
                                                    <h6 class="m-0">Monthly Profits</h6>
                                                    <p class="mb-0">$19,887 Profit
                                                        <span class="float-right text-success"> </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Todo List
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <ul class="todolist">
                                            <li class="active">
                                                <a href="javascript:void(0)" class="todolist-container active"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting.
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:void(0)" class="todolist-container"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy.
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="todolist-container"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy text of the printing.
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="todolist-container"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy text.
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="todolist-container"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy text of the.
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:void(0)" class="todolist-container"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting.
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="todolist-container active"
                                                    data-click="todolist">
                                                    <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                                    <div class="todolist-title">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting.
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-xl-12 col-sm-6">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box-gray clock_box">
                                        <div class="clock-wrapper">
                                            <div class="clock-base">
                                                <div class="click-indicator">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="clock-hour"></div>
                                                <div class="clock-minute"></div>
                                                <div class="clock-second"></div>
                                                <div class="clock-center"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xl-12">
                                <div class="box_dashboard_v2 yellow_dashboard_v2 widget-stats">
                                    <h2 class="text-left m-b-0">
                                        <span data-count="true" data-number="16" id="degree_1"></span> <sup>o</sup>C
                                    </h2>
                                    <p class="text-left">
                                        <span id="winter" data-typeit="true">Winter</span>
                                    </p>
                                    <div class="stats-icon stats-icon-lg">
                                        <i class="wi wi-moon-waning-crescent-4 rotate_35 add_shadow"></i>
                                    </div>
                                    <div class="p-10 p-l-0 text-left">
                                        <a class="p-l-0 text-white" href="javascript:void(0)">
                                            Edit info <i class="material-icons align-middle m-l-20">settings</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box_dashboard_v2 inbox_v2 pink_dashboard_v2 m-t-20">
                                    <h2 class="text-left m-t-0 m-b-0">
                                        Inbox
                                    </h2>
                                    <p class="text-left">
                                        you have unread messages
                                    </p>
                                    <p class="text-right">
                                        <i class="material-icons add_shadow f-s-50">email</i>
                                    </p>
                                    <div class="p-10 p-l-0 text-left">
                                        <a class="p-l-0 text-white" href="javascript:void(0)">
                                            <span data-count="true" data-number="564" id="new_msg_dash_v2"></span>
                                            New Messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xl-12 m-t-20">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Stat
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <div class="charjs-chart">
                                            <canvas height="180" id="hero-donut" width="180"></canvas>
                                            <div class="charjs-chart-label">
                                                <strong><span data-count="true" data-number="175"
                                                        id="total_visit"></span></strong><span><span id="tot_vis"
                                                        data-typeit="true">Total Visits</span></span>
                                            </div>
                                        </div>
                                        <div class="table-responsive m-t-20">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/us.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            2,420
                                                        </td>
                                                        <td class="text-right">
                                                            77.23%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/br.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            4,550
                                                        </td>
                                                        <td class="text-right">
                                                            44.34%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/ru.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            7,390
                                                        </td>
                                                        <td class="text-right">
                                                            70.43%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/in.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            7,602
                                                        </td>
                                                        <td class="text-right">
                                                            80.35%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="<?=base_url();?>/assets/img/flags/au.svg"
                                                                    class="w-25">
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            690
                                                        </td>
                                                        <td class="text-right">
                                                            7.87%
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xl-12 m-t-20">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box">
                                        <h5 class="pvr-header">
                                            Activity
                                            <div class="pvr-box-controls">
                                                <i class="material-icons" data-box="refresh"
                                                    data-effect="win8_linear">refresh</i>
                                                <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                                <i class="material-icons" data-box="close">close</i>
                                            </div>
                                        </h5>
                                        <div class="timed-activities compact">
                                            <div class="timed-activity">
                                                <div class="ta-date">
                                                    <span>Today</span>
                                                </div>
                                                <div class="ta-record-w">
                                                    <div class="ta-record">
                                                        <div class="ta-timestamp">
                                                            <strong>4:49</strong> pm
                                                        </div>
                                                        <div class="ta-activity">
                                                            Visited Welcome to <a href="javascript:void(0)">My
                                                                Activity</a>
                                                        </div>
                                                    </div>
                                                    <div class="ta-record">
                                                        <div class="ta-timestamp">
                                                            <strong>4:49</strong> pm
                                                        </div>
                                                        <div class="ta-activity">
                                                            <a href="javascript:void(0)">Viewed area around Chennai</a>
                                                        </div>
                                                    </div>
                                                    <div class="ta-record">
                                                        <div class="ta-timestamp">
                                                            <strong>10:43</strong> pm
                                                        </div>
                                                        <div class="ta-activity">
                                                            Visited <a href="javascript:void(0)">PVR - Coming Soon
                                                                Plugin by
                                                                PVR_TECH_STUDIO |
                                                                CodeCanyon</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timed-activity">
                                                <div class="ta-date">
                                                    <span>Yesterday</span>
                                                </div>
                                                <div class="ta-record-w">
                                                    <div class="ta-record">
                                                        <div class="ta-timestamp">
                                                            <strong>9:32</strong> pm
                                                        </div>
                                                        <div class="ta-activity">
                                                            Visited <a
                                                                href="https://play.google.com/store/apps/details?id=in.amazon.mShop.android.shopping">Amazon
                                                                India Online Shopping</a>
                                                        </div>
                                                    </div>
                                                    <div class="ta-record">
                                                        <div class="ta-timestamp">
                                                            <strong>5:14</strong> pm
                                                        </div>
                                                        <div class="ta-activity">
                                                            Visited <a
                                                                href="https://play.google.com/store/apps/details?id=com.flipkart.android">Flipkart
                                                                Online Shopping App</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Content-->
            <!--Begin Footer-->
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu d-none d-sm-block">
                            <li>
                                <a href="javascript:void(0)">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    T&C
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    Privacy policy
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    Website
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            © <span id="writeCopyrights"></span>
                            <a href="http://www.pvrtechstudio.com/" target="_blank">PVR Tech Studio</a>, We Design your
                            Future!
                        </p>
                    </nav>
                </div>
            </footer>
            <!--End Footer-->
        </div>
        <!--EndMain Panel-->
    </div>
    <!--End wrapper-->
    <!-- begin scroll to top btn -->
    <a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light"
        data-color="purple" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
    <center>
        <font size="2">This is the free demo result. For a full version of this website, please go to <a
                href="https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">Website
                Downloader</a></font>
    </center>
</body>
<!--End Body-->


</html>