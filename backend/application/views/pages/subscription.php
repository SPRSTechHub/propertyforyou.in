  <!-- Custom styles for this page -->
  <link href="https://crm.benudbeharidutt.com/assets/res/vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet">

  <!-- Page level plugins -->
  <script src="https://crm.benudbeharidutt.com/assets/res/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="https://crm.benudbeharidutt.com/assets/res/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
  </script>
  <!-- Page level custom scripts -->
  <script src="https://crm.benudbeharidutt.com/assets/res/js/demo/datatables-demo.js"></script>

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
              
              <!-- DataTales START -->
              <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary p-2"> </h6> 
                                <br/>
                                
                                <button class="btn btn-default p-2" onclick="reload_table()"><i
                                        class="glyphicon glyphicon-refresh"></i>
                                    Reload</button>
                                <br />
                                <br />
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table id="table" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>
                                        <tr>
                                  <th width="100px">ID</th>
                                  <th width="200px">sub_name</th>
                                  <th width="200px">sub_code</th>
                                  <th width="200px">sub_dsc</th>
                                  <th width="200px">sub_price</th>
                                  <th>Status</th>
                                  <th style="width:125px;">Action</th>
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
  <!--End Content-->






























<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center">Person Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>


            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />

                    <div class="form-body">

                        


                        <div class="form-group row g-3 align-items-center">
                            <label class="control-label col-auto">sub_name</label>
                            <div class="col">
                                <input name="sub_name" id="sub_name" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group row g-3 align-items-center">
                            <label class="control-label col-auto">sub_dsc</label>
                            <div class="col">
                                <input name="sub_dsc" id="sub_dsc" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group row g-3 align-items-center">
                            <label class="control-label col-auto">sub_code</label>
                            <div class="col">
                                <input name="sub_code" id="sub_code" placeholder="" class="form-control"
                                    type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group row g-3 align-items-center">
                            <label class="control-label col-auto">sub_price</label>
                            <div class="col">
                                <input name="sub_price" id="sub_price" placeholder="" class="form-control"
                                    type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group row g-3 align-items-center">
                            <label class="control-label col-auto">status</label>
                            <div class="col">
                                <input name="status" id="status" placeholder="" class="form-control"
                                    type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        





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



<div class="modal fade" id="other_modal" tabindex="-1" role="dialog" aria-labelledby="other_modalTitle"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
            "url": "<?php echo site_url('control/ajax_common_list/')?>",
            "data": { 
                tbl: 'subscription_tbl'
            },
            "type": "POST"
        },
        "columns": [{
                data: 'id'
            },
            {
                data: 'sub_name'
            },
            {
                data: 'sub_code'
            },
            {
                data: 'sub_dsc'
            },
            {
                data: 'sub_price'
            },
            {
                data: 'status'
            },
            {
                data: 'act'
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
            tbl: 'subscription_tbl',
            id: id
        },
        dataType: "JSON",
        success: function(data) {
            $('[name="id"]').val(data.id);
            $('[name="sub_name"]').val(data.sub_name);
            $('[name="sub_code"]').val(data.sub_code);
            $('[name="sub_dsc"]').val(data.sub_dsc);
            $('[name="sub_price"]').val(data.sub_price);
            $('[name="status"]').val(data.status);
            

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Social Links'); // Set title to Bootstrap modal title
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
        url = "<?php echo site_url('control/store_cust')?>";
    } else {
        url = "<?php echo site_url('api/ajax_subscription_update')?>";
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

function ajax_sub_delete(id) {
    if (confirm('Are you sure delete this data?')) {
        // ajax delete data to database
        $.ajax({
            url: "<?php echo site_url('control/ajax_delete')?>/" + id,
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