<?
$house_id=$this->input->get('house_id');
if($house_id==""){
    redirect('https://control.propertyforyou.in//home/product');
}
?>
<!--Begin Content-->
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="pvr-wrapper">
                <div class="pvr-box">
                    <h5 class="pvr-header">
                        Data Table Combination
                    </h5>
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="100px" nowrap>ID</th>
                                <th width="200px" nowrap>House id</th>
                                <th width="200px" nowrap>Image</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?
                                $find_data=$this->query->finder(array('status'=>'1'),'image_tbl');
                                if($find_data){
                                    foreach($find_data->result() as $data){
                                        ?>
                            <tr class="odd gradeX">
                                <td><?=$data->id;?></td>
                                <td><?=$data->house_id;?></td>
                                <td><?=$data->image;?></td>
                                <td><?=$data->status;?></td>
                            </tr>
                            <?
                                    }
                                }else{
                                    echo('NO DATA');
                                }
                                ?>

                        <tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!--End Content-->