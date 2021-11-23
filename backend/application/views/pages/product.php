<?
                        $res0 = $this->query->finder(array(), 'house_dtl_tbl');
                        if($res0){
                        $peyees = $res0->num_rows();
                        
                        }else{$peyees = '0';
                        }
?>
<!-- BEGIN PAGE LEVEL STYLE -->
<link href="<?=base_url();?>/assets/plugins/icheck/skins/all.css" rel="stylesheet" />
<!-- END PAGE LEVEL STYLE -->
<style>
table {
    display: block;
    max-width: -moz-fit-content;
    max-width: fit-content;
    margin: 0 auto;
    overflow-x: auto;
    white-space: nowrap;
}

</style>
<!--Begin Content-->
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="pvr-wrapper">
                <div class="pvr-box">
                    <h5 class="pvr-header">
                        Property List
                    </h5>
                    <!-- DataTales START -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary p-2">Total Property - <?=$peyees?> </h6>
                            <br />

                            <button class="btn btn-default p-2" onclick="reload_table()"><i
                                    class="glyphicon glyphicon-refresh"></i>
                                Reload</button>
                            <br />
                            <br />
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="table" class="table table-striped table-bordered display" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th style="width:125px;">Action</th>
                                            <th width="100px" nowrap>ID</th>
                                            <th width="100px" nowrap>House_id</th>
                                            <th width="100px" nowrap>Userid</th>
                                            <th width="100px" nowrap>House_name</th>
                                            <th width="100px" nowrap>Address</th>
                                            <th width="100px" nowrap>City</th>
                                            <th width="100px" nowrap>State</th>
                                            <th width="100px" nowrap>Country</th>
                                            <th width="100px" nowrap>Description 1</th>
                                            <th width="100px" nowrap>Description 2</th>
                                            <th width="100px" nowrap>Bedroom</th>
                                            <th width="100px" nowrap>Bathroom</th>
                                            <th width="100px" nowrap>Area</th>
                                            <th width="100px" nowrap>Garage</th>
                                            <th width="100px" nowrap>Price</th>
                                            <th width="100px" nowrap>Type</th>
                                            <th width="100px" nowrap>Room</th>
                                            <th width="100px" nowrap>Construct Date</th>
                                            <th width="100px" nowrap>Purpose</th>
                                            <th width="100px" nowrap>Contact name</th>
                                            <th width="100px" nowrap>Contact Username</th>
                                            <th width="100px" nowrap>Contact Email</th>
                                            <th width="100px" nowrap>Contact Phone</th>
                                            <th width="100px" nowrap>Date</th>
                                            <th width="100px" nowrap>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales END -->
                </div>
            </div>
        </div>

    </div>
</div>
<!--End Content-->

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



