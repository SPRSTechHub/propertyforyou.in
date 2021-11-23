<?
$house_id=$this->input->get('house_id');
if(empty($house_id)){
redirect('https://propertyforyou.in');
}else{
    $house_dtl=$this->query->finder(array('house_id'=>$house_id),'house_dtl_tbl');

    //$house_desc=$this->query->finder(array('house_id'=>$house_id),'description_tbl');

?>
<style>
.author__contact li {
    margin-bottom: 0 !important;
}
</style>

<!-- START SECTION PROPERTIES LISTING -->
<section class="single-proper blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12">
                        <section class="headings-2 pt-0">
                            <div class="pro-wrapper">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <h3><?=$house_dtl->row()->house_name;?> <span class="mrg-l-5 category-tag">For
                                                <?=$house_dtl->row()->purpose;?></span>
                                        </h3>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>77 -
                                                <?=$house_dtl->row()->address;?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single detail-wrapper mr-2">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h4 style="min-width: 80px;">₹<?=$house_dtl->row()->price;?></h4>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <p><?=$house_dtl->row()->area;?> sq ft</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- main slider carousel items -->
                        <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                            <h5 class="mb-4">Gallery</h5>
                            <div class="carousel-inner">
                                <div class="active item carousel-item" data-slide-number="0">
                                    <?
                                           $call_table = $this->query->getQuery
                                            ("SELECT * FROM image_tbl WHERE status = '1' AND house_id = '".$house_id."' ORDER BY 'id' DESC LIMIT 1");
                                            
                                            if(empty($call_table)){
                                              ?>
                                    <img src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg"
                                        class="img-fluid" alt="slider-listing">
                                    <?
                                           }else{
                                            ?>
                                    <img src="<?=base_url();?>/uploads/<?=$call_table->row()->image?>" class="img-fluid"
                                        alt="slider-listing">
                                    <?
                                            }
                                        ?>
                                </div>
                                <?
                                   $get_image = $this->query->finder(array('house_id'=> $house_id),'image_tbl');
                                   if($get_image){
                                    foreach ($get_image->result() as $data) {
                                        ?>
                                <div class="item carousel-item" data-slide-number="0">
                                    <img src="<?=base_url();?>/uploads/<?=$data->image?>" class="img-fluid"
                                        alt="slider-listing">
                                </div>
                                <?
                                    }}else{}
                                 ?>



                                <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                                        class="fa fa-angle-left"></i></a>
                                <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                                        class="fa fa-angle-right"></i></a>

                            </div>
                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators smail-listing list-inline">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                        data-target="#listingDetailsSlider">
                                        <?
                                           $call_table = $this->query->getQuery
                                            ("SELECT * FROM image_tbl WHERE status = '1' AND house_id = '".$house_id."' ORDER BY 'id' DESC LIMIT 1");
                                            
                                            if(empty($call_table)){
                                              ?>
                                        <img src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg"
                                            class="img-fluid" alt="slider-listing">
                                        <?
                                           }else{
                                            ?>
                                        <img src="<?=base_url();?>/uploads/<?=$call_table->row()->image?>"
                                            class="img-fluid" alt="slider-listing">
                                        <?
                                            }
                                        ?>
                                    </a>
                                </li>
                                <?
                                   $get_image = $this->query->finder(array('house_id'=> $house_id),'image_tbl');
                                   if($get_image){
                                    foreach ($get_image->result() as $data) {
                                        ?>
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                        data-target="#listingDetailsSlider">
                                        <img src="<?=base_url();?>/uploads/<?=$data->image?>" class="img-fluid"
                                            alt="listing-small">
                                    </a>
                                </li>
                                <?
                                    }}else{}
                                 ?>
                            </ul>
                            <!-- main slider carousel items -->
                        </div>
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Description</h5>
                            <p class="mb-3">
                                <?=$house_dtl->row()->desc1;?>
                            </p>
                            <p class="mb-3">
                                <?=$house_dtl->row()->desc2;?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="single homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">Property Details</h5>
                    <ul class="homes-list clearfix">
                        <li>
                            <span class="font-weight-bold mr-1">Property ID:</span>
                            <span class="det"><?=$house_dtl->row()->house_id;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Property Type:</span>
                            <span class="det"><?=$house_dtl->row()->type;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Property status:</span>
                            <span class="det">For <?=$house_dtl->row()->purpose;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Property Price:</span>
                            <span class="det">₹ <?=$house_dtl->row()->price;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Rooms:</span>
                            <span class="det"><?=$house_dtl->row()->room;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Bedrooms:</span>
                            <span class="det"><?=$house_dtl->row()->bedroom;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Bath:</span>
                            <span class="det"><?=$house_dtl->row()->bathroom;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Garages:</span>
                            <span class="det"><?=$house_dtl->row()->garage;?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Year Built:</span>
                            <span class="det"><?=$house_dtl->row()->b_date;?></span>
                        </li>
                    </ul>
                    <!-- title -->

                    <!-- cars List -->

                </div>




                <?
                $house_rev=$this->query->finder(array('house_id'=>$house_id),'review_tbl');
                if($house_rev){?>
                <section class="reviews comments">
                    <h3 class="mb-5">Reviews</h3>
                    <div class="row mb-5">
                        <?
                    foreach ($house_rev->result() as $data_rev){
                        ?>
                        <ul class="col-12 commented pl-0">
                            <li class="comm-inf">
                                <div class="col-md-2">
                                    <img src="<?=base_url();?>/assets/images/property_logo.png" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-md-10 comments-info">
                                    <div class="conra">
                                        <h5 class="mb-2"><?=$data_rev->name;?></h5>
                                        <div class="rating-box">
                                            <div class="detail-list-rating mr-0">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-4"><?=$data_rev->date;?></p>
                                    <p>
                                        <?=$data_rev->text;?>
                                    </p>

                                </div>
                            </li>

                        </ul>
                        <?
                    }
                    ?>
                    </div>

                </section>
                <?
                }else{

                }
                ?>


                <!-- End Reviews -->

                <!-- Star Add Review -->
                <section class="single reviews leve-comments details">
                    <div id="add-review" class="add-review-box">
                        <!-- Add Review -->
                        <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                        <span class="leave-rating-title">Your rating for this listing</span>
                        <!-- Rating / Upload Button -->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <!-- Leave Rating -->
                                <div class="clearfix"></div>
                                <div class="leave-rating margin-bottom-30">
                                    <input type="radio" name="rating" id="rating-1" value="1" />
                                    <label for="rating-1" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-2" value="2" />
                                    <label for="rating-2" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-3" value="3" />
                                    <label for="rating-3" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-4" value="4" />
                                    <label for="rating-4" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-5" value="5" />
                                    <label for="rating-5" class="fa fa-star"></label>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>

                        <!-- ADD REVIEW FORM START  -->

                        <div class="row">
                            <div class="col-md-12 data">
                                <form action="#">
                                    <input type="hidden" id="house_id" value="<?=$house_id;?>">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="r_name"
                                                placeholder="Full Name" required>
                                        </div>
                                    </div>


                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" id="text" rows="8" placeholder="Review"
                                            required></textarea>
                                    </div>

                                    <button type="submit" id="submit_rev" class="btn btn-primary btn-lg mt-2">Submit
                                        Review</button>
                                </form>
                            </div>
                        </div>

                        <!-- ADD REVIEW FORM END -->

                    </div>
                </section>
                <!-- End Add Review -->
            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="single widget">
                    <!-- end author-verified-badge -->
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4><?=$house_dtl->row()->post_by;?> Information</h4>
                            </div>
                            <? 
                            $show_dtl=$this->query->finder(array('userid'=>$house_dtl->row()->con_email,'dtl'=>'show'),'user_tbl');
                            if(!empty($show_dtl)){?>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">

                                    <div class="author-box clearfix">
                                        <img src="<?=base_url();?>/assets/images/property_logo.png" alt="author-image"
                                            class="author__img">
                                        <h4 class="author__title"><?=$house_dtl->row()->con_name;?></h4>
                                    </div>
                                    <ul class="author__contact">
                                        <li><span class="la la-phone"><i class="fa fa-phone"
                                                    aria-hidden="true"></i></span><a
                                                href="#"><?=$house_dtl->row()->con_phn;?></a></li>
                                        <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i></span><a
                                                href="#"><?=$house_dtl->row()->con_email;?></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <?}else{?>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">
                                    <!-- STATIC -->
                                    <div class="author-box clearfix">
                                        <img src="<?=base_url();?>/assets/images/property_logo.png" alt="author-image"
                                            class="author__img">
                                        <h4 class="author__title">XXXXXX</h4>
                                        <p class="author__meta">XXXXXX</p>
                                    </div>
                                    <ul class="author__contact">
                                        <li><span class="la la-phone"><i class="fa fa-phone"
                                                    aria-hidden="true"></i></span><a href="#">XXXXXX</a></li>
                                        <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i></span><a href="#">XXXXXX</a></li>
                                    </ul>
                                    <!-- STATIC -->
                                    <!-- SUBMIT REQUEST START -->
                                    <div class="agent-contact-form-sidebar">
                                        <div class="show-reg-form modal-open"><a href="#">
                                                <input type="submit" name="sendmessage" class="multiple-send-message"
                                                    value="Show Agent Information" id="" />
                                            </a></div>
                                    </div>
                                    <!-- SUBMIT REQUEST END -->
                                </div>
                            </div>
                            <?}?>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- START SIMILAR PROPERTIES -->
        <section class="similar-property featured portfolio p-0 bg-white-inner">
            <div class="container">
                <h5>Similar Properties</h5>
                <div class="row portfolio-items">
                    <?
                                 $get_dr_history = $this->query->finder(array('status'=> '1'),'house_dtl_tbl');
                                 //$get_dr_history = $this->query->getQuery("SELECT * FROM house_dtl_tbl WHERE status = '1' ASC LIMIT 3");
                                 if($get_dr_history){
                                 foreach ($get_dr_history->result() as $data) {
    
                                ?>


                    <div class="item col-lg-4 col-md-4 col-xs-12 landscapes sale">
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
        </section>
        <!-- END SIMILAR PROPERTIES -->
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
<?
}
?>
<div class="login-and-register-form modal" style="display: none;">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Welcome to <span>Property<strong>For You</strong></span></h3>
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class=""><a href="#tab-1">Register</a></li>
                    <li class="current"><a href="#tab-2">Login</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-contents" style="display: none;">
                        <div class="custom-form">
                            <!-- SIGNUP START  -->
                            <form autocomplete="off">

                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input class="form-control" type="text" id="name">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input class="form-control" type="email" id="userid">
                                    <i class="icon_mail_alt"></i>
                                </div>
                                <div class="form-group">
                                    <label>Your Phone Number</label>
                                    <input class="form-control" type="number" id="phone">
                                    <i class="icon_mail_alt"></i>
                                </div>
                                <div class="form-group">
                                    <label>Your password</label>
                                    <input class="form-control" type="password" id="password">
                                    <i class="icon_lock_alt"></i>
                                </div>
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input class="form-control" type="password" id="con_password">
                                    <i class="icon_lock_alt"></i>
                                </div>
                                <br><br>
                                <a href="#" class="btn_1 rounded full-width add_top_30" id="str_btn">Register Now!</a>
                                <!-- <div class="text-center add_top_10">Already have an acccount? <strong><a
                                            href="<?=base_url();?>/home/signin">Sign In</a></strong></div> -->
                            </form>
                            <!-- SIGNUP END -->
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents" style="display: block;">
                            <div class="custom-form">
                                <!-- LOGIN START  -->
                                <form>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="userid" id="userid_log">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" id="password_log"
                                            value="">
                                        <i class="icon_lock_alt"></i>
                                    </div>

                                    <a href="#" id="check_btn" class="btn_1 rounded full-width">Login</a>
                                    <!-- <div class="text-center add_top_10">New to Find Houses? <strong><a href="#">Sign
                                                up!</a></strong></div> -->
                                </form>
                                <!-- LOGIN END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












<div class="modal fade" id="other_modal" tabindex="-1" role="dialog" aria-labelledby="other_modalTitle"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #ff0000;" id="other_modalTitle">Alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="message"></p>
            </div>
        </div>
    </div>
</div>




<script>
$(document).ready(function() {
    $('#submit_rev').click(function(e) {
        e.preventDefault();
        var name = $("#r_name").val();
        var house_id = $("#house_id").val();
        var text = $("#text").val();
        var datastring = {
            house_id: house_id,
            name: name,
            text: text,
        };
        if (name == '') {
            $("#other_modal").modal('show');
            $('#message').html('Empty Name...!');
        } else if (text == '') {

            $("#other_modal").modal('show');
            $('#message').html('Empty Text...!');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/review/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
                    if (data.error == '2') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    } else if (data.error == '1') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    } else if (data.error == '0') {
                        location.replace(
                            '<?=base_url();?>/home/desc/?house_id=<?=$house_id;?>');
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    }
                }
            });
        }
    });
});
</script>







