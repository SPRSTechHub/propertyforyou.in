<script src="<?=base_url();?>assets/js/dropzone.js"></script>
<style>
.side-widget {
    background-color: #1d293e;
    border-radius: 15px;
    color: #FFFFFF !important;
}
</style>

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
<!-- START SECTION USER PROFILE -->
<section class="blog blog-section blog-pots p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-3 col-xs-12 pl-0 user-dash2 pt-4">
                <?
            if($this->session->has_userdata('post_data')){
                $post_data=$this->session->post_data;
                if($this->session->has_userdata('img_data')){
                    $post_img_data=$this->session->img_data;
                    }else{
                        $post_img_data=false;
                    }
                    ?>
                <div class="single-add-property img_box">
                    <h3>property Media<small> *Minimum One image mandatory</small> <input type="hidden"
                            value="<?=!empty($post_img_data)? count($post_img_data): '';?>" id="img_counter" />
                        <span id="img_counter_txt"><?=!empty($post_img_data)? count($post_img_data): '';?> </span>
                    </h3>
                    <div class="property-form-group">
                        <div class="d-flex justify-content-between">
                            <div class="card card-body customFile"><small>Primary</small>
                                <input type="file" name="file" id="file1" class="_upload" />
                                <input type="submit" name="submit" value="Upload" class="_upload_btn"
                                    style="display: none;" />
                            </div>
                            <div class=" card card-body customFile"><small>Optional</small>
                                <input type="file" name="file" id="file" class="_upload" />
                                <input type="submit" name="submit" value="Upload" class="_upload_btn"
                                    style="display: none;" />
                            </div>
                            <div class=" card card-body customFile"><small>Optional</small>
                                <input type="file" name="file" id="file3" class="_upload" />
                                <input type="submit" name="submit" value="Upload" class="_upload_btn"
                                    style="display: none;" />
                            </div>
                            <div class=" card card-body customFile"><small>Optional</small small>
                                <input type="file" name="file" id="file4" class="_upload" />
                                <input type="submit" name="submit" value="Upload" class="_upload_btn"
                                    style="display: none;" />
                            </div>
                            <div class=" card card-body customFile"><small>Optional</small>
                                <input type="file" name="file" id="file5" class="_upload" />
                                <input type="submit" name="submit" value="Upload" class="_upload_btn"
                                    style="display: none;" />
                            </div>
                        </div>
                    </div>
                    <div class="add-property-button pt-5">
                        <div class="d-flex justify-content-between">
                            <div class="6">
                                <div class="prperty-submit-button">
                                    <button type="button" id="clear2">Clear Data</button>
                                </div>
                            </div>
                            <div class="">
                                <div class="prperty-submit-button">
                                    <button type="button" id="fnl_store_btn">Submit Property</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?}else{?>
                <div class="details_box">
                    <div class="single-add-property">
                        <h3>Property description and price</h3>
                        <div class="property-form-group">
                            <!-- 1ST DIVISION START -->
                            <input type="hidden" id="userid" value="<?=$user_data->userid;?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="title">Property Title</label>
                                        <input type="text" name="house_name" id="house_name"
                                            placeholder="Enter your property title">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">Property Description 1 *</label>
                                        <textarea id="desc1" name="desc1"
                                            placeholder="Describe about your property"></textarea>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">Property Description 2</label>
                                        <textarea id="desc2" name="pro-dexc"
                                            placeholder="Describe about your property"></textarea>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                    <div class="form-group categories">
                                        <label for="price">Purpose</label>
                                        <select class="nice-select form-control wide" id="purpose" tabindex="0">
                                            <ul class="list">
                                                <option data-value="1" value="rent" class="option">Rent</option>
                                                <option data-value="2" valu="sale" class="option">Sale</option>
                                                <option data-value="1" value="pg" class="option">PG</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                    <div class="form-group categories">
                                        <label for="price">Type</label>
                                        <select class="nice-select form-control wide" id="type" tabindex="0">
                                            <ul class="list">
                                                <option data-value="1" value="house" class="option">house</option>
                                                <option data-value="2" value="commercial" class="option">commercial
                                                </option>
                                                <option data-value="3" value="apartment" class="option">apartment
                                                </option>
                                                <option data-value="4" value="lot" class="option">lot</option>
                                                <option data-value="5" value="garage" class="option">garage</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                    <div class="form-group categories">
                                        <label for="price">Room</label>
                                        <select class="nice-select form-control wide" id="room" tabindex="0">
                                            <ul class="list">
                                                <option data-value="1" value="1" class="option">1</option>
                                                <option data-value="2" value="2" class="option">2</option>
                                                <option data-value="3" value="3" class="option">3</option>
                                                <option data-value="4" value="4" class="option">4</option>
                                                <option data-value="5" value="5" class="option">5</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" placeholder="INR" id="price">
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input type="text" name="area" placeholder="Sqft" id="area">
                                    </p>
                                </div>
                            </div>
                            <!-- 1ST DIVISION END -->
                        </div>
                    </div>
                    <!-- ADDRESS START -->
                    <div class="single-add-property">
                        <h3>property Location</h3>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p>
                                        <label for="address">Address</label>
                                        <input type="text" name="address" placeholder="Enter Your Address" id="address">
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p>
                                        <label for="landmark">*Add Landmark</label>
                                        <input type="text" name="landmark" placeholder="Nearest Landmark" id="landmark">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <p>
                                        <label for="city">City</label>
                                        <input type="text" name="city" placeholder="Enter Your City" id="city">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p>landmark
                                        <label for="pin" class="pb-3">Pincode*</label>
                                        <input type="text" name="pin" placeholder="Enter Your Address" id="pin"
                                            required>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group categories">
                                        <label for="price">State</label>
                                        <select class="nice-select form-control wide" id="state" tabindex="0">
                                            <ul class="list">
                                                <?
                                                    $fnd_state = $this->query->finder(array('status'=> '1'),'state_tbl');
                                                    if($fnd_state){
                                                        foreach($fnd_state->result() as $state){
                                                            ?>
                                                <option value="india" class="option"><?=$state->state?></option>
                                                <?
                                                        }
                                                    }
                                                    ?>
                                            </ul>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p>
                                        <label for="country" class="pb-3">Country</label>
                                        <input type="text" name="country" placeholder="Enter Your Country" id="country"
                                            value="INDIA">
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ADDRESS END -->

                    <!-- EXTRA START HERE -->
                    <div class="single-add-property">
                        <h3>Extra Information</h3>
                        <div class="property-form-group">
                            <div class="row">

                                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                    <div class="form-group categories">
                                        <label for="price">House Age</label>
                                        <select class="nice-select form-control wide" tabindex="0" id="b_date">
                                            <ul class="list">
                                                <option data-value="0-1" value="0-1" class="option">0-1 years</option>
                                                <option data-value="0-5" value="0-5" class="option">0-5 years</option>
                                                <option data-value="0-10" value="0-10" class="option">0-10 years
                                                </option>
                                                <option data-value="0-15" value="0-15" class="option">0-15 years
                                                </option>
                                                <option data-value="0-20" value="0-20" class="option">0-20 years
                                                </option>
                                                <option data-value="0-50" value="0-50" class="option">0-50 years
                                                </option>
                                                <option data-value="50+" value="50+" class="option">50+ years</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                    <div class="form-group categories">
                                        <label for="price">Bedroom</label>
                                        <select class="nice-select form-control wide" tabindex="0" id="bedroom">
                                            <ul class="list">
                                                <option data-value="1" value="1" class="option">1</option>
                                                <option data-value="2" value="2" class="option">2</option>
                                                <option data-value="1" value="3" class="option">3</option>
                                                <option data-value="2" value="4" class="option">4</option>
                                                <option data-value="1" value="5" class="option">5</option>
                                                <option data-value="2" value="6" class="option">6</option>
                                                <option data-value="2" value="6+" class="option">6+</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                    <div class="form-group categories">
                                        <label for="price">Bathroom</label>
                                        <select class="nice-select form-control wide" tabindex="0" id="bathroom">
                                            <ul class="list">
                                                <option data-value="1" value="1" class="option">1</option>
                                                <option data-value="2" value="2" class="option">2</option>
                                                <option data-value="1" value="3" class="option">3</option>
                                                <option data-value="2" value="4" class="option">4</option>
                                                <option data-value="1" value="5" class="option">5</option>
                                                <option data-value="2" value="6" class="option">6</option>
                                                <option data-value="2" value="6+" class="option">6+</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- EXTRA END HERE -->

                    <!-- CONTACT START -->
                    <div class="single-add-property">
                        <h3>Contact Information</h3>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p>
                                        <label for="con-name">Name</label>
                                        <input type="text" placeholder="Enter Your Name" id="con_name" name="con_name">
                                    </p>
                                </div>
                                <!--div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="con-user">Username</label>
                                    <input type="text" placeholder="Enter Your Username" id="con_user" name="con_user">
                                </p>
                            </div-->
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb first">
                                        <label for="con-email">Email</label>
                                        <input type="email" placeholder="Enter Your Email" id="con_email"
                                            name="con_email">
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="con-phn">Phone</label>
                                        <input type="text" placeholder="Enter Your Phone Number" id="con_phn"
                                            name="con_phn">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="add-property-button pt-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="prperty-submit-button right">
                                        <button type="submit" id="store_btn_next">Next Step</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTACT END -->
                </div>
                <?}?>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3 pt-4">
                <div class="dashborad-box side-widget rounded-lg text-white">
                    <h4 class="title text-white">Top Listings</h4>
                    <div class="section-body">
                        <div class="widget-boxed-body">
                            <div class="recent-post">
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="https://code-theme.com/html/findhouses/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6 class="text-white">Family Modern Home</h6>
                                        </a>
                                        <p>$230,000</p>
                                    </div>
                                </div>
                                <div class="recent-main my-4">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="https://code-theme.com/html/findhouses/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6 class="text-white">Luxury Villa House</h6>
                                        </a>
                                        <p>$120,000</p>
                                    </div>
                                </div>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="https://code-theme.com/html/findhouses/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6 class="text-white">Luxury Family Home</h6>
                                        </a>
                                        <p>$150,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashborad-box side-widget rounded-lg text-white">
                    <h4 class="title text-white">Top Listings</h4>
                    <div class="section-body">
                        <div class="widget-boxed-body">
                            <div class="recent-post">
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="https://code-theme.com/html/findhouses/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6 class="text-white">Family Modern Home</h6>
                                        </a>
                                        <p>$230,000</p>
                                    </div>
                                </div>
                                <div class="recent-main my-4">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="https://code-theme.com/html/findhouses/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6 class="text-white">Luxury Villa House</h6>
                                        </a>
                                        <p>$120,000</p>
                                    </div>
                                </div>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="#"><img
                                                src="https://code-theme.com/html/findhouses/images/feature-properties/fp-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="#">
                                            <h6 class="text-white">Luxury Family Home</h6>
                                        </a>
                                        <p>$150,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION USER PROFILE -->

