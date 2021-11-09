

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-right featured portfolio blog pt-5">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 blog-pots">
                    <a href="https://propertyforyou.in" ><h3>VIEW ALL</h3></a>
                        <div class="row">
                                <?
                                 $get_dr_history = $this->query->finder(array('type'=> 'garage'),'house_dtl_tbl');
                                 if($get_dr_history){
                                 foreach ($get_dr_history->result() as $data) {
    
                                ?>

        
                            <div class="item col-lg-4 col-md-4 col-xs-12 landscapes sale">
                                <div class="project-single" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="https://propertyforyou.in/home/desc/?house_id=<?=$data->house_id;?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For <?=$data->purpose;?></div>
                                                <div class="homes-price">₹ <?=$data->price;?></div>
                                                <img src="<?=base_url();?>/assets/images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="https://propertyforyou.in/home/desc/?house_id=<?=$data->house_id;?>"><?=$data->house_name;?></a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="https://propertyforyou.in/home/desc/?house_id=<?=$data->house_id;?>">
                                                <i class="fa fa-map-marker"></i><span><?=$data->address;?></span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span><?=$data->bedroom;?> Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span><?=$data->bathroom;?> Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span><?=$data->area;?> sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span><?=$data->garage;?> Garages</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>Post-<?=$data->date;?></span>
                                            </li>
                                        </ul>
                                        <div class="footer">   
                                        </div>
                                    </div>
                                </div>
                            </div>
            
        

                                <?
                                 }
                                 }else{
                                    ?>Data Not Find<?
                                 }
                                ?>
                            
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->





     
