<?
//$userid=$this->input->get('userid');
$code=$this->input->get('code');
?>
<h1 class="text-center"> Check Your Mail Id To verified Your Your Account</h1>
<!-- START SECTION LOGIN -->
<!-- <div id="login">
    <div class="login">
    <h2> Verify Your OTP</h2>
        <form>
            
            <div class="form-group">
                <label>Enter Verification Code</label>
                <input type="password" placeholder="****" class="form-control text-center" name="code" id="code" value="<?=!empty($code)?$code:'';?>">
                <i class="icon_lock_alt" readonly></i>
            </div>
            <br><br>
            <a href="#" id="check_btn" class="btn_1 rounded full-width">SUBMIT</a>
            
        </form>
    </div>
</div> -->
<!-- END SECTION LOGIN -->

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


<!-- <script>
$(document).ready(function() {
    $('#check_btn').click(function(e) {
        e.preventDefault();
        
        var code = $("#code").val();
        var datastring = {
            code: code
        };
        if (code == '') {

            $("#other_modal").modal('show');
            $('#message').html('Empty Verificational Code...!');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/verify_tbl/",
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
                            '<?=base_url();?>/home/login');
                    } else {
                        $("#other_modal").modal('show');
                        $('#message').html(data.status);
                    }
                }
            });
        }
    });
});
</script> -->