<script>
$(document).ready(function() {
    $('#store_btn_next').click(function(e) {
        e.preventDefault();
        var userid = $("#userid").val();
        var house_name = $("#house_name").val();
        var desc1 = $("#desc1").val();
        var desc2 = $("#desc2").val();
        var desc3 = $("#desc3").val();
        var desc4 = $("#desc4").val();
        var pin = $("#pin").val();
        var purpose = $("#purpose option:selected").val();
        var type = $("#type option:selected").val();
        var room = $("#room option:selected").val();
        var price = $("#price").val();
        var area = $("#area").val();
        var address = $("#address").val();
        var landmark = $("#landmark").val();
        var city = $("#city").val();
        var state = $("#state option:selected").val();
        var country = $("#country").val();
        var b_date = $("#b_date option:selected").val();
        var bedroom = $("#bedroom option:selected").val();
        var bathroom = $("#bathroom option:selected").val();
        var con_name = $("#con_name").val();
        var con_user = '<?=$user_data->userid;?>';
        var con_email = $("#con_email").val();
        var con_phn = $("#con_phn").val();

        var datastring = {
            userid: userid,
            house_name: house_name,
            desc1: desc1,
            desc2: desc2,
            purpose: purpose,
            type: type,
            room: room,
            price: price,
            pin: pin,
            area: area,
            address: address,
            landmark: landmark,
            city: city,
            state: state,
            country: country,
            b_date: b_date,
            bedroom: bedroom,
            bathroom: bathroom,
            con_name: con_name,
            con_user: con_user,
            con_email: con_email,
            con_phn: con_phn,
        };
        if (userid == '') {
            $("#other_modal").modal('show');
            $('#message').html('Empty House Id...!');
        } else if (house_name == '') {
            $("#other_modal").modal('show');
            $('#message').html('Empty House Name...!');
        } else if (bathroom == '' || desc1 == '' || purpose == '' || type == '' || room == '' ||
            price == '' || con_email == '' || con_user == '' || con_name == '' ||
            area == '' || landmark == '' | pin == '' || address == '' || city == '' || state == '' ||
            country == '' ||
            b_date == '' ||
            bedroom == '' || con_phn == '') {
            $("#other_modal").modal('show');
            $('#message').html('All fields are mandatory');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/store_list_tbl/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
                    if (data.status == '2') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.message);
                    } else if (data.status == '1') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.message);
                    } else if (data.status == '0') {
                        $("#other_modal").modal('show');
                        $('#message').html(data.message);
                        $('#hidd').val(data.houseid);
                        $('.details_box').hide();
                        $('.img_box').show();
                        location.replace('<?=base_url();?>/home/listing');
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html('Error!');
                    }
                }
            });
        }
    });
});
</script>

