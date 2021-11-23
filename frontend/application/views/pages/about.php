<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>About Our Company</h1>
            <h2><a href="https://propertyforyou.in/">Home </a> &nbsp;/&nbsp; About Us</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION ABOUT -->
<section class="about-us fh">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 who-1">
                <div>
                    <h2 class="text-left mb-4">About <span>Propertyforyou</span></h2>
                </div>
                <div class="pftext">
                    <?
                        $find_about=$this->query->finder(array('status'=>'1'),'about_tbl');
                        if($find_about){
                            foreach($find_about->result() as $data)
                            {
                                ?>
                    <p><?=$data->about?></p>
                    <?
                            }
                        }else{echo('Data not found');}
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION WHY CHOOSE US -->
<section class="how-it-works bg-white-2">
    <div class="container">
        <div class="sec-title">
            <h2><span>Why </span>Choose Us</h2>
            <p>We provide full service at every step.</p>
        </div>
        <div class="row service-1">
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                <div class="serv-flex">
                    <div class="art-1 img-13">
                        <img src="<?=base_url();?>/assets/images/icons/icon-4.svg" alt="">
                        <h3>Wide Renge Of Properties</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">At present, Propertyforyou prides itself for having around one lakh
                            property listings spanning across various cities in India.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="<?=base_url();?>/assets/images/icons/icon-5.svg" alt="">
                        <h3>Verification by Propertyforyou team</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Photos / Videos and other details are verified from our end with certain
                            limitations.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                <div class="serv-flex arrow">
                    <div class="art-1 img-15">
                        <img src="<?=base_url();?>/assets/images/icons/icon-5.svg" alt="">
                        <h3>Large user base</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">High active user count and user engagement to find and close deals</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->
