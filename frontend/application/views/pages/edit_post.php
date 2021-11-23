<?
$house_id = $this->uri->segment('3',0);
$get_post_details = $this->query->finder(array('house_id'=>$house_id),'house_dtl_tbl');
?>
<!-- EDIT POST PAGE -->
<section class="user-page section-padding " style="margin-top: 0px;padding-top: 0px;">
    <div class="container-fluid">
        <?
$get_images = $this->query->finder(array('house_id'=>$house_id), 'image_tbl');
if($get_images){
  $get_images=$get_images;
}else{
  $get_images= false;
}
?>
        <div class="row">
            <div class="col-6">
                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                    <h5 class="mb-4">Gallery</h5>
                    <?
                    if(!empty($get_images)){
                        ?>
                    <div class="carousel-inner">
                        <?
                        if(!empty($get_images) && $get_images->num_rows() > 1){
                            $index = 0;
                            $itemClass = 'item carousel-item active';
                            foreach ($get_images->result() as $img_row) {
                                if($index > 0){
                                    $itemClass = 'item carousel-item';
                                }
                                $index++;
                                ?>
                        <div class="<?=$itemClass;?>" data-slide-to="<?=$index;?>">
                            <img src="<?=base_url().'uploads/'.$img_row->image;?>" class="img-fluid"
                                alt="slider-listing">
                        </div>
                        <?}}?>
                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                                class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                                class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-listing list-inline">
                        <?
                        if(!empty($get_images)){
                            $index = 0;
                            $itemClass = 'list-inline-item active';
                            foreach ($get_images->result() as $img_row) {
                                if($index > 0){
                                    $itemClass = 'list-inline-item';
                                }
                                $index++;
                                ?>
                        <li class="<?=$itemClass;?>">
                            <a id="carousel-selector-0" class="selected" data-slide-to="<?=$index;?>"
                                data-target="#listingDetailsSlider">
                                <img src="<?=base_url().'uploads/'.$img_row->image;?>" class="img-fluid"
                                    alt="listing-small">
                            </a>
                        </li>
                        <?}}?>
                    </ul>
                    <!-- main slider carousel items -->
                    <?}else{?>
                    <div class="single-add-property img_box">
                        <h3>property Media</h3>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/functions/uploadFiles/" enctype="multipart/form-data"
                                        id="imageUpload" class="dropzone needsclick dz-clickable">
                                        <input type="text" value="<?=$house_id;?>" id="hidd" name="hid" hidden />
                                        <div class="dz-message needsclick">
                                            Drop files here or click to upload.<br />
                                            <span class="note needsclick">(Please upload <strong>PG, GIF,
                                                    PNG</strong> files only.)</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="<?=base_url();?>assets/js/dropzone.js"></script>
                    <script>
                    Dropzone.options.imageUpload = {
                        paramName: "file", // The name that will be used to transfer the file
                        maxFilesize: 2, // MB
                        acceptedFiles: 'image/*'
                    };
                    Dropzone.imageUpload.on("complete", function(file) {
                        imageUpload.removeFile(file);
                    });
                    </script>
                    <?}?>
                </div>
            </div>
            <div class="col-6">
                <div class="sidebar">
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4>Property Information</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="sidebar-widget author-widget2">
                                <div class="author-box clearfix">
                                    <img src="<?=base_url();?>/assets/images/icons/profile_img.png" alt="author-image"
                                        class="author__img">
                                    <h4 class="author__title">User Name</h4>
                                    <p class="author__meta">User Contact Details</p>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        Already Sold ? 
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <!-- <button class="dropdown-item" onclick="sold_function('1','<?=$house_id;?>')" type="button">Not Sold</button> -->
                                        <button class="dropdown-item" onclick="sold_function('5','<?=$house_id;?>')" type="button">Sold</button>
                                    </div>
                                </div>

                                <!--ul class="author__contact">
                                    <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av
                                        Park, New York</li>
                                    <li><span class="la la-phone"><i class="fa fa-phone"
                                                aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                    <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                                </ul-->
                                <?
                                if($get_post_details->row()->status=='1')
                                {?>
                                <div class="widget-boxed">
                                   <p class="author__meta text-center">Post is live now, You can not edit now. </p>
                                   </div>
                                <?}else if($get_post_details->row()->status=='5'){
                                    ?>
                                    <div class="widget-boxed">
                                   <p class="author__meta text-center">You Sold Your Property. </p>
                                   </div>
                                    <?
                                }else{
                                    ?>
                                    <div class="agent-contact-form-sidebar">
                                    <h4>Update Listing</h4>

                                    <?
                                    if(!empty($get_post_details)){
                                        $data = $get_post_details->row();
                                      //  print_r($get_post_details->row());?>
                                    <form name="hid_update_form" id="hid_update_form" method="post" action="#">
                                        <input type="text" id="fname" name="house_name" placeholder="House Name"
                                            required="" value="<?=$data->house_name;?>">
                                        <textarea placeholder="Message" name="address"
                                            required=""><?=$data->address;?></textarea>
                                        <textarea placeholder="Message" name="desc1"
                                            required=""><?=$data->desc1;?></textarea>
                                        <textarea placeholder="Message" name="desc2"
                                            required=""><?=$data->desc2;?></textarea>
                                        <div cass="d-flex justify-content-arround">
                                            <input type="text" id="pnumber" name="area" placeholder="Area" required=""
                                                value="<?=$data->area;?>">
                                            <input type="number" id="pnumber" name="bathroom" placeholder="Bath room"
                                                required="" value="<?=$data->bathroom;?>">
                                            <input type="text" id="pnumber" name="price" placeholder="Price" required=""
                                                value="<?=$data->price;?>">
                                        </div>

                                        <div cass="d-flex justify-content-arround">
                                            <input type="number" id="b_date" name="b_date" placeholder="Property Age"
                                                required="" value="<?=$data->area;?>">
                                            <input type="text" id="garage_avail" name="garage_avail"
                                                placeholder="Garage Available" required=""
                                                value="<?=$data->bathroom;?>">
                                            <input type="text" id="electricity_avail" name="electricity_avail"
                                                placeholder="Electricity Available" required=""
                                                value="<?=$data->price;?>">
                                        </div>

                                        <div cass="d-flex justify-content-arround">
                                            <input type="text" id="water_avail" name="water_avail"
                                                placeholder="Water Available" required="" value="<?=$data->area;?>">
                                            <input type="text" id="habitable" name="habitable"
                                                placeholder="Presently Habitable" required=""
                                                value="<?=$data->bathroom;?>">
                                            <input type="text" id="lift" name="lift" placeholder="Life Available"
                                                required="" value="<?=$data->price;?>">
                                        </div>

                                        <div cass="d-flex justify-content-arround">
                                            <input type="text" id="floor" name="floor" placeholder="Floor" required=""
                                                value="<?=$data->area;?>">
                                            <input type="text" id="facing" name="facing" placeholder="Property Facing"
                                                required="" value="<?=$data->bathroom;?>">

                                        </div>



                                        <input type="button" name="sendmessage" id="submit_update"
                                            class="multiple-send-message" value="Submit Request">
                                    </form>
                                    <?
                                    }
                                    ?>

                                </div>
                                    <?
                                }
                                ?>
                                   
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

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
$(function() {
    $("#submit_update").click(function(e) {
        e.preventDefault();
        var userid = '<?=$user_data->userid;?>';
        var houseid = '<?=$data->house_id;?>';
        var form = $('#hid_update_form').serialize();

        $.post("<?=base_url();?>functions/store_list_tbl_update/?hid=" + houseid, form, function(
            result) {
            if (result.status == 0) {
                $("#other_modal").modal('show');
                $('#message').html(result.result);
                location.replace('<?=base_url();?>/home/my_listing');
            } else {
                $("#other_modal").modal('show');
                $('#message').html(result.result);
            }
        }, "json");

    });
});
</script>




<script>
function sold_function(status,house_id){
        var status = status;
        var house_id = house_id;
        var datastring = {
            status: status,
            house_id: house_id
        };
        $.ajax({
                url: "<?=base_url();?>functions/sold_function/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
                    $("#other_modal").modal('show');
                    $('#message').html(data.status);
                }
            });
}
</script>