        <!--Begin Content-->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                                Property List 
                            </h5>
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="100px" nowrap>ID</th>
                                        <th width="200px" nowrap>House Name</th>
                                        <th width="200px" nowrap>Userid</th>
                                        <th width="200px" nowrap>desc1</th>
                                        <th width="200px" nowrap>desc2</th>
                                        <th width="200px" nowrap>desc3</th>
                                        <th width="200px" nowrap>desc4</th>
                                        <th width="200px" nowrap>status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?
                                $find_data=$this->query->finder(array('status'=>'1'),'description_tbl');
                                if($find_data){
                                    foreach($find_data->result() as $data){
                                        ?>
                                        <tr class="odd gradeX">
                                          <td><?=$data->id;?></td>
                                          <td><?=$data->house_id;?></td>
                                          <td><?=$data->userid;?></td>
                                          <td><?=$data->desc1;?></td>
                                          <td><?=$data->desc2;?></td>
                                          <td><?=$data->desc3;?></td>
                                          <td><?=$data->desc4;?></td>
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