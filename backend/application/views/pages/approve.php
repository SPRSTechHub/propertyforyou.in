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
                                        <th width="100px" nowrap>House_id</th>
                                        <th width="100px" nowrap>Userid</th>
                                        <th width="100px" nowrap>House_name</th>
                                        <th width="100px" nowrap>Address</th>
                                        <th width="100px" nowrap>City</th>
                                        <th width="100px" nowrap>State</th>
                                        <th width="100px" nowrap>Country</th>
                                        <th width="100px" nowrap>Bedroom</th>
                                        <th width="100px" nowrap>Bathroom</th>
                                        <th width="100px" nowrap>Area</th>
                                        <th width="100px" nowrap>Garage</th>
                                        <th width="100px" nowrap>Price</th>
                                        <th width="100px" nowrap>Type</th>
                                        <th width="100px" nowrap>Room</th>
                                        <th width="100px" nowrap>Construct Date</th>
                                        <th width="100px" nowrap>Purpose</th>
                                        <th width="100px" nowrap>Contact name</th>
                                        <th width="100px" nowrap>Contact Username</th>
                                        <th width="100px" nowrap>Contact Email</th>
                                        <th width="100px" nowrap>Contact Phone</th>
                                        <th width="100px" nowrap>Date</th>
                                        <th width="100px" nowrap>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                                $find_data=$this->query->finder(array('status'=>'1'),'temp_house_dtl_tbl');
                                if($find_data){
                                    foreach($find_data->result() as $data){
                                        ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <button type="button" class="btn btn-purple"
                                                onclick="approve_row('<?=$data->house_id;?>')">Approve</button>
                                        </td>
                                        <td><?=$data->id?></td>
                                        <td><?=$data->house_id?></td>
                                        <td><?=$data->userid?></td>
                                        <td><?=$data->house_name?></td>
                                        <td><?=$data->address?></td>
                                        <td><?=$data->city?></td>
                                        <td><?=$data->state?></td>
                                        <td><?=$data->country?></td>
                                        <td><?=$data->bedroom?></td>
                                        <td><?=$data->bathroom?></td>
                                        <td><?=$data->area?></td>
                                        <td><?=$data->garage?></td>
                                        <td><?=$data->price?></td>
                                        <td><?=$data->type?></td>
                                        <td><?=$data->room?></td>
                                        <td><?=$data->b_date?></td>
                                        <td><?=$data->purpose?></td>
                                        <td><?=$data->con_name?></td>
                                        <td><?=$data->con_user?></td>
                                        <td><?=$data->con_email?></td>
                                        <td><?=$data->con_phn?></td>
                                        <td><?=$data->date?></td>
                                        <td><?=$data->date?></td>
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






        <script>
function approve_row(userid) {
    // $('#submit').click(function(e) {
    //     e.preventDefault();
    var house_id = house_id;

    var datastring = {
        house_id: house_id,

    };
    if (house_id == '') {
        alert('user id is empty ...!');
    } else {
        $.ajax({
            url: "<?=base_url();?>home/approve_row/",
            dataType: 'json',
            method: "POST",
            data: datastring,
            catch: false,
            success: function(data) {
                if (data.status == '2') {
                    alert(data.message);
                } else if (data.status == '1') {
                    alert(data.message);
                } else if (data.status == '0') {
                    location.replace(
                        '<?=base_url();?>home/approve/');
                } else {
                    alert('Error!');
                }
            }
        });
    }
    // });
}
        </script>