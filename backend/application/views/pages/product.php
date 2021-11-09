<?
                        $res0 = $this->query->finder(array('status'=>'1'), 'house_dtl_tbl');
                        if($res0){
                        $peyees = $res0->num_rows();
                        
                        }else{$peyees = '0';
                        }
?>
<!-- BEGIN PAGE LEVEL STYLE -->
<link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/icheck/skins/all.css"
    rel="stylesheet" />
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
                        Data Table Combination
                    </h5>
                    <!-- DataTales START -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary p-2">Total Property - <?=$peyees?> </h6>
                            <br />
                            <button class="btn btn-success p-2" onclick="add_person()"><i
                                    class="glyphicon glyphicon-plus"></i> Add
                                Property</button>
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

<script>
var p1;

function edit_image(house_id) {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //alert(house_id);
    $('#house_image_id').val(house_id);
    p1 = house_id;
    $('#image_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Property'); // Set Title to Bootstrap modal title
}
</script>



<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center">Property Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                <!-- 1ST DIVISION START -->
                                <input type="hidden" id="id" name="id" value="">
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="title">User Id</label>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <input type="text" name="userid" id="userid"
                                                placeholder="Enter your property title">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="title">Property Title</label>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <input type="text" name="house_name" id="house_name"
                                                placeholder="Enter your property title">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="description">Description 1 *</label>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <input type="text" id="desc1" name="desc1"
                                                placeholder="Describe about your property"></input>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="description">Description 2</label>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <input type="text" id="desc2" name="desc2"
                                                placeholder="Describe about your property"></input>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Purpose</label>
                                            <select class="nice-select form-control wide" id="purpose" name="purpose"
                                                tabindex="0">
                                                <ul class="list">
                                                    <option data-value="1" value="rent" class="option">Rent</option>
                                                    <option data-value="2" valu="sale" class="option">Sale</option>
                                                </ul>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Type</label>
                                            <select class="nice-select form-control wide" id="type" name="type"
                                                tabindex="0">
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
                                            <select class="nice-select form-control wide" name="room" id="room"
                                                tabindex="0">
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

                        <!-- PHOTO UPLOAD START -->

                        <!-- PHOTO UPLOAD END -->

                        <!-- ADDRESS START -->
                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="address">Address</label>
                                            <input type="text" name="address" placeholder="Enter Your Address"
                                                id="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" name="city" placeholder="Enter Your City" id="city">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">

                                        <p>
                                            <label for="city">State</label>
                                            <input type="text" name="state" id="state" placeholder="">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country" class="">Country</label>
                                            <input type="text" name="country" placeholder="Enter Your Country"
                                                id="country">
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
                                            <select class="nice-select form-control wide" tabindex="0" id="b_date"
                                                name="b_date">
                                                <ul class="list">
                                                    <option data-value="0-1" value="0-1" class="option">0-1 years
                                                    </option>
                                                    <option data-value="0-5" value="0-5" class="option">0-5 years
                                                    </option>
                                                    <option data-value="0-10" value="0-10" class="option">0-10 years
                                                    </option>
                                                    <option data-value="0-15" value="0-15" class="option">0-15 years
                                                    </option>
                                                    <option data-value="0-20" value="0-20" class="option">0-20 years
                                                    </option>
                                                    <option data-value="0-50" value="0-50" class="option">0-50 years
                                                    </option>
                                                    <option data-value="50+" value="50+" class="option">50+ years
                                                    </option>
                                                </ul>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <label for="price">Bedroom</label>
                                            <select class="nice-select form-control wide" tabindex="0" id="bedroom"
                                                name="bedroom">
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
                                            <select class="nice-select form-control wide" tabindex="0" id="bathroom"
                                                name="bathroom">
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
                                            <input type="text" placeholder="Enter Your Name" id="con_name"
                                                name="con_name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-user">Username</label>
                                            <input type="text" placeholder="Enter Your Username" id="con_user"
                                                name="con_user">
                                        </p>
                                    </div>
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

                        </div>
                        <!-- CONTACT END -->







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
<!-- Bootstrap modal -->
<div class="modal fade" id="image_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body form">
                <input type="text" id="house_image_id" name="house_id">
            </div>
            <script>
            //var p1 = 'tttt' ;
            var admin_id = $("#house_image_id").val();
            //alert(admin_id);
            </script>
            <?
            echo "<script>document.writeln(p1);</script>";
//             $h_id=$_POST['house_image_id'];

// $find_img=$this->query->finder(array('house_id'=>$h_id),'image_tbl');
// if($find_img){
//     echo('achi');
// }else{
//     echo('not found');
// }
            ?>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->





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
            $('[name="house_id"]').val(data.house_id);

            /* $('[name="house_name"]').val(data.house_name);
            $('[name="desc1"]').val(data.desc1);
            $('[name="desc2"]').val(data.desc2);
            $('[name="purpose"]').val(data.purpose);
            $('[name="type"]').val(data.type);
            $('[name="room"]').val(data.room);
            $('[name="price"]').val(data.price);
            $('[name="area"]').val(data.area);
            $('[name="address"]').val(data.address);
            $('[name="city"]').val(data.city);
            $('[name="state"]').val(data.state);
            $('[name="country"]').val(data.country);
            $('[name="b_date"]').val(data.b_date);
            $('[name="bedroom"]').val(data.bedroom);
            $('[name=" bathroom"]').val(data.bathroom);
            $('[name="con_name"]').val(data.con_name);
            $('[name="con_user"]').val(data.con_user);
            $('[name="con_email"]').val(data.con_email);
            $('[name="con_phn"]').val(data.con_phn);
*/

            $('#modal_form1').modal('show'); // show bootstrap modal when complete loaded
            // $('.modal-title1').text('Edit Property'); // Set title to Bootstrap modal title
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
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
        url = "<?php echo site_url('control/update_list_tbl')?>";
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
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

        }
    });
}

function delete_person(id) {
    if (confirm('Are you sure delete this data?')) {
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
                alert('Error deleting data');
            }
        });

    }
}
</script>