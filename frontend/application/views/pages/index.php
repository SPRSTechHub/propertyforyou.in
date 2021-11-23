<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right featured portfolio blog pt-5">

    <div class="bg-danger container text-white">
        <marquee>PLEASE DO LEGAL / SOCIAL VERIFICATION & LEGAL PAPERWORK BEFORE ANY KIND OF MONETARY TRANSACTION
            WITH THE PROPERTY OWNERS. "PROPERTYFORYOU" WILL NOT BE LIABLE FOR ANY KIND OF MONETARY LOSS.</marquee>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">

                <div class="row">
                    <?
                                 $get_dr_history = $this->query->finder(array('status'=> '1'),'house_dtl_tbl');
                                 if($get_dr_history){
                                 foreach ($get_dr_history->result() as $data) {
    
                                ?>


                    <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="https://propertyforyou.in/home/desc/?house_id=<?=$data->house_id;?>"
                                        class="homes-img">
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
                                <h3><a
                                        href="https://propertyforyou.in/home/desc/?house_id=<?=$data->house_id;?>"><?=$data->house_name;?></a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i><span><?=$data->address;?></span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        Pin
                                        <span><?=!empty($data->pin)?$data->pin : '******';?></span>
                                    </li>

                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>Area:<?=$data->area;?> sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <span>City: <?=$data->city;?></span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>Date: <?=$data->date;?></span>
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
                                    ?>Data Not Find
                    <?
                                 }
                                ?>


                </div>

            </div>

            <aside class="col-lg-4 col-md-12 car order-first order-md-last">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="widget-boxed main-search-field">
                        <div class="widget-boxed-header">
                            <h4>Find Your Property</h4>
                        </div>
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Lookin for -->

                                <!--/ End Form Lookin for -->
                                <style>
                                .scrollable-menu {
                                    height: auto;
                                    max-height: 200px;
                                    overflow-x: hidden;
                                }

                                </style>
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <select class="nice-select form-control wide " id="country_s" tabindex="0"><span
                                            class="current"><i class="fa fa-map-marker"></i>State</span>
                                        <ul class="list scrollable-menu ">
                                            <option value="" class="option  ">State</option>
                                            <?
                                                    $fnd_state = $this->query->state_finder(array('status'=> '1'),'state_tbl');
                                                    //$fnd_state=$this->query->finder(arrey('status'=>'1'),'state_tbl');
                                                    if($fnd_state){
                                                        foreach($fnd_state->result() as $state){
                                                            ?>
                                            <option value="<?=$state->state?>" class="option "><?=$state->state?>
                                            </option>
                                            <?
                                                        }
                                                    }else{}
                                                    ?>
                                        </ul>
                                    </select>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Categories -->
                                <div class="form-group categories">
                                    <select class="nice-select form-control wide" id="type_s" tabindex="0"><span
                                            class="current"><i class="fa fa-home" aria-hidden="true"></i>Property
                                            Type</span>
                                        <ul class="list">
                                            <option value="" class="option  ">Categories</option>
                                            <option data-value="1" value="house" class="option">Individual House
                                            </option>
                                            <option data-value="2" value="commercial" class="option">Commercial
                                            </option>
                                            <option data-value="3" value="apartment" class="option">Stand Alone
                                                Apartment
                                            </option>
                                            <option data-value="4" value="lot" class="option">Lot</option>
                                            <option data-value="5" value="complex" class="option">Residential
                                                Complex</option>

                                            <option data-value="4" value="com_space" class="option">Commercial space
                                            </option>
                                            <option data-value="4" value="garage" class="option">Garage</option>
                                            <option data-value="4" value="shop" class="option">Shop</option>
                                            <option data-value="4" value="vacant_land" class="option">Vacant Land
                                            </option>
                                        </ul>
                                    </select>
                                </div>
                                <!--/ End Form Categories -->
                                <!-- Form Property Status -->

                                <!--/ End Form Property Status -->
                                <!-- Form Bedrooms -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Enter Pincode..." id="pin_s">
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->

                                <!--/ End Form Bathrooms -->
                            </form>
                        </div>
                        <!--/ End Search Form -->

                        <!-- Price Fields -->

                        <div class="main-search-field-2">

                            <p id="demo"></p>
                            <div class="range-slider">
                                <label>Price Range</label>
                                <div id="price-range" data-min="0" data-max="100000000" data-unit=""
                                    class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <input type="hidden" class="first-slider-value" id="min_price">
                                    <input type="hidden" class="second-slider-value" id="max_price">

                                    <div class="ui-slider-range ui-widget-header ui-corner-all"
                                        style="left: 0%; width: 100%;"></div><a
                                        class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                                        style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all"
                                        href="#" style="left: 100%;"></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                        <!-- More Search Options -->

                        <!-- More Search Options / End -->
                        <div class="col-lg-12 no-pds">
                            <div class="at-col-default-mar">
                                <button class="btn btn-default hvr-bounce-to-right" id="search_s"
                                    type="submit">Search</button>
                            </div>
                        </div>
                    </div>

                    <?
                   // $start_date = date("Y-m-d");
                    $beetw =array(
                        'date <=' =>date("Y-m-d"),
                        'date >=' =>date('Y-m-d', strtotime('-7 days'))
                    );

                
                        $item_nw_arvl =$this->query->findBetween($beetw,'5', 'house_dtl_tbl');
                                if($item_nw_arvl){
                            ?>
                    <div class="widget-boxed mt-5" style="z-index: 1;">
                        <div class="widget-boxed-header">
                            <h4>Recent Properties</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">

                                <?
                            foreach($item_nw_arvl->result() as $rowitem){
                                ?>
                                <div class="recent-main mb-2">
                                    <div class="recent-img">
                                        <a href="#">
                                            <? 
                                                    $get_img_url = $this->query->getlastimg1(array('house_id'=>$rowitem->house_id));
                                        ?>

                                            <img src="<?=base_url();?>/uploads/<?=!empty($get_img_url)? $get_img_url : 'https://propertyforyou.in//assets/images/feature-properties/fp-1.jpg';?>"
                                                alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6><?=$rowitem->house_name;?></h6>
                                        </a>
                                        <p>₹<?=$rowitem->price;?></p>
                                    </div>
                                </div>
                                <?
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <?
                        }else{
                                        echo('no data');
                        }
                    ?>
                </div>
            </aside>
        </div>

    </div>

</section>
<!-- END SECTION PROPERTIES LISTING -->





<script>
$(document).ready(function() {
    $('#search_s').click(function(e) {
        e.preventDefault();

        var pin_s = $("#pin_s").val();
        var type_s = $("#type_s option:selected").val();
        var country_s = $("#country_s option:selected").val();
        var min_price = $("#min_price").val();
        var max_price = $("#max_price").val();
        max_price = parseFloat(max_price.replace(/,/g, ''));
        min_price = parseFloat(min_price.replace(/,/g, ''));

        location.replace('<?=base_url();?>/home/search_page?type_s=' + type_s + '&state=' +
            country_s + '&min_price=' + min_price + '&pin_s=' + pin_s + '&max_price=' + max_price);


    });
});
</script>
