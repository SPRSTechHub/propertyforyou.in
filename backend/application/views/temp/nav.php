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
                                    <a href="<?=base_url();?>/home/logout" class="profile-dropdown" href="javascript:void(0)">
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
                        <a href="https://control.propertyforyou.in/" class="nav-link" data-toggle="collapse" href="#pvr_dashboard">
                            <i class="material-icons">home</i>
                            <p>
                                Dashboard
                                <b class="caret"></b>
                            </p>
                        </a>
                        
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_applications">
                            <i class="material-icons">low_priority</i>
                            <p>
                                Users Management
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_essential">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/user" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">User List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_essential">
                            <i class="material-icons">library_add</i>
                            <p>
                                Manage Property
                                <b class="caret"></b>
                            </p>
                        </a>
                        
                        <div class="collapse sub-menu" id="pvr_essential">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/product" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">Property List</span>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/test" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_spinner_buttons.html">
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Review List</span>
                                    </a>
                                </li>

                               
                            </ul>
                        </div>
                        
                    </li>
                    <!-- <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_ui_elements">
                            <i class="material-icons">code</i>
                            <p>
                                Product Management
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_ui_elements">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="product" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">Product List</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="review" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_spinner_buttons.html">
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Review List</span>
                                    </a>
                                </li>

                               
                            </ul>
                        </div>
                    </li> -->
                    
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
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->