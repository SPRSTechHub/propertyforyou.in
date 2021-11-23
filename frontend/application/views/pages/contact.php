<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Contact Us</h1>
            <h2><a href="https://propertyforyou.in/">Home </a> &nbsp;/&nbsp; Contact Us</h2>
        </div>
    </div>
</section>
<!-- START SECTION CONTACT US -->
<section class="contact-us">
    <div class="container">
        <div class="property-location mb-5">
            <h3>Our Location</h3>
            <div class="divider-fade"></div>

        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="mb-4">Contact Us</h3>
                <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>

                    <div class="form-group pb-2">
                        <input type="text" required class="form-control input-custom input-full" id="name"
                            placeholder="Name">
                    </div>

                    <div class="form-group pb-2">
                        <input type="email" class="form-control input-custom input-full" id="email" placeholder="Email">
                    </div>
                    <div class="form-group pb-2">
                        <textarea class="form-control textarea-custom input-full" id="text" name="message" required
                            rows="8" placeholder="Message"></textarea>
                    </div>

                </form>
                <button type="submit" id="con_submit_btn" class="btn btn-primary btn-lg">Submit</button>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>Contact Details</h3>
                    <p class="mb-5">Please find below contact details and contact us today!</p>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:" class="in-p ti ps-1" style="
                                        color: #c7cfd2;padding-left: 15px;">
                                    <?
                                        $mobiles = $this->query->get_meta(array('status'=>'1','type'=>'contact'), 'site_contact', 'details');
                                        if($mobiles){
                                            echo $mobiles;
                                        }
                                        ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:propertyforyou9999@gmail.com" class="in-p ti ps-1" style="
                                        color: #c7cfd2;padding-left: 15px;">
                                    <?
                                        $e = $this->query->get_meta(array('status'=>'1','type'=>'site_email'), 'site_contact', 'details');
                                        if($e){
                                            echo $e;
                                        }
                                        ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p ti">
                                    <?
                                        $tt = $this->query->get_meta(array('status'=>'1','type'=>'op_hours'), 'site_contact', 'details');
                                        if($e){
                                            echo $tt;
                                        }
                                        ?>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT US -->



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
    $('#con_submit_btn').click(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#text").val();
        var datastring = {
            name: name,
            message: message,
            email: email
        };
        if (name == '') {
            $("#other_modal").modal('show');
            $('#message').html('Name empty ...!');
        } else if (email == '') {
            $("#other_modal").modal('show');
            $('#message').html('Email empty ...!');
        } else if (message == '') {
            $("#other_modal").modal('show');
            $('#message').html('Message empty ...!');
        } else {
            $.ajax({
                url: "<?=base_url();?>functions/con_submit/",
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
                        $('#message').html(data.status);

                        $.get("<?=base_url();?>/mailer/SendtoWebmaster/", {
                                email: data.rcvrid,
                                code: data.id
                            },
                            function(data, status) {
                                //
                            }, "json");
                        setTimeout(function() {
                            location.replace('<?=base_url();?>');
                        }, 3000);

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
