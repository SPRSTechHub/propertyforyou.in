<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Privacy & Policy</h1>
            <h2><a href="https://propertyforyou.in/">Home </a> &nbsp;/&nbsp; Privacy</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION ABOUT -->
<section class="about-us fh">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 who-1">
                <div>
                    <h2 class="text-left mb-4">Privacy & Policy</h2>
                </div>
                <div class="pftext">
                    <?
                        $find_about=$this->query->finder(array('status'=>'1'),'privacy_tbl');
                        if($find_about){
                            foreach($find_about->result() as $data)
                            {
                                ?>
                    <p><?=$data->privacy?></p>
                    <?
                            }
                        }else{echo('Data not found');}
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

