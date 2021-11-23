        <!--Begin Content-->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                                Review List
                            </h5>
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="100px" nowrap>ID</th>
                                        <th width="200px" nowrap>House Name</th>
                                        <th width="200px" nowrap>Name</th>
                                        <th width="200px" nowrap>Text</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?
                                $find_data=$this->query->finder(array('status'=>'1'),'review_tbl');
                                if($find_data){
                                    foreach($find_data->result() as $data){
                                        ?>
                                        <tr class="odd gradeX">
                                          <td><?=$data->id;?></td>
                                          <td><?=$data->house_id;?></td>
                                          <td><?=$data->name;?></td>
                                          <td><?=$data->text;?></td>
                                          <td><?=$data->date;?></td>
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