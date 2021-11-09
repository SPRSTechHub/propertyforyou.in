<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>PROPERTY FOR YOU</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>/assets/favicon.ico">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/font/flaticon.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/search.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/lightcase.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/menu.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="<?=base_url();?>/assets/css/default.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/leaflet.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/leaflet.markercluster.default.css">


    <script src="<?=base_url();?>/assets/js/jquery-3.5.1.min.js"></script>

</head>

<body class="inner-pages listing homepage-4 agents hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        
        <div class="clearfix"></div>
        <!-- Header Container / End -->

















<br><br><br>
<h2 class="text-center"> Property For You</h2>
<h5 class="text-center"> Verify Your OTP</h5>
<br><br>

        <?
//$userid=$this->input->get('userid');
$code=$this->input->get('code');
?>

        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="login" style="background-color: #f9f5f5;">
            
                
                <form style="    border: 1px solid #ced4da;" class="p-5 shadow">
                   
                    <div class="form-group">
                        <label>Your Verification Code</label>
                        <input type="text" placeholder="****" class="form-control text-center" name="code" id="code"
                            value="<?=!empty($code)?$code:'';?>" readonly>
                        <i class="icon_lock_alt" ></i>
                    </div>
                    <br><br>
                    <a href="#" id="check_btn" class="btn_1 rounded full-width">SUBMIT</a>
                    <!-- <div class="text-center add_top_10">Do not get any code? <strong><a
                        href="#">Resend Now!</a></strong></div> -->
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
                                    '<?=base_url();?>/home/signin');
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

































        <!-- START FOOTER -->
        <footer class="first-footer">
            
            
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->

        <!--register form end -->

        <!-- ARCHIVES JS -->

        <script src="<?=base_url();?>/assets/js/rangeSlider.js"></script>
        <script src="<?=base_url();?>/assets/js/tether.min.js"></script>
        <script src="<?=base_url();?>/assets/js/popper.min.js"></script>
        <script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>/assets/js/mmenu.min.js"></script>
        <script src="<?=base_url();?>/assets/js/mmenu.js"></script>
        <script src="<?=base_url();?>/assets/js/aos.js"></script>
        <script src="<?=base_url();?>/assets/js/aos2.js"></script>
        <script src="<?=base_url();?>/assets/js/slick.min.js"></script>
        <script src="<?=base_url();?>/assets/js/slick4.js"></script>
        <script src="<?=base_url();?>/assets/js/smooth-scroll.min.js"></script>
        <script src="<?=base_url();?>/assets/js/lightcase.js"></script>
        <script src="<?=base_url();?>/assets/js/search.js"></script>
        <script src="<?=base_url();?>/assets/js/light.js"></script>
        <script src="<?=base_url();?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=base_url();?>/assets/js/popup.js"></script>
        <script src="<?=base_url();?>/assets/js/searched.js"></script>
        <script src="<?=base_url();?>/assets/js/ajaxchimp.min.js"></script>
        <script src="<?=base_url();?>/assets/js/newsletter.js"></script>
        <script src="<?=base_url();?>/assets/js/inner.js"></script>
        <script src="<?=base_url();?>/assets/js/color-switcher.js"></script>


        <script src="<?=base_url();?>/assets/js/map-single.js"></script>


        <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>