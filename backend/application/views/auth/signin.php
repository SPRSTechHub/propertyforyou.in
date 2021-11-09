
<!DOCTYPE html>
<html class="no-js chrome" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="icon" type="image/png" href="<?=base_url();?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>PROPERTY-ADMIN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet"/>
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet"/>
    <link href="<?=base_url();?>/assets/css/colors.css" rel="stylesheet"/>
    <link href="<?=base_url();?>/assets/css/style.css" rel="stylesheet"/>




    <!--   Core JS Files   -->

<script src="<?=base_url();?>/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/jquery.backstretch/jquery.backstretch.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?=base_url();?>/assets/js/pvr_lite_login_v1.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->
<!-- PVR Lite DEMO, don't include it in your project! -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-8"></script>
</head>
<body class="theme-orange" style="overflow: auto;">
<div class="auth animated slideInRight">
    <div class="pvr_card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <div class="logo m-t-15">
                            <!-- <img class="w-in-22" src="<?=base_url();?>/assets/img/logo.png" alt="PVR"> -->
                        </div>
                        <h1 class="text-white">PROPERTY Admin</h1>
                    </div>
                </div>
                <form class="col-lg-12" id="sign_in" method="POST">
                    <h5 class="title">Sign in to your Account</h5>
                    <div class="form-group-pvr form-float">
                        <div class="form-line-pvr">
                            <input type="text" class="form-control" id="admin_id">
                            <label class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="form-group-pvr form-float">
                        <div class="form-line-pvr">
                            <input type="password" id="admin_pass" class="form-control">
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="form-check pull-left">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign"></span>
                            Remember me
                        </label>
                    </div>
                </form>
                <div class="col-lg-12 m-t-10">
                    <a href="#" id="check_btn" class="btn btn-purple waves-effect">Sign In</a>
                </div>
                <div class="col-lg-12 m-t-20">
                    <a class="" href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="auth_bg"></div>






<script>

    $(document).ready(function() {
    $('#check_btn').click(function(e) {
        e.preventDefault();
        var admin_id = $("#admin_id").val();
        var admin_pass = $("#admin_pass").val();
        var datastring = {
            admin_id: admin_id,
            admin_pass: admin_pass
        };
        if (admin_id == '') {
            alert('Id is empty ...!');
        } else if (admin_pass == '') {

            alert('password empty ...!');
        } else {
            $.ajax({
                url: "<?=base_url();?>home/checking_tbl/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
                    if (data.error == '2') {
                        alert(data.status);
                    } else if (data.error == '1') {
                        alert(data.status);
                    } else if (data.error == '0') {
                        location.replace(
                            'https://control.propertyforyou.in/');
                    } else {
                        alert(data.status);
                    }
                }
            });
        }
    });
});
</script>















</body>

</html>