<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center">Property Form</h3>
                <a class="btn btn-success" href="" id="img_fetcher_btn">Modify Images</a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">




                        <!-- //locha start  -->
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                <!-- 1ST DIVISION START -->
                                <input type="hidden" name="id" value="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="title">Userid</label>
                                            <input type="text" name="userid" placeholder="">
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="title">Property id</label>
                                            <input type="text" name="house_id_edit" placeholder="" readonly>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="title">Property Title</label>
                                            <input type="text" name="house_name"
                                                placeholder="Enter your property title">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="description">Property Description 1 *</label>
                                            <textarea name="desc1"
                                                placeholder="Describe about your property"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="description">Property Description 2</label>
                                            <textarea name="desc2"
                                                placeholder="Describe about your property"></textarea>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Purpose</label>
                                            <input type="text" name="purpose" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Type</label>
                                            <input type="text" name="type" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb">
                                            <label for="price">Price</label>
                                            <input type="text" placeholder="INR" name="price">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="area">Area</label>
                                            <input type="text" placeholder="Sqft" name="area">
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
                                            <input type="text" placeholder="Enter Your Address" name="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="landmark">*Add Landmark</label>
                                            <input type="text" placeholder="Nearest Landmark" name="landmark">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" placeholder="Enter Your City" name="city">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="pin" class="pb-3">Pincode*</label>
                                            <input type="text" placeholder="Enter Your Pincode" name="pin" required>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="pin" class="pb-3">state*</label>
                                            <input type="text" placeholder="" name="state" required>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country" class="pb-3">Country</label>
                                            <input type="text" placeholder="Enter Your Country" name="country"
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

                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <p class="no-mb last">
                                            <label for="area">Property Age</label>
                                            <input type="text" placeholder="" name="b_date">
                                        </p>
                                    </div>

                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <p class="no-mb last">
                                                <label for="area">Bedroom</label>
                                                <input type="text" placeholder="" name="bedroom">
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <p class="no-mb last">
                                                <label for="area">Bathroom</label>
                                                <input type="text" placeholder="" name="bathroom">
                                            </p>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <p class="no-mb last">
                                                <label for="area">Dining</label>
                                                <input type="text" placeholder="" name="dining">
                                            </p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <p class="no-mb last">
                                                <label for="area">kitchen</label>
                                                <input type="text" placeholder="" name="kitchen">
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <p class="no-mb last">
                                                <label for="area">Balcony</label>
                                                <input type="text" placeholder="" name="balcony">
                                            </p>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Garage Available</label>
                                            <input type="text" name="garage_avail" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Electricity Available</label>
                                            <input type="text" name="electricity_avail" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">

                                            <label for="price">Water Available</label>
                                            <input type="text" name="water_avail" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Presently Habitable</label>
                                            <input type="text" name="habitable" placeholder="">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">



                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Lift Available</label>
                                            <input type="text" name="lift" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">

                                            <label for="price">Floor</label>
                                            <input type="text" name="floor" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">

                                            <label for="price">property facing</label>
                                            <input type="text" name="facing" placeholder="">
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
                                            <input type="text" placeholder="Enter Your Name" name="con_name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <input type="hidden" placeholder="Enter Your Username" name="con_user">
                                            <label for="post_by">I am ... </label>
                                            <input type="text" name="post_by" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="con-email">Email</label>
                                            <input type="email" placeholder="Enter Your Email" name="con_email" value=""
                                                readonly>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="con-phn">Phone</label>
                                            <input type="text" placeholder="Enter Your Phone Number" name="con_phn">
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- CONTACT END -->
                        <!-- //locha end -->









                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger growl-close" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<script>
var p1;

function edit_image(house_id) {
    save_method = 'update';
    // $('#form')[0].reset();
    // $('.form-group').removeClass('has-error');
    // $('.help-block').empty();
    // $.ajax({
    //     url: "<?php echo site_url('Control/ajax_edit/')?>",
    //     type: "GET",
    //     "data": {
    //         tbl: 'house_dtl_tbl',
    //         id: house_id
    //     },
    //     dataType: "JSON",
    //     success: function(data) {

    //         $('[name="house_id"]').val(house_id);

    //         $('#modal_form1').modal('show'); // show bootstrap modal
    //         $('.modal-title').text('Edit Property'); // Set Title to Bootstrap modal title
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) {
    //         //  alert('Error get data from ajax');
    //     }
    // });
    $('[name="house_id"]').val(house_id);

    $('#modal_form1').modal('show'); // show bootstrap modal
    $('.modal-title').text('Edit Property'); // Set Title to Bootstrap modal title
}
</script>
<div class="modal fade" id="modal_form1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center">Approval Notice</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form1" class="form-horizontal">
                    <input type="hidden" value="" name="house_id" id="house_id" />
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary" id="apv_btn"
                            onclick="approveme('1');">Approve</button>
                        <button type="button" class="btn btn-primary" id="dapv_btn"
                            onclick="approveme('2');">Disapprove</button>
                        <button type="button" class="btn btn-primary" id="disco_btn">DoNothing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function approveme(id) {
    var hid = $('#house_id').val();
    if (hid != '') {
        var datastring = {
            house_id: hid,
            status: id
        };
        $.ajax({
            url: "<?=base_url();?>control/ajax_appval/" + 'house_dtl_tbl',
            dataType: 'json',
            method: "POST",
            data: datastring,
            catch: false,
            success: function(data) {
                if (data.status == '2') {
                    $('#modal_form1').modal('hide');
                    reload_table();
                } else {
                    $('#modal_form1').modal('hide');
                    reload_table();
                }
            }
        });
    }
}
</script>

<div class="modal fade" id="image_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body form">
                <input type="text" id="house_image_id" name="house_id">
            </div>
            <script>
            var admin_id = $("#house_image_id").val();
            </script>
            <?
            echo "<script>document.writeln(p1);</script>";
            ?>
        </div>
    </div>
</div>


<div class="modal fade" id="edit_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body form">
                <input type="text" id="house_image_id" name="house_id">
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables 
    table = $('#table').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('control/ajax_list/')?>",
            "data": {
                tbl: 'house_dtl_tbl'
            },
            "type": "POST"
        },
        "columns": [{
                data: 'act'
            }, {
                data: 'id'
            },
            {
                data: 'house_id'
            },
            {
                data: 'userid'
            },
            {
                data: 'house_name'
            },
            {
                data: 'address'
            },
            {
                data: 'city'
            },
            {
                data: 'state'
            },
            {
                data: 'country'
            },
            {
                data: 'desc1'
            },
            {
                data: 'desc2'
            },
            {
                data: 'bedroom'
            },
            {
                data: 'bathroom'
            },
            {
                data: 'area'
            },
            {
                data: 'garage'
            },
            {
                data: 'price'
            },
            {
                data: 'type'
            },
            {
                data: 'room'
            },
            {
                data: 'b_date'
            },
            {
                data: 'purpose'
            },
            {
                data: 'con_name'
            },
            {
                data: 'con_user'
            },
            {
                data: 'con_email'
            },
            {
                data: 'con_phn'
            },
            {
                data: 'date'
            },
            {
                data: 'status'
            }

        ],
        "columnDefs": [{
            "targets": [0], //last column
            "orderable": false, //set not orderable
        }, ],
    });
    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    });
});

function add_person() {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Property'); // Set Title to Bootstrap modal title
}

function edit_person(id) {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('Control/ajax_edit/')?>",
        type: "GET",
        "data": {
            tbl: 'house_dtl_tbl',
            id: id
        },
        dataType: "JSON",
        success: function(data) {
            $('[name="id"]').val(data.id);
            $('[name="house_id_edit"]').val(data.house_id);


            $('[name="userid"]').val(data.userid);
            $('[name="house_name"]').val(data.house_name);
            $('[name="desc1"]').val(data.desc1);
            $('[name="desc2"]').val(data.desc2);
            $('[name="desc3"]').val(data.desc3);
            $('[name="desc4"]').val(data.desc4);
            $('[name="pin"]').val(data.pin);
            $('[name="purpose"]').val(data.purpose);
            $('[name="type"]').val(data.type);
            $('[name="price"]').val(data.price);
            $('[name="area"]').val(data.area);
            $('[name="address"]').val(data.address);
            $('[name="landmark"]').val(data.landmark);
            $('[name="city"]').val(data.city);
            $('[name="state"]').val(data.state);
            $('[name="country"]').val(data.country);
            $('[name="b_date"]').val(data.b_date);
            $('[name="bedroom"]').val(data.bedroom);
            $('[name="bathroom"]').val(data.bathroom);
            $('[name="post_by"]').val(data.post_by);

            $('[name="garage_avail"]').val(data.garage_avail);
            $('[name="electricity_avail"]').val(data.electricity_avail);
            $('[name="water_avail"]').val(data.water_avail);
            $('[name="habitable"]').val(data.habitable);
            $('[name="lift"]').val(data.lift);
            $('[name="floor"]').val(data.floor);
            $('[name="facing"]').val(data.facing);

            $('[name="dining"]').val(data.dining);
            $('[name="kitchen"]').val(data.kitchen);
            $('[name="balcony"]').val(data.balcony);
            $('[name="con_name"]').val(data.con_name);
            $('[name="con_user"]').val(data.con_user);
            $('[name="con_email"]').val(data.con_email);
            $('[name="con_phn"]').val(data.con_phn);

            $('#edit_form.modal-title').text('Edit Property');
            $('#modal_form').modal('show');
            $('.modal-title_box').show();
            $('.modal-title').text('Edit Property');
            $('#img_fetcher_btn').attr("href", "https://propertyforyou.in/home/mod_image/?hid=" +
                data.house_id);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            $("#other_modal").modal('show');
            $('#message').html('Error get data from ajax');

        }
    });
}

function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax 
}

function save() {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled', true); //set button disable 
    var url;

    if (save_method == 'add') {
        url = "<?php echo site_url('control/store_list_tbl')?>";
    } else {
        url = "<?php echo site_url('api/update_list_tbl')?>";
    }

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data) {

            if (data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            $("#other_modal").modal('show');
            $('#message').html('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

        }
    });
}

function delete_person(id) {
    if (confufm('Are you sure delete this data?')) {
        // ajax delete data to database
        $.ajax({
            url: "<?php echo site_url('control/ajax_delete_product')?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $("#other_modal").modal('show');
                $('#message').html('Error deleting data');
            }
        });

    }
}
</script>
