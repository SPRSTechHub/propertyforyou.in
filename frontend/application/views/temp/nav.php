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
    <div id="wrapper">
        <header id="header-container">
            <div id="header">
                <div class="container container-header">
                    <div class="left-side">
                        <div id="logo">
                            <a href="//propertyforyou.in"><img src="<?=base_url();?>/assets/images/logo_ppp.png"
                                    alt=""></a>
                        </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
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
                                <li class="d-none d-xl-none d-block d-lg-block text-align-left"><a
                                        href="<?=base_url();?>/home/membership" class="btn btn-danger">Subscription</a>
                                </li>
                                <? }else{?>
                                <li class="d-none d-xl-none d-block d-lg-block d-flex justify-content-between">
                                    <a href="<?=base_url();?>/home/signin"><i class="fas fa-sign-in-alt"></i>
                                        &nbsp; Sign-in</a>
                                    <a href="<?=base_url();?>/home/signup"><i class="fa fa-user-plus"
                                            aria-hidden="true"></i>&nbsp;Register
                                    </a>
                                </li>
                                <li class="d-none d-xl-none d-block d-lg-block text-align-left"><a
                                        href="<?=base_url();?>/home/listing" class="btn btn-danger">Add Listing</a></li>


                                <?}?>
                                <li><a href="https://propertyforyou.in/">Home</a> </li>
                                <li><a href="<?=base_url();?>/home/buy">Buy</a></li>
                                <li><a href="<?=base_url();?>/home/sale">PG</a></li>
                                <li><a href="<?=base_url();?>/home/rent">Rent</a></li>
                                <li><a href="<?=base_url();?>/home/about">About</a></li>
                                <li><a href="<?=base_url();?>/home/contact">Contact</a></li>

                            </ul>
                        </nav>
                    </div>
                    <? if($this->session->has_userdata('ses_data')){?>
                    <div class="header-user-menu user-menu add">
                        <a href="<?=base_url();?>/home/my_listing" class="header-user-name">
                            <span><img src="<?=base_url();?>/assets/images/icons/profile_img.png" alt=""></span>Hi,
                            <?=$user_data->name;?>!
                        </a>
                    </div>
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <div class="header-widget sign-in">
                            <a href="<?=base_url();?>/home/logout">
                                <div class="">Log Out</div>
                            </a>
                        </div>
                    </div>
                    <div class="header-user-menu user-menu add d-none d-none d-lg-none d-xl-flex addmylisting">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Listing</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-reference="parent">
                                <span class="visually-hidden"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                <li><a class="dropdown-item" href="<?=base_url();?>/home/listing">Add Listing</a></li>
                                <li><a class="dropdown-item" href="<?=base_url();?>/home/my_listing">My Listing</a></li>
                                <li><a class="dropdown-item" href="<?=base_url();?>/home/membership">Subscription</a>
                                </li>
                            </ul>
                        </div>



                    </div>
                    <?}else{?>
                    <div class="header-user-menu user-menu add addmylisting">
                        <div class="">
                            <a href="<?=base_url();?>/home/listing" class="button border">Add Listing<i
                                    class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                    </div>
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <div class="header-widget sign-in">
                            <a href="<?=base_url();?>/home/signup" class="">Sign Up</a>
                        </div>
                    </div>
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <div class="header-widget sign-in">
                            <a href="<?=base_url();?>/home/signin" class="">Sign In</a>
                        </div>
                    </div>
                    <?}?>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
