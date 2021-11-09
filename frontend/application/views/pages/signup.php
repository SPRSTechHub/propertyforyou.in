<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Register</h1>
            <h2><a href="https://propertyforyou.in/">Home </a> &nbsp;/&nbsp; Register</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION 404 -->
<div id="login">
    <div class="login">
        <form autocomplete="off">

            <div class="form-group">
                <label>Your Name</label>
                <input class="form-control" type="text" id="name">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>Your Email</label>
                <input class="form-control" type="email" id="userid">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Your Phone Number</label>
                <input class="form-control" type="number" id="phone">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Your password</label>
                <input class="form-control" type="password" id="password">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input class="form-control" type="password" id="con_password">
                <i class="icon_lock_alt"></i>
            </div>
            <br><br>
            <a href="#" class="btn_1 rounded full-width add_top_30" id="str_btn">Register Now!</a>
            <div class="text-center add_top_10">Already have an acccount? <strong><a
                        href="<?=base_url();?>/home/signin">Sign In</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION 404 -->









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
    function validateMob(phone) {
        var filter = /[0-9 -()+]+$/;
        if (filter.test(phone)) {
            return true;
        } else {
            return false;
        }
    }

    function validateEmail($userid) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($userid);
}
</script>

<script>

$(document).ready(function() {
    $('#str_btn').click(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var userid = $("#userid").val();
        var phone = $("#phone").val();
        var password = $("#password").val();
        var con_password = $("#con_password").val();
        var datastring = {
            name: name,
            userid: userid,
            phone: phone,
            password: password,
        };
        if (userid == '') {
            $("#other_modal").modal('show');
            $('#message').html('Email Id is empty ...!');
        } else if (!validateEmail(userid)) {
            $("#other_modal").modal('show');
            $('#message').html('Enter Correct Mail Id ...!');
        } else if (name == '') {
            $("#other_modal").modal('show');
            $('#message').html('Name empty ...!');
        } else if (phone == '' || (phone.length < 10) || (phone.length > 10) || (!validateMob(phone))) {
            $("#other_modal").modal('show');
            $('#message').html('Enter correct Phone Number ...!');
        } else if (password == '') {
            $("#other_modal").modal('show');
            $('#message').html('password empty ...!');
        } else if (password != con_password) {
            $("#other_modal").modal('show');
            $('#message').html('password and Confirm password does not match.');
        } else {
            $.ajax({ 
                url: "<?=base_url();?>functions/store_cust/",
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
                         $("#other_modal").modal('show');
                        $('#message').html('Successfully Signup. Check Your Mail Id And verified Your Account');
                        //location.replace(
                        //    '<?=base_url();?>/home/signup');
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