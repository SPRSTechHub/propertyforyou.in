<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="<?=base_url();?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>PROPERTY ADMIN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/css/colors.css" rel="stylesheet" id="themecolor" />
    <link href="<?=base_url();?>/assets/css/style.css" rel="stylesheet" />
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/plugins/amcharts/export.css" type="text/css" media="all" />
    <link href="<?=base_url();?>/assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="<?=base_url();?>/assets/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLE -->
    <style id="clock-animations"></style>



    <!--   Core JS Files   -->
<script src="<?=base_url();?>/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/pace/pace.min.js"></script>
<script src="<?=base_url();?>/assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/waitme/waitme.min.js"></script>
<script src="<?=base_url();?>/assets/js/pvr_lite_app.js" id="appjs"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-8"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?=base_url();?>/assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/plugins/chartjs/chart.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/countup/countup.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/amcharts.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/serial.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/export.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/amcharts/none.js"></script>
<script src="<?=base_url();?>/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?=base_url();?>/assets/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url();?>/assets/plugins/real-shadow/realshadow.js" type="text/javascript"></script>
<script src="<?=base_url();?>/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url();?>/assets/plugins/typeit/typeit.js"></script>
<script src="<?=base_url();?>/assets/js/pvr_lite_dashboard_v1.js"></script>
<!-- END PAGE LEVEL JS -->















<!-- JS FOR DATA TABLE -->
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
<script src="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/js/pvr_lite_combine_demo.js"></script>
<!-- END PAGE LEVEL JS -->

    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
    <link href="https://preview.pvrtechstudio.com/demo/pvrlite/pvrlite/assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLE -->
    
</head>
<!--Body Begins-->