<script>
var filesize = '0';
$(document).ready(function() {

    $("#fnl_store_btn").click(function(e) {
        e.preventDefault();
        var t = $('#img_counter').val();
        if (t >= 1) {
            var userid = '<?=$user_data->userid;?>';
            $.post("<?=base_url();?>functions/store_list_tbl/", {
                'permission': 'sprsinc'
            }, function(result) {
                $("#other_modal").modal('show');
                $('#message').html(result.message);
                location.replace('<?=base_url();?>/home/my_listing');
            }, "json");

        } else {
            $("#other_modal").modal('show');
            $('#message').html('Select atleast one image');
        }

    });

    $('._upload').change(function() {
        $(this).closest('div.customFile').find('._upload_btn').css("display", "block");
    });

    $('._upload_btn').click(function(e) {
        e.preventDefault();
        var hid = '<?=!empty($post_data['house_id'])? $post_data['house_id'] : '' ; ?>';
        var myFormData = $(this).closest('div.customFile').find('._upload');
        var data = myFormData.attr("id");
        var file_data = $("#" + data).prop("files")[0];
        var form_data = new FormData();
        form_data.append("hid", hid);
        form_data.append("file", file_data);
        if (hid == "") {
            $("#other_modal").modal('show');
            $('#message').html('Your session closed! Please re-login to post.');
        } else {
            $.ajax({
                url: '<?=base_url();?>/functions/store_img_session/',
                type: 'POST',
                processData: false,
                contentType: false,
                dataType: 'json',
                data: form_data,
                success: function(result) {
                    if (result.status == '2') {
                        $("#other_modal").modal('show');
                        $('#message').html(result.result);
                    } else if (result.status == '0') {

                        $("#other_modal").modal('show');
                        $('#message').html(result.result);
                        $('#img_counter').val(result.data);
                        $('#img_counter_txt').text(result.data);
                        $(this).closest('div.customFile').find('small').find('img')
                            .remove();
                        $(this).closest('div.customFile').find('img').after(
                            '<img src="https://propertyforyou.in//assets/images/icons/check.png" width="34" height="34"/>'
                        );
                        myFormData.hide();
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html('Error!');
                    }
                }
            });
        }

    });


    $("._upload").change(function() {
        var $this = $(this);
        var imgfile = (this.files[0]);
        filesize = '2000000'; // 2 mb
        // Allowing file type
        var allowedExtensions = ["image/gif", "image/jpeg", "image/png"];

        var fileType = imgfile["type"];

        if (this.files && this.files[0]) {
            var a = (this.files[0].size);
            if (a > filesize) {
                $this.val('');
                $("#other_modal").modal('show');
                $('#message').html('Pls upload file maxmimum 2mb!');
                return false;
            } else if ($.inArray(fileType, allowedExtensions) < 0) {
                $this.val('');
                $("#other_modal").modal('show');
                $('#message').html('Not supported format!');
                return false;
            } else if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $this.find('img').remove();
                    $this.after('<img src="' + e.target.result +
                        '" width="220" height="120"/>');
                };
                reader.readAsDataURL(this.files[0]);
            }
        }
    });

});
</script>