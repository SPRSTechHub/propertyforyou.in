<?

$house_id =$this->input->get('hid');
?>
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>UPDATE IMAGES</h1>

        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION PRICING -->
<section class="pricing-table bg-white-2">
    <div class="container">
        <div class="section-title">
            <h2>Update Images</h2>
        </div>
        <div class="row">
            <?
                        $fnd_img=$this->query->finder(array('house_id'=>$house_id),'image_tbl');
                        if($fnd_img){
                            foreach($fnd_img->result() as $all_img){
                                ?>

            <div class="col-lg-4">
                <div class="card" style="">
                    <img class="card-img-top" src="https://propertyforyou.in/uploads/<?=$all_img->image?>"
                        alt="Card image">
                    <div class="card-body">
                        <!-- <a href="" class="btn btn-primary" id="sub<?=$all_img->image?>" >Update Photo</a> -->
                        <form method="post" action="#" enctype="multipart/form-data" id="category_form">
                            <span id="house_img_txt"></span>
                            <input type="text" value="<?=$all_img->image?>" name="old_img">
                            <input type="file" class="file-input bg-info" aria-describedby="inputGroupFileAddon01"
                                name="house_img" id="house_img" accept="image/*"
                                onchange="snd_img('<?=$all_img->image?>')">
                        </form>
                    </div>
                </div>
            </div>

            <?
                            }
                        }else{
                            echo('image not found');
                        }
                        ?>
        </div>


    </div>
</section>
<!-- END SECTION PRICING -->





<div class="modal fade" id="other_modal" tabindex="-1" role="dialog" aria-labelledby="other_modalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="other_modalTitle">Alert</h5>
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
function snd_img(image_id) {

    var form_data = new FormData(document.getElementById("category_form"));
    //var cat_name = $("#cat_name").val();
    var extension = $('#house_img').val().split('.').pop().toLowerCase();

    if ($('#house_img').val() == '') {
        $("#other_modal").modal('show');
        $('#message').html('Empty Category.');
    } else {
        $("#house_img_txt").text("Wait For Some Time, don't refresh the page...");
        $.ajax({
            url: '<?=base_url();?>functions/store_house_img/',
            type: 'post',
            data: form_data,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(data) {
                if (data.status == '0') {

                    $("#other_modal").modal('show');
                    $('#message').html('upadte successfully...');
                } else if (data.status == '2') {
                    $("#other_modal").modal('show');
                    $('#message').html('uploading Error !');
                } else {
                    $("#other_modal").modal('show');
                    $('#message').html('Try after sometime.');
                }
            },
        });
    }
}
</script>