        <!--Begin Content-->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                                User Table 
                            </h5>
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="100px" nowrap>ID</th>
                                        <th width="200px" nowrap>Userid</th>
                                        <th width="200px" nowrap>Name</th>
                                        <th width="200px" nowrap>Phone</th>
                                        <th>Password</th>
                                        <th>Date</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?
                                $find_data=$this->query->finder(array('status'=>'1'),'user_tbl');
                                if($find_data){
                                    foreach($find_data->result() as $data){
                                        ?>
                                        <tr class="odd gradeX">
                                          <td><?=$data->id?></td>
                                          <td><?=$data->userid?></td>
                                          <td><?=$data->name?></td>
                                          <td><?=$data->phone?></td>
                                          <td><?=$data->password?></td>
                                          <td><?=$data->date?></td>
                                          <td><?=$data->status?></td>
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