
                <div class="row">

<?
if($phone){
    ?>
    <!-- plan start -->
    <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="plan text-center">
            <span class="plan-name"><?=!empty($phone->sub_name)?$phone->sub_name:'XXXX';?> <small><?=!empty($phone->sub_dsc)?$phone->sub_dsc:'XXXX';?></small></span>
            <p class="plan-price"><sup class="currency">₹</sup><strong><?=!empty($phone->sub_name)?$phone->sub_price:'XXXX';?></strong></p>
            <ul class="list-unstyled">
                
            </ul>
            <a class="btn btn-primary" href="#.">Activate</a>
        </div>
    </div>
    <!-- plan end -->
    <?
}else{}
?>
    
<?
if($gold){
    ?>
    <!-- plan start -->
    <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="plan text-center">
            <span class="plan-name"><?=!empty($gold->sub_name)?$gold->sub_name:'XXXX';?> <small><?=!empty($gold->sub_dsc)?$gold->sub_dsc:'XXXX';?></small></span>
            <p class="plan-price"><sup class="currency">₹</sup><strong><?=!empty($gold->sub_price)?$gold->sub_price:'XXXX';?></strong></p>
            <ul class="list-unstyled">
                
            </ul>
            <a class="btn btn-primary" href="#.">Activate</a>
        </div>
    </div>
    <!-- plan end -->
    <?
}else{}
?>




<?
if($plat){
    ?>
    <!-- plan start -->
    <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="plan text-center">
            <span class="plan-name"><?=!empty($plat->sub_name)?$plat->sub_name:'XXXX';?> <small><?=!empty($plat->sub_dsc)?$plat->sub_dsc:'XXXX';?></small></span>
            <p class="plan-price"><sup class="currency">₹</sup><strong><?=!empty($plat->sub_price)?$plat->sub_price:'XXXX';?></strong></p>
            <ul class="list-unstyled">
                
            </ul>
            <a class="btn btn-primary" href="#.">Activate</a>
        </div>
    </div>
    <!-- plan end -->
    <?
}else{}
?>




</div>