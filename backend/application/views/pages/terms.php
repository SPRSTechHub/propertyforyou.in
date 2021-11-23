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
              <div class="pvr-wrapper">
                  <div class="pvr-box">
                      <h5 class="pvr-header">
                          Terms List
                      </h5>
                      <button class="btn btn-success p-2" onclick="add_person()"><i
                              class="glyphicon glyphicon-plus"></i> Add
                          New</button>
                      <table id="table" class="table table-striped table-bordered display" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th width="100px">ID</th>
                                  <th width="200px">terms</th>
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
                              <label class="control-label col-auto">about Message</label>
                              <div class="col">
                                  <input name="terms" id="terms" placeholder="" class="form-control" type="text">
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
            "url": "<?php echo site_url('control/ajax_review_list/')?>",
            "data": {
                tbl: 'terms_tbl'
            },
            "type": "POST"
        },
        "columns": [{
                data: 'id'
            },
            {
                data: 'terms'
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
    $('.modal-title').text('Add New'); // Set Title to Bootstrap modal title
}



function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax 
}

function save() {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled', true); //set button disable 
    var url;

    if (save_method == 'add') {
        url = "<?php echo site_url('control/store_terms')?>";
    } else {
        url = "<?php echo site_url('control/ajax_update')?>";
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
            url: "<?php echo site_url('control/ajax_terms_delete')?>/" + id ,
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
  </script>