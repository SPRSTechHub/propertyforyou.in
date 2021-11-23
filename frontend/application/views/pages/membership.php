<?
//$silver = $this->query->finder(array('sub_name'=>'SILVER'));
$about_txt = $this->query->finder(array('sub_name'=>'about_txt'),'subscription_tbl');

$phone = $this->query->find_meta(array('sub_name'=>'SILVER'));

$gold = $this->query->find_meta(array('sub_name'=>'GOLD'));

$plat = $this->query->find_meta(array('sub_name'=>'PLATINUM'));
?>
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Subscription</h1>
                    <h2><a href="<?=base_url();?>/home/index">Home </a> &nbsp;/&nbsp; Pricing Table</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PRICING -->
        <section class="pricing-table bg-white-2">
            <div class="container">
                <div class="section-title">
                    <h3>Subscription</h3>
                    <h2>Packages</h2>
                </div>
                <div class="row">
                <?
                $fnd_sub=$this->query->finder(array('status'=>'1'),'subscription_tbl');
                if($fnd_sub){
                    foreach($fnd_sub->result() as $data){
                        ?>
                        <!-- plan start -->
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="plan text-center">
                            <span class="plan-name"><?=!empty($data->sub_dsc)?$data->sub_name:'XXXX';?> <small><?=!empty($data->sub_dsc)?$data->sub_dsc:'XXXX';?></small></span>
                            <p class="plan-price"><sup class="currency">₹</sup><strong><?=!empty($data->sub_name)?$data->sub_price:'XXXX';?></strong></p>
                            <ul class="list-unstyled">
                                
                            </ul>
                            <a class="btn btn-primary" href="#.">Activate</a>
                        </div>
                    </div>
                    <!-- plan end -->
                        <?
                    }
                }else{}
                ?>
                </div>


            </div>
        </section>
        <!-- END SECTION PRICING -->