<style>
@media screen and (max-width: 600px) {
    .addmylisting {
        visibility: hidden;
        clear: both;
        display: none;
    }
}
</style>

<body class="inner-pages listing homepage-4 agents hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="//propertyforyou.in"><img src="<?=base_url();?>/assets/images/new-logo.png"
                                    alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation Mobile-->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <? if($this->session->has_userdata('ses_data')){?>
                                <li class="d-none d-xl-none d-block d-lg-block d-flex justify-content-between">
                                    <a href="<?=base_url();?>/home/logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Sign
                                        Out
                                    </a>
                                    <a href="<?=base_url();?>/home/my_listing"> <i class="fas fa-clipboard-list"></i>
                                        &nbsp;My Listing</a>
                                </li>
                                <li class="d-none d-xl-none d-block d-lg-block text-align-left"><a
                                        href="<?=base_url();?>/home/listing" class="btn btn-danger">Add Listing</a></li>

                                <? }else{?>
                                <li class="d-none d-xl-none d-block d-lg-block d-flex justify-content-between">
                                    <a href="<?=base_url();?>/home/signin"><i class="fas fa-sign-in-alt"></i>
                                        &nbsp; Sign-in</a>
                                    <!--a href="<?=base_url();?>/home/my_listing">My Listing</a-->
                                    <a href="<?=base_url();?>/home/signup"><i class="fa fa-user-plus"
                                            aria-hidden="true"></i>&nbsp;Register
                                    </a>
                                </li>
                                <li class="d-none d-xl-none d-block d-lg-block text-align-left"><a
                                        href="<?=base_url();?>/home/listing" class="btn btn-danger">Add Listing</a></li>

                                <?}?>
                                <li><a href="https://propertyforyou.in/">Home</a> </li>
                                <li><a href="<?=base_url();?>/home/sale">Buy</a></li>
                                <li><a href="<?=base_url();?>/home/sale">PG</a></li>
                                <li><a href="<?=base_url();?>/home/rent">Rent</a></li>
                                <li><a href="https://propertyforyou.in/home/about">About</a></li>
                                <li><a href="https://propertyforyou.in/home/contact">Contact</a></li>

                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->


                    <? if($this->session->has_userdata('ses_data')){?>
                    <!-- Right Side Content / End -->
                    <div class="header-user-menu user-menu add">
                        <a href="<?=base_url();?>/home/my_listing" class="header-user-name">
                            <span><img src="<?=base_url();?>/assets/images/testimonials/ts-1.jpg" alt=""></span>Hi,
                            <?=$user_data->name;?>!
                        </a>
                    </div>
                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <div class="header-widget sign-in">
                            <a href="<?=base_url();?>/home/logout">
                                <div class="">Log Out</div>
                            </a>
                        </div>
                    </div>
                    <div class="header-user-menu user-menu add d-none d-none d-lg-none d-xl-flex addmylisting">
                        <div class="">
                            <a href="<?=base_url();?>/home/listing" class="button border">Add Listing<i
                                    class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <div class="">
                            <a href="<?=base_url();?>/home/my_listing" class="button border">My Listing<i
                                    class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                    </div>
                    <!-- Right Side Content / End -->
                    <?}else{?>

                    <!-- Right Side Content / End -->
                    <div class="header-user-menu user-menu add addmylisting">
                        <div class="">
                            <a href="<?=base_url();?>/home/listing" class="button border">Add Listing<i
                                    class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                    </div>

                    <!-- Right Side Content / End -->

                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <a href="<?=base_url();?>/home/signup" class="">Sign Up</a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <a href="<?=base_url();?>/home/signin" class="">Sign In</a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->
                    <?}?>
                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->