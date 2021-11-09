<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right featured portfolio blog pt-5">
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
                                            alt="home-1" class="img-responsive">
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
                                    ?>Data Not Find
                    <?
                                 }
                                ?>


                </div>

            </div>

            <aside class="col-lg-4 col-md-12 car">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="widget-boxed main-search-field">
                        <div class="widget-boxed-header">
                            <h4>Find Your House</h4>
                        </div>
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Lookin for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Enter House Name..." id="house_name_s" />
                                        </div>
                                    </div>
                                </div>
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
                                    <select class="nice-select form-control wide" id="country_s" tabindex="0"><span
                                            class="current"><i class="fa fa-map-marker"></i>Location</span>
                                        <ul class="list scrollable-menu">
                                            <option value="" class="option  ">Location</option>
                                            <?
                                                    $fnd_state = $this->query->finder(array('status'=> '1'),'state_tbl');
                                                    //$fnd_state=$this->query->finder(arrey('status'=>'1'),'state_tbl');
                                                    if($fnd_state){
                                                        foreach($fnd_state->result() as $state){
                                                            ?>
                                            <option value="<?=$state->state?>" class="option"><?=$state->state?>
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
                                            <option value="house" class="option ">House</option>
                                            <option value="apartment" class="option">Apartment</option>
                                            <option value="land" class="option">Land</option>
                                            <option value="lungalow" class="option">Bungalow</option>
                                        </ul>
                                    </select>
                                </div>
                                <!--/ End Form Categories -->
                                <!-- Form Property Status -->
                                <div class="form-group categories">
                                    <select class="nice-select form-control wide" id="purpose_s" tabindex="0"><span
                                            class="current"><i class="fa fa-home"></i>Property Status</span>
                                        <ul class="list">
                                            <option value="" class="option  ">Property Status</option>
                                            <option value="sale" class="option">For Sale</option>
                                            <option value="rent" class="option">For Rent</option>
                                        </ul>
                                    </select>
                                </div>
                                <!--/ End Form Property Status -->
                                <!-- Form Bedrooms -->
                                <div class="form-group beds">
                                    <select class="nice-select form-control wide" id="bedroom_s" tabindex="0"><span
                                            class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                        <ul class="list">
                                            <option value="" class="option ">Bedrooms</option>
                                            <option value="1" class="option ">1</option>
                                            <option value="2" class="option">2</option>
                                            <option value="3" class="option">3</option>
                                            <option value="3" class="option">4</option>
                                            <option value="3" class="option">5</option>
                                            <option value="3" class="option">6</option>
                                            <option value="3" class="option">7</option>
                                            <option value="3" class="option">8</option>
                                            <option value="3" class="option">9</option>
                                            <option value="3" class="option">10</option>
                                        </ul>
                                    </select>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <select class="nice-select form-control wide" id="bathroom_s" tabindex="0"><span
                                            class="current"><i class="fa fa-bath" aria-hidden="true"></i>
                                            Bathrooms</span>
                                        <ul class="list">
                                            <option value="" class="option ">Bathrooms</option>
                                            <option value="1" class="option ">1</option>
                                            <option value="2" class="option">2</option>
                                            <option value="3" class="option">3</option>
                                            <option value="3" class="option">4</option>
                                            <option value="3" class="option">5</option>
                                            <option value="3" class="option">6</option>
                                            <option value="3" class="option">7</option>
                                            <option value="3" class="option">8</option>
                                            <option value="3" class="option">9</option>
                                            <option value="3" class="option">10</option>
                                        </ul>
                                    </select>
                                </div>
                                <!--/ End Form Bathrooms -->
                            </form>
                        </div>
                        <!--/ End Search Form -->

                        <!-- Price Fields -->

                        <div class="main-search-field-2">

                            <p id="demo"></p>
                            <div class="range-slider">
                                <label>Price Range</label>
                                <div id="price-range" data-min="0" data-max="600000" data-unit=""
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

                 

                        $item_nw_arvl =$this->query->findBetween($beetw,'10', 'house_dtl_tbl');
                                if($item_nw_arvl){
                            ?>
                    <div class="widget-boxed mt-5">
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
                                        <a href="#"><img
                                                src="<?=base_url();?>/assets/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
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

                    <!-- <div class="widget-boxed mt-5">
                        <div class="widget-boxed-header">
                            <h4>Recent Properties</h4> 
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">

                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="<?=base_url();?>/assets/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6>Family Modern Home</h6>
                                        </a>
                                        <p>$230,000</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> -->
                    <div class="widget-boxed popular mt-5 mb-0">
                        <div class="widget-boxed-header">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">
                                <div class="tags">
                                    <span><a href="https://propertyforyou.in//home/house"
                                            class="btn btn-outline-primary">Houses</a></span>
                                    <span><a href="https://propertyforyou.in//home/commercial"
                                            class="btn btn-outline-primary">commercial</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="https://propertyforyou.in//home/apartment"
                                            class="btn btn-outline-primary">apartment</a></span>
                                    <span><a href="https://propertyforyou.in//home/lot"
                                            class="btn btn-outline-primary">lot</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="https://propertyforyou.in//home/garage"
                                            class="btn btn-outline-primary">Garage</a></span>
                                    <span><a href="https://propertyforyou.in//home/rent"
                                            class="btn btn-outline-primary">Rent</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="https://propertyforyou.in//home/sale"
                                            class="btn btn-outline-primary">Sale</a></span>

                                </div>

                            </div>
                        </div>
                    </div>
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

        var house_name_s = $("#house_name_s").val();
        var purpose_s = $("#purpose_s option:selected").val();
        var type_s = $("#type_s option:selected").val();
        var bedroom_s = $("#bedroom_s option:selected").val();
        var bathroom_s = $("#bathroom_s option:selected").val();
        var country_s = $("#country_s option:selected").val();

        var min_price = $("#min_price").val();
        var max_price = $("#max_price").val();


        max_price = parseFloat(max_price.replace(/,/g, ''));
        min_price = parseFloat(min_price.replace(/,/g, ''));
        //alert(bedroom_s);
        // var datastring = {
        //     house_name_s: house_name_s,
        //     purpose_s: purpose_s,
        //     type_s: type_s,
        //     country_s: country_s,
        //     bedroom_s: bedroom_s,
        //     bathroom_s: bathroom_s,

        // };
        //alert(min_price);

        location.replace('<?=base_url();?>/home/search_page?house_name_s=' + house_name_s +
            '&purpose_s=' + purpose_s +
            '&type_s=' + type_s + '&country_s=' + country_s + '&bedroom_s=' + bedroom_s +
            '&bathroom_s=' + bathroom_s + '&min_price=' + min_price + '&max_price=' + max_price);

        //location.replace('<?=base_url();?>sms/sendSMS?phone=' + sel_rcvr +
        //       '&message=' + message);
    });
});
</script>