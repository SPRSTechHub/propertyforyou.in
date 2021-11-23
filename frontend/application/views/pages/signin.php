
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Login</h1>
                    <h2><a href="<?=base_url();?>/home/index">Home </a> &nbsp;/&nbsp; login</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="login">
                <form>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="userid" id="userid">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="">
                        <i class="icon_lock_alt"></i>
                    </div>
                    <div class="fl-wrap filter-tags clearfix add_bottom_30">
                        <div class="checkboxes float-left">
                            <div class="filter-tags-wrap">
                                <input id="check-b" type="checkbox" name="check">
                                <label for="check-b">Remember me</label>
                            </div>
                        </div>
                        <div class="float-right mt-1"><a id="forgot" href="#">Forgot Password?</a></div>
                    </div>
                    <a href="#" id="check_btn" class="btn_1 rounded full-width">Login</a>
                    <div class="text-center add_top_10">New to Find Houses? <strong><a href="https://propertyforyou.in/home/signup">Sign up!</a></strong></div>
                </form>
            </div>
        </div>
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











<script>

$(document).ready(function() {
    $('#check_btn').click(function(e) {
        e.preventDefault();
        var userid = $("#userid").val();
        var password = $("#password").val();
        var datastring = {
            userid: userid,
            password: password
        };
        if (userid == '') {
            $("#other_modal").modal('show');
            $('#message').html('Id is empty ...!');
        } else if (password == '') {

            $("#other_modal").modal('show');
            $('#message').html('password empty ...!');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/checking_tbl/",
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
                            '<?=base_url();?>/home/membership');
                    } else {
                        $("#other_modal").modal('show');
            $('#message').html(data.status);
                    }
                }
            });
        }
    });
});
</script>
