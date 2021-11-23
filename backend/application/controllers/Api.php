<?

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller{

    public function __construct(){
    parent::__construct();
    $this->load->model('api_model');
    }

    public function csrf(){
        echo $this->security->get_csrf_hash();
        
    }

    public function posts(){
        $tbl = $this->input->post('tbl');

        $getCol= $this->db->list_fields($tbl); // get all columns name
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $getCol[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->api_model->allposts_count($tbl);

        $totalFiltered = $totalData;

        if (empty($this->input->post('search')['value'])) {
            $getdata = $this->api_model->allposts($limit, $start, $order, $dir,$tbl);
        } else {
            $search = $this->input->post('search')['value'];
            $getdata = $this->api_model->posts_search($limit, $start, $search, $order, $dir,$tbl);
            $totalFiltered = $this->api_model->posts_search_count($search,$tbl);
        }

        $data = array();

        if (!empty($getdata)) {
            foreach ($getdata as $post) {
                $start++;
                $row = array();

                // loop through fields //
			foreach ($getCol as $col => $key){
                $row[$key] = $post->$key;
               }
    
            $data[] = $row;
           
            }
            }

            $json_data = array(
                "draw" => intval($this->input->post('draw')),
                "recordsTotal" => intval($totalData),
                "recordsFiltered" => intval($totalFiltered),
                "data" => $data,
                );
       echo json_encode($json_data);
    }

    public function ajax_subscription_update(){
        
      $cust=array(
         'id' => $this->input->post('id'),
         'sub_name' => $this->input->post('sub_name'),
         'sub_code' => $this->input->post('sub_code'),
         'sub_dsc' => $this->input->post('sub_dsc'),
         'sub_price' => $this->input->post('sub_price'),
         'status'=> $this->input->post('status'),
       );
       $this->data_model->update(array('id' => $this->input->post('id')), $cust,'subscription_tbl');
       echo json_encode(array("status" => TRUE));
   }

	public function ajax_list(){

		$tbl = $this->input->post('tbl');
        $data = array();
		
        $no = $_POST['start'];
		
		// Get Fields List from table dynamically //
		$date1 = $this->input->post('fromDate');
		$date2 = $this->input->post('toDate');
		
		$datefilter = array('date1' => $date1,'date2' => $date2);
		
		if(isset($_POST["is_date_search"]) == "yes"){
			$list = $this->data_model->get_datatables_by_date_range($tbl,$datefilter);
		}else{
			$list = $this->data_model->get_datatables($tbl);
		}
		$fields = $this->db->list_fields($tbl);


        foreach ($list as $person) {
            $no++;
            $row = array(); 
			// loop through fields //
			foreach ($fields as $field => $key){
			 $row[$key] = $person->$key;
			}

      if($person->dtl == 'show'){
        $tada = 'btn-danger btn-inverse-dark btn-sm';
        $btn_txt='Details Show';
      }else if($person->status == 0){
        $tada = 'btn-secondary btn-inverse-dark btn-sm';
        $btn_txt='Not Approved';
      }else {
        $tada = 'btn-secondary btn-inverse-dark btn-sm';
        $btn_txt='Approved';
      }           $url='https://control.propertyforyou.in//home/images/?house_id=';
          //  <button type="button" class="btn btn-secondary btn-inverse-dark btn-rounded btn-icon" onclick="location.replace('."'".$url.$person->house_id."'".')">
          //               <i class="mdi mdi-border-color"></i>Photos
          //             </button>
            //add html for action
            $row['act'] = '<div class="template-demo d-flex justify-content-between flex-nowrap">
            
            
			         <button type="button" class="btn '.$tada.' btn-rounded btn-icon" onclick="edit_user_data('."'".$person->userid."'".')">
                        <i class="mdi mdi-border-color"></i>'.$btn_txt.'
                      </button>
			
                    </div>';
			
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->data_model->count_all($tbl),
                        "recordsFiltered" => $this->data_model->count_filtered($tbl),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
  }



  public function edit_user()
  {
       //$this->load->model('data_model');
       $userfind = $this->query->finder(array('userid' => $this->input->post('id'),'dtl'=>'show'), 'user_tbl');
      if($userfind){
        $this->data_model->update(array('userid' => $this->input->post('id')), array('dtl'=>'hide'),'user_tbl');
      }else{
        $this->data_model->update(array('userid' => $this->input->post('id')), array('dtl'=>'show'),'user_tbl');
      }

      echo json_encode(array("status" => TRUE));
  }



  public function update_list_tbl(){
      $this->load->model('data_model');
      
     $cust=array(
        'id' => $this->input->post('id'),
        'house_id'=>$this->input->post('house_id_edit'),
        'userid'=>$this->input->post('userid'),
              'house_name'=>$this->input->post('house_name'),
              'type'=>$this->input->post('type'),
              'price'=>$this->input->post('price'),
              'area'=>$this->input->post('area'),
              'address'=>$this->input->post('address'),
              'landmark'=>$this->input->post('landmark'),
              'city'=>$this->input->post('city'),
              'pin'=>$this->input->post('pin'),
              'state'=>$this->input->post('state'),
              'country'=>$this->input->post('country'),
              'post_by'=>$this->input->post('post_by'),
              'desc1'=>$this->input->post('desc1'),
              'desc2'=>$this->input->post('desc2'),
              'b_date'=>$this->input->post('b_date'),
              'purpose'=>$this->input->post('purpose'),
              'bedroom'=>$this->input->post('bedroom'),
              'bathroom'=>$this->input->post('bathroom'),
              'garage_avail'=>$this->input->post('garage_avail'),
            'electricity_avail'=>$this->input->post('electricity_avail'),
            'water_avail'=>$this->input->post('water_avail'),
            'habitable'=>$this->input->post('habitable'),
            'lift'=>$this->input->post('lift'),
            'floor'=>$this->input->post('floor'),
            'facing'=>$this->input->post('facing'),
            
              'dining'=>$this->input->post('dining'),
              'kitchen'=>$this->input->post('kitchen'),
              'balcony'=>$this->input->post('balcony'),
              
              'con_name'=>$this->input->post('con_name'),
              'con_user'=>$this->input->post('con_user'),
              'con_email'=>$this->input->post('con_email'),
              'con_phn'=>$this->input->post('con_phn'),
       
    );
      $this->data_model->update(array('id' => $this->input->post('id')), $cust,'house_dtl_tbl');
      echo json_encode(array("status" => TRUE));
  }



}
