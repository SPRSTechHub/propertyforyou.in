

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-right featured portfolio blog pt-5">
            <div class="container">
            <a href="https://propertyforyou.in" ><h3>VIEW ALL</h3></a>
                <div class="row">
                    <div class="col-lg-12 col-md-12 blog-pots">
                        
                        <div class="row">
                                <?
                                 $get_dr_history = $this->query->finder(array('type'=> 'lot','status'=>'1'),'house_dtl_tbl');
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
                                                <? 
                                                    $get_img_url = $this->query->getlastimg1(array('house_id'=>$data->house_id));
                                        ?>

                                        <img src="<?=base_url();?>/uploads/<?=!empty($get_img_url)? $get_img_url : 'https://propertyforyou.in//assets/images/feature-properties/fp-1.jpg';?>"
                                            alt="home-1" class="img-responsive" style="width:450px; height:200px;">
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
                                                <span><?=$data->pin;?> Pincode</span>
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





     
