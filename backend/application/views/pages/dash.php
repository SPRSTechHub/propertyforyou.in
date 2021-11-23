<?
    $act_pro = $this->query->finder(array('status'=>'1'), 'house_dtl_tbl');
    if($act_pro){
    $act_property = $act_pro->num_rows();
    }else{$act_property = '0';}

    $in_act_pro = $this->query->finder(array('status'=>'0'), 'house_dtl_tbl');
    if($in_act_pro){
    $in_act_property = $in_act_pro->num_rows();
    }else{$in_act_property = '0';}

    $sold = $this->query->finder(array('status'=>'5'), 'house_dtl_tbl');
    if($sold){
    $sold_property = $sold->num_rows();
    }else{$sold_property = '0';}


    $all_user_fnd= $this->query->finder(array(), 'user_tbl');
    if($all_user_fnd){
    $all_user = $all_user_fnd->num_rows();
    }else{$all_user = '0';}

    $new_user_fnd= $this->query->finder(array('status'=>'0'), 'user_tbl');
    if($new_user_fnd){
    $new_user = $new_user_fnd->num_rows();
    }else{$new_user = '0';}

?>
<!-- Custom styles for this page -->
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Page level plugins -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
</script>

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


<!-- BEGIN PAGE LEVEL STYLE -->
<link href="<?=base_url();?>/assets/plugins/icheck/skins/all.css" rel="stylesheet" />
<!-- END PAGE LEVEL STYLE -->

<!--Begin Content-->
<div class="content dashboard_v1">
    <div class="row">
        <div class="col-lg-12 col-xl-9">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="welcome_message pvr-box-gray">
                            <div class="element-info">
                                <div class="element-info-with-icon">

                                    <div class="element-info-text">
                                        <h2 class="element-inner-header m-t-0 text-purple" id="good_morning"
                                            data-typeit="true">
                                            Good Morning!
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pvr-wrapper">
                        <div class="widget_box p-15 p-b-0">
                            <h6><i class="fa fa-pie-chart"></i> <span id="site_trafic" data-typeit="true">All
                                    Posts</span>
                            </h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Approved</p>
                                    <p><i class="fa fa-caret-up f-s-20 text-success"></i>
                                        <span data-count="true" data-number="90" id="st_daily"></span>%
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>Disapproved</p>
                                    <p><i class="fa fa-caret-down f-s-20 text-danger"></i>
                                        <span data-count="true" data-number="70" id="st_overall"></span>%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pvr-wrapper">
                        <div class="widget_box p-15 p-b-0">
                            <h6><i class="fa fa-pie-chart"></i> <span id="data_transfer" data-typeit="true">All
                                    Users</span>
                            </h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Active</p>
                                    <p><i class="fa fa-caret-up f-s-20 text-success"></i>
                                        <span data-count="true" data-number="100" id="dt_daily"></span>%
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>Inactive</p>
                                    <p><i class="fa fa-caret-down f-s-20 text-danger"></i>
                                        <span data-count="true" data-number="90" id="dt_overall"></span>%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pvr-wrapper">
                        <div class="widget_box p-15 p-b-0">
                            <h6><i class="fa fa-pie-chart"></i> <span id="band_width" data-typeit="true">Purpose
                                    History</span>
                            </h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>BUY</p>
                                    <p><i class="fa fa-caret-down f-s-20 text-danger"></i>
                                        <span data-count="true" data-number="95" id="bw_overall"></span>%
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>SELL</p>
                                    <p><i class="fa fa-caret-up f-s-20 text-success"></i>
                                        <span data-count="true" data-number="98" id="bw_daily"></span>%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                                User List
                            </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">

                                        <thead>
                                            <tr>
                                                <th width="100px">ID</th>
                                                <th width="200px">USER ID</th>
                                                <th width="200px">NAME</th>
                                                <th width="200px">PHONE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-3 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-xl-12 col-sm-6">
                    <div class="pvr-wrapper">
                        <div class="pvr-box-gray clock_box">
                            <div class="clock-wrapper">
                                <div class="clock-base">
                                    <div class="click-indicator">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="clock-hour"></div>
                                    <div class="clock-minute"></div>
                                    <div class="clock-second"></div>
                                    <div class="clock-center"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xl-12">
                    <div class="col-md-12 p-0">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-people text-primary f-s-40"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">New Users</h6>
                                        <p class="mb-0"><?=$new_user;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-people text-primary f-s-40"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">All User</h6>
                                        <p class="mb-0"><?=$all_user;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-handbag text-danger f-s-40"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">Sold Property </h6>
                                        <p class="mb-0"><?=$sold_property;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-trophy text-success f-s-40"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">Active Property</h6>
                                        <p class="mb-0"><?=$act_property;?>
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon-trophy text-success f-s-40"></i>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="m-0">Inactive Property</h6>
                                        <p class="mb-0"><?=$in_act_property;?>
                                            <span class="float-right text-success"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!--End Content-->
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
            "url": "<?php echo site_url('api/ajax_list/')?>",
            "data": {
                tbl: 'user_tbl'
            },
            "type": "POST"
        },
        "columns": [{
                data: 'id'
            },
            {
                data: 'userid'
            },
            {
                data: 'name'
            },
            {
                data: 'phone'
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
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}



function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax 
}

function save() {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled', true); //set button disable 
    var url;

    if (save_method == 'add') {
        url = "<?php echo site_url('functions/ajax_add')?>";
    } else {
        url = "<?php echo site_url('functions/ajax_update')?>";
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
            url: "<?php echo site_url('control/ajax_delete')?>/" + id,
            type: "GET",
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





function edit_user_data(id) {
    if (confirm('Chaing Showing Status ?')) {
        // ajax delete data to database
        $.ajax({
            url: "<?php echo site_url('api/edit_user')?>/" + id,
            type: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
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
