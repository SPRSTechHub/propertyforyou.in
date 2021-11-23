<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="netabout">
                        <a href="https://propertyforyou.in/" class="logo">
                            <img src="https://propertyforyou.in//assets/images/logo_ppp.png" alt="netcom"
                                style="width: 100px;height: 100px;">
                        </a>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="#" class="in-p ti ps-1" style="
                                        color: #c7cfd2;padding-left: 15px;">
                                        <?
                                        $mobiles = $this->query->get_meta(array('status'=>'1','type'=>'contact'), 'site_contact', 'details');
                                        if($mobiles){
                                            echo $mobiles;
                                        }
                                        ?>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="#" class="in-p ti ps-1" style="
                                        color: #c7cfd2;padding-left: 15px;">
                                        <?
                                        $email =  $this->query->get_meta(array('status'=>'1','type'=>'site_email'), 'site_contact', 'details');
                                        if($email){
                                            echo $email;
                                        }
                                        ?>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="navigation">
                        <h3>Navigation</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="https://propertyforyou.in/">Home </a></li>
                                <li><a href="https://propertyforyou.in/home/listing">Listing</a></li>
                                <li><a href="https://propertyforyou.in/home/my_listing">My Listing</a></li>

                            </ul>
                            <ul class="nav-right">
                                <li><a href="https://propertyforyou.in/home/about">About Us</a></li>
                                <li class="no-mgb"><a href="https://propertyforyou.in/home/contact">Contact Us</a></li>
                                <li class="no-mgb"><a href="https://propertyforyou.in/home/privacy">Privacy</a></li>
                                <li class="no-mgb"><a href="https://propertyforyou.in/home/terms">Terms & Condition</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in
                            your inbox.</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>2021 © Copyright - All Rights Reserved.</p>
            <?
            $fnd_social=$this->query->finder(array('status'=>'1'),'social_tbl');
            if($fnd_social){
                foreach($fnd_social->result() as $social){?>
            <ul class="netsocials">
                <li><a href="<?=$social->fb;?>" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li><a href="<?=$social->twitter;?>" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li><a href="<?=$social->insta;?>" target="blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="<?=$social->youtube;?>" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
            </ul>
            <?}
            }else{}
            
            ?>

        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->

<!--register form -->

<!--register form end -->

<!-- ARCHIVES JS -->

<script src="<?=base_url();?>/assets/js/rangeSlider.js"></script>
<script src="<?=base_url();?>/assets/js/tether.min.js"></script>
<script src="<?=base_url();?>/assets/js/popper.min.js"></script>
<script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>/assets/js/mmenu.min.js"></script>
<script src="<?=base_url();?>/assets/js/mmenu.js"></script>
<script src="<?=base_url();?>/assets/js/aos.js"></script>
<script src="<?=base_url();?>/assets/js/aos2.js"></script>
<script src="<?=base_url();?>/assets/js/slick.min.js"></script>
<script src="<?=base_url();?>/assets/js/slick4.js"></script>
<script src="<?=base_url();?>/assets/js/smooth-scroll.min.js"></script>
<script src="<?=base_url();?>/assets/js/lightcase.js"></script>
<script src="<?=base_url();?>/assets/js/search.js"></script>
<script src="<?=base_url();?>/assets/js/light.js"></script>
<script src="<?=base_url();?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url();?>/assets/js/popup.js"></script>
<script src="<?=base_url();?>/assets/js/searched.js"></script>
<script src="<?=base_url();?>/assets/js/ajaxchimp.min.js"></script>
<script src="<?=base_url();?>/assets/js/newsletter.js"></script>
<script src="<?=base_url();?>/assets/js/inner.js"></script>
<script src="<?=base_url();?>/assets/js/color-switcher.js"></script>


<script src="<?=base_url();?>/assets/js/map-single.js"></script>


<script>
$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>

</div>
<!-- Wrapper / End -->
</body>

</html>