<script>
$(document).ready(function() {
    $('#str_btn').click(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var userid = $("#userid").val();
        var phone = $("#phone").val();
        var password = $("#password").val();
        var con_password = $("#con_password").val();
        var datastring = {
            name: name,
            userid: userid,
            phone: phone,
            password: password,
        };
        if (userid == '') {
            $("#other_modal").modal('show');
            $('#message').html('Id is empty ...!');
        } else if (name == '') {
            $("#other_modal").modal('show');
            $('#message').html('Name empty ...!');
        } else if (phone == '') {
            $("#other_modal").modal('show');
            $('#message').html('Phone empty ...!');
        } else if (password == '') {
            $("#other_modal").modal('show');
            $('#message').html('password empty ...!');
        } else if (password != con_password) {
            $("#other_modal").modal('show');
            $('#message').html('password and Confirm password does not match.');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/store_cust/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
                    if (data.error == '2') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    } else if (data.error == '1') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    } else if (data.error == '0') {
                        $("#other_modal").modal('show');
                        $('#message').html('Successfully Signup, Now you Can Login.');
                        location.replace(
                            '<?=base_url();?>/home/desc/?house_id=<?=$house_id;?>');
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    }
                }
            });
        }
    });
});
</script>











<script>
$(document).ready(function() {
    $('#check_btn').click(function(e) {
        e.preventDefault();
        var userid = $("#userid_log").val();
        var password = $("#password_log").val();
        var datastring = {
            userid: userid,
            password: password
        };
        if (userid == '') {
            $("#other_modal").modal('show');
            $('#message').html('Id is empty ...!');
        } else if (password == '') {

            $("#other_modal").modal('show');
            $('#message').html('password empty ...!');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/checking_tbl/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
                    if (data.error == '2') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    } else if (data.error == '1') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    } else if (data.error == '0') {
                        location.replace(
                            '<?=base_url();?>/home/desc/?house_id=<?=$house_id;?>');
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    }
                }
            });
        }
    });
});
</script>