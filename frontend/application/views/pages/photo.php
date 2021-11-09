<?
$house_id=$this->input->get('house_id');
?>

<script src="<?=base_url();?>assets/js/dropzone.js"></script>

<!-- MAIN JS -->

<script>
$(".header-user-name").on("click", function() {
    $(".header-user-menu ul").toggleClass("hu-menu-vis");
    $(this).toggleClass("hu-menu-visdec");
});
</script>
<!-- START SECTION USER PROFILE -->
<section class="user-page section-padding pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6 royal-add-property-area section_100 pl-0 user-dash2">
                <div class="single-add-property img_box">
                    <h3>property Media</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <div>
                                        <div>
                                            <h2>PHP - Multiple Image upload using dropzone.js</h2>

                                            <form action="/functions/uploadFiles/" enctype="multipart/form-data"
                                                id="imageUpload" class="dropzone needsclick">
                                                <input type="text" value="BGL1092" name="hid" hidden />
                                                <div class="dz-message needsclick">
                                                    Drop files here or click to upload.<br />
                                                    <span class="note needsclick">(Please upload <strong>PG, GIF,
                                                            PNG</strong> files only.)</span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <script type=" text/javascript">
                                Dropzone.options.imageUpload = {
                                    paramName: "file", // The name that will be used to transfer the file
                                    maxFilesize: 2, // MB
                                    acceptedFiles: 'image/*'
                                };
                                Dropzone.imageUpload.on("complete", function(file) {
                                    imageUpload.removeFile(file);
                                });
                                </script>

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
    $(".overlay").hide();
    $('#submitpan').click(function(e) {

        e.preventDefault();
        var form_data = new FormData(document.getElementById("panimgfrm1"));
        var house_id = $("#house_id").val();
        var extension = $('#propertyimage').val().split('.').pop().toLowerCase();

        if ($('#propertyimage').val() == '') {
            $("#other_modal").modal('show');
            $('#message').html('Choose Image.');
        } else {
            $("#propertyimage_txt").text("Wait For Some Time, don't refresh the page...");
            $.ajax({
                url: '<?=base_url();?>functions/storeimg/',
                type: 'post',
                data: form_data,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(data) {
                    if (data.status == '0') {
                        $("#propertyimage_txt").text("upadte successfully...");
                        //$('#responser_icon').attr('src',
                        //    "https://www.pinclipart.com/picdir/big/528-5285401_success-png-image-correct-icon-png-clipart.png");
                    } else if (data.status == '2') {
                        $("#other_modal").modal('show');
                        $('#message').html('uploading Error !');
                    } else if (data.status == '5') {
                        $("#other_modal").modal('show');
                        $('#message').html('You Can Upload Maximum 10 image .');
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html('Try after sometime.');
                    }
                },
            });
        }

    });
});
</script>