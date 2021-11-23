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
                        <a href="https://control.propertyforyou.in/" class="nav-link" data-toggle="collapse" >
                            <i class="material-icons">home</i>
                            <p>
                                Dashboard
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse sub-menu" id="pvr_essential">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="https://control.propertyforyou.in/" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
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
                                    <a href="<?=base_url();?>/home/test" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Review List</span>
                                    </a>
                                </li>

                               
                            </ul>
                        </div>
                        
                    </li>

                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="#pvr_essential">
                            <i class="material-icons">library_add</i>
                            <p>
                                Setting
                                <b class="caret"></b>
                            </p>
                        </a>
                        
                        <div class="collapse sub-menu" id="pvr_essential">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/contact_meta" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">Contact Setting</span>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/about" class="nav-link sub_link" href="demo/pvrlite/pvrlite/pvr_buttons.html">
                                        <i class="material-icons">radio_button_checked</i>
                                        <span class="sidebar-normal">About Setting</span>
                                    </a>
                                </li>

                                
                               
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/terms" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Terms & Condition</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/privacy" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Privacy & Policy</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/social" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Social Links</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/contact" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Contact Person</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/subscription" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Subscription</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url();?>/home/server" class="nav-link sub_link" >
                                        <i class="material-icons">3d_rotation</i>
                                        <span class="sidebar-normal">Server</span>
                                    </a>
                                </li>

                               
                            </ul>
                        </div>
                        
                    </li>


                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="help.sprsinfotech.com">
                        <i class="material-icons">low_priority</i>
                            <p>
                                Help
                            </p>
                        </a>
                    </li>

                    
                    <li class="nav-item has-sub-menu">
                        <a class="nav-link" data-toggle="collapse" href="docs.sprsinfotech.com">
                        <i class="material-icons">low_priority</i>
                            <p>
                               Documentation
                            </p>
                        </a>
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
                            PROPERTYFORYOU
                        </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        
                        <ul class="navbar-nav">
                            <li class="dropdown dropdown-slide nav-item d-none d-lg-block">
                                <a href="https://propertyforyou.in" class=" nav-link" data-toggle="">
                                <span class="material-icons-outlined">
Main Portal
</span>
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="#"
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