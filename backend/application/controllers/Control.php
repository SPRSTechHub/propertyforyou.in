<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	
	public function ajax_list(){

		$this->load->model('data_model');
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
      if($person->status == 1){ 
      $tada = 'btn-primary btn-inverse-dark btn-sm';
      $btn_txt='Status';
      }else if($person->status == 2){
        $tada = 'btn-danger btn-inverse-dark btn-sm';
        $btn_txt='Status';
      }else if($person->status == 5){
        $tada = 'btn-secondary btn-inverse-dark btn-sm';
        $btn_txt='Sold';
      }else{
        $tada = 'btn-secondary btn-inverse-dark btn-sm';
        $btn_txt='Status';
      }           $url='https://control.propertyforyou.in//home/images/?house_id=';
          //  <button type="button" class="btn btn-secondary btn-inverse-dark btn-rounded btn-icon" onclick="location.replace('."'".$url.$person->house_id."'".')">
          //               <i class="mdi mdi-border-color"></i>Photos
          //             </button>
            //add html for action
            $row['act'] = '<div class="template-demo d-flex justify-content-between flex-nowrap">
            
            <button type="button" class="btn btn-secondary  btn-sm btn-inverse-dark btn-rounded btn-icon" onclick="edit_person('."'".$person->id."'".')">
                        <i class="mdi mdi-border-color"></i>Edit
                      </button>
			<button type="button" class="btn '.$tada.' btn-rounded btn-icon" onclick="edit_image('."'".$person->house_id."'".')">
                        <i class="mdi mdi-border-color"></i>'.$btn_txt.'
                      </button>
			<button type="button" class="btn btn-danger btn-inverse-dark  btn-sm btn-rounded btn-icon" onclick="delete_person('."'".$person->id."'".')">
                        <i class="fa-solid fa-trash-can"></i>Delete
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


  public function ajax_review_list(){

		$this->load->model('data_model');
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

      if($person->status == 1){ 
      $tada = 'btn-primary btn-inverse-dark btn-sm';
      $btn_txt='Status';
      }else if($person->status == 2){
        $tada = 'btn-danger btn-inverse-dark btn-sm';
        $btn_txt='Status';
      }else if($person->status == 5){
        $tada = 'btn-secondary btn-inverse-dark btn-sm';
        $btn_txt='Sold';
      }else{
        $tada = 'btn-secondary btn-inverse-dark btn-sm';
        $btn_txt='Status';
      }           $url='https://control.propertyforyou.in//home/images/?house_id=';
          //  <button type="button" class="btn btn-secondary btn-inverse-dark btn-rounded btn-icon" onclick="location.replace('."'".$url.$person->house_id."'".')">
          //               <i class="mdi mdi-border-color"></i>Photos
          //             </button>
            //add html for action
            $row['act'] = '<div class="template-demo d-flex justify-content-between flex-nowrap">
            
			
			<button type="button" class="btn btn-danger btn-inverse-dark  btn-sm btn-rounded btn-icon" onclick="delete_person('."'".$person->id."'".')">
                        <i class="fa-solid fa-trash-can"></i>Delete
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
 



  public function ajax_common_list(){

		$this->load->model('query');
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
			
            //add html for action
			$row['act'] = '<div class="template-demo d-flex justify-content-between flex-nowrap">
			<button type="button" class="btn btn-secondary btn-inverse-dark btn-rounded btn-icon" onclick="edit_person('."'".$person->id."'".')">
                        <i class="mdi mdi-border-color"></i>Edit
                      </button>
			<button type="button" class="btn btn-danger btn-inverse-dark btn-rounded btn-icon" onclick="delete_person('."'".$person->id."'".')">
                        <i class="fa-solid fa-trash-can"></i>Delete
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

  public function ajax_contact_list(){

		$this->load->model('query');
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
			
            //add html for action
			$row['act'] = '<div class="template-demo d-flex justify-content-between flex-nowrap">
			<button type="button" class="btn btn-secondary btn-inverse-dark btn-rounded btn-icon" onclick="edit_person('."'".$person->id."'".')">
                        <i class="mdi mdi-border-color"></i>Edit
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


  public function ajax_about_list(){

		$this->load->model('query');
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
			
            //add html for action
			$row['act'] = '<div class="template-demo d-flex justify-content-between flex-nowrap">
			
			<button type="button" class="btn btn-danger btn-inverse-dark btn-rounded btn-icon" onclick="delete_person('."'".$person->id."'".')">
                        <i class="fa-solid fa-trash-can"></i>Delete
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

    public function ajax_add()
    {
        $this->load->model('data_model');
        
        $dob = $this->input->post('dob');
        $b_dob =substr($dob, 5, 5);
        $anni_date = $this->input->post('anni_date');
        $b_anni=substr($anni_date, 5, 5);
        
       $cust=array(
          'name' => $this->input->post('name'),
          'phone' => $this->input->post('phone'),
          'a_phone' => $this->input->post('a_phone'),
          'email' => $this->input->post('email'),
          'dob' => $this->input->post('dob'),
          'p_amount' => $this->input->post('p_amount'),
          'point' => $this->input->post('point'),
          'p_date' => $this->input->post('p_date'),
          'cust_type' => $this->input->post('cust_type'),
          'b_dob'=>$b_dob,

            'gender' => $this->input->post('gender'),
            'cast' => $this->input->post('cast'),
            'showroom' => $this->input->post('showroom'),
            'anni_date' => $this->input->post('anni_date'),
            'b_anni'=>$b_anni,


          'status'=> '1',
        );
        //$storecust = $this->query->insert($cust,'cust_tbl');
        //$insert = $this->data_model->insert($cust,'cust_tbl');
        
        $insert = $this->data_model->save($cust,'cust_tbl');
        echo json_encode(array("status" => TRUE));
    }
    
    

    public function ajax_appval($tbl)
    {
      $msg = array();
        $this->load->model('data_model');
        
        $tbl = $tbl;
        $post_data = $this->input->post();
        foreach ($post_data as $key => $value) {
          $dataarr= array($key => $value);
        }
       $updater = $this->data_model->update(array('house_id' => $this->input->post('house_id')), $dataarr,$tbl);
       if($updater){
        $msg['status'] =2;
        $msg['message'] = 'Status Updated!';
       }else{
        $msg['status'] =0;
        $msg['message'] = 'Status not Updated!';
       }
        echo json_encode($msg);
    }


    public function ajax_update()
    {
        $this->load->model('data_model');
        
        $dob = $this->input->post('dob');
        $b_dob =substr($dob, 5, 5);
        $anni_date = $this->input->post('anni_date');
        $b_anni=substr($anni_date, 5, 5);
        
       $cust=array(
          'id' => $this->input->post('id'),
          'name' => $this->input->post('name'),
          'phone' => $this->input->post('phone'),
          'a_phone' => $this->input->post('a_phone'),
          'email' => $this->input->post('email'),
          'dob' => $this->input->post('dob'),
          'p_amount' => $this->input->post('p_amount'),
          'point' => $this->input->post('point'),
          'p_date' => $this->input->post('p_date'),
          'cust_type' => $this->input->post('cust_type'),
          'b_dob'=>$b_dob,

            'gender' => $this->input->post('gender'),
            'cast' => $this->input->post('cast'),
            'showroom' => $this->input->post('showroom'),
            'anni_date' => $this->input->post('anni_date'),
            'b_anni'=>$b_anni,


          'status'=> '1',
        );
        $this->data_model->update(array('id' => $this->input->post('id')), $cust,'cust_tbl');
        echo json_encode(array("status" => TRUE));
    }
    
    public function ajax_delete($id)
    {
         $this->load->model('data_model');
        $this->data_model->delete_by_id($id,'review_tbl');
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete_product($id)
    {
         $this->load->model('data_model');
        $this->data_model->delete_by_id($id,'house_dtl_tbl');
        echo json_encode(array("status" => TRUE));
    }


    public function ajax_about_delete($id)
    {
         $this->load->model('data_model');
        $this->data_model->delete_by_id($id,'about_tbl');
        echo json_encode(array("status" => TRUE));
    }


    public function edit_user_data($id)
    {
         $this->load->model('data_model');
         $this->data_model->update(array('userid' => $this->input->post('id')), array('status'=>'3'),'user_tbl');
        echo json_encode(array("status" => TRUE));
    }







    public function store_list_tbl(){
        $result = array();
              $house_id='BGL'.rand ( 1000 , 9999 );
              
              $user_array = array(
                'house_id'=>$house_id,
                'userid'=>$this->input->post('userid'),
                'house_name'=>$this->input->post('house_name'),
                'type'=>$this->input->post('type'),
                'room'=>$this->input->post('room'),
                'price'=>$this->input->post('price'),
                'area'=>$this->input->post('area'),
                'address'=>$this->input->post('address'),
                'city'=>$this->input->post('city'),
                'state'=>$this->input->post('state'),
                'country'=>$this->input->post('country'),
                'desc1'=>$this->input->post('desc1'),
                'desc2'=>$this->input->post('desc2'),
                'b_date'=>$this->input->post('b_date'),
                'purpose'=>$this->input->post('purpose'),
                'bedroom'=>$this->input->post('bedroom'),
                'bathroom'=>$this->input->post('bathroom'),
                'con_name'=>$this->input->post('con_name'),
                'con_user'=>$this->input->post('con_user'),
                'con_email'=>$this->input->post('con_email'),
                'con_phn'=>$this->input->post('con_phn'),
                'date'=>date('Y-m-d'),
                'status'=> '1',
              );
  
        
          
             //master start
                $storems = $this->query->insert($user_array,'house_dtl_tbl');
                if($storems){
                   $result['status']='0';
                   $result['message']='Details Store Successfully.';
                   
                    echo json_encode($result);
                }else{
                   $result['status']='1';
                   $result['message']='Try again';
                }
             //master end
          
    }




    public function update_list_tbl_bk(){
        $result = array();
              $house_id= $this->input->post('house_id');
              
              $user_array = array(
                'house_id'=>$house_id,
                'userid'=>$this->input->post('userid'),
                'house_name'=>$this->input->post('house_name'),
                'type'=>$this->input->post('type'),
                'room'=>$this->input->post('room'),
                'price'=>$this->input->post('price'),
                'area'=>$this->input->post('area'),
                'address'=>$this->input->post('address'),
                'city'=>$this->input->post('city'),
                'state'=>$this->input->post('state'),
                'country'=>$this->input->post('country'),
                'desc1'=>$this->input->post('desc1'),
                'desc2'=>$this->input->post('desc2'),

                'b_date'=>$this->input->post('b_date'),
                'purpose'=>$this->input->post('purpose'),
                'bedroom'=>$this->input->post('bedroom'),
                'bathroom'=>$this->input->post('bathroom'),
                'con_name'=>$this->input->post('con_name'),
                'con_user'=>$this->input->post('con_user'),
                'con_email'=>$this->input->post('con_email'),
                'con_phn'=>$this->input->post('con_phn'),
                'date'=>date('Y-m-d'),
                'status'=> '1',
              );
  
        
          
             //master start
                $storems = $this->query->update( array('house_id' => $house_id), $user_array, 'house_dtl_tbl' );
                //$storems = $this->query->insert($user_array,'house_dtl_tbl');
                if($storems){
                   $result['status']='0';
                   $result['message']='Details Update Successfully.';
                   
                    
                }else{
                   $result['status']='1';
                   $result['message']='Try again';
                }
             //master end

             echo json_encode($result);
          
    }


    public function update_list_tbl()
    {
        $this->load->model('data_model');
        $house_id= $this->input->post('house_id');
        
       $cust=array(
          'id' => $this->input->post('id'),
          'house_id'=>$house_id,
          'userid'=>$this->input->post('userid'),
          'house_name'=>$this->input->post('house_name'),
          'type'=>$this->input->post('type'),
          'room'=>$this->input->post('room'),
          'price'=>$this->input->post('price'),
          'area'=>$this->input->post('area'),
          'address'=>$this->input->post('address'),
          'city'=>$this->input->post('city'),
          'state'=>$this->input->post('state'),
          'country'=>$this->input->post('country'),
          'desc1'=>$this->input->post('desc1'),
          'desc2'=>$this->input->post('desc2'),

          'b_date'=>$this->input->post('b_date'),
          'purpose'=>$this->input->post('purpose'),
          'bedroom'=>$this->input->post('bedroom'),
          'bathroom'=>$this->input->post('bathroom'),
          'con_name'=>$this->input->post('con_name'),
          'con_user'=>$this->input->post('con_user'),
          'con_email'=>$this->input->post('con_email'),
          'con_phn'=>$this->input->post('con_phn'),
          'date'=>date('Y-m-d'),
          'status'=> '1',
        );
        $this->data_model->update(array('id' => $this->input->post('id')), $cust,'house_dtl_tbl');
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit(){
        $this->load->model('data_model');
        $data = $this->data_model->get_by_id($this->input->get('id'), $this->input->get('tbl'));
        //print_r($id);
        echo json_encode($data);
    }







    public function store_about(){
      $result=array();
      $about = $this->input->post('about');

      $storecust = $this->query->insert(array('about' => $about,'status'=>'1'),'about_tbl');
      if($storecust){
          $result['status']= 1;
          $result['msg']="Successfully Account Created";
          $result['data']=array( 
          );
      }else{
          $result['status']= 0;
          $result['msg']="Try Again";
          $result['data']=array();
      }
      echo json_encode($result);
    }


    public function store_terms(){
      $result=array();
      $terms = $this->input->post('terms');

      $storecust = $this->query->insert(array('terms' => $terms,'status'=>'1'),'terms_tbl');
      if($storecust){
          $result['status']= 1;
          $result['msg']="Successfully Account Created";
          $result['data']=array( 
          );
      }else{
          $result['status']= 0;
          $result['msg']="Try Again";
          $result['data']=array();
      }
      echo json_encode($result);
    }


    public function store_privacy(){
      $result=array();

      $storecust = $this->query->insert(array('privacy' => $this->input->post('privacy'),'status'=>'1'),'privacy_tbl');
      if($storecust){
          $result['status']= 1;
          $result['msg']="Successfully Account Created";
          $result['data']=array( 
          );
      }else{
          $result['status']= 0;
          $result['msg']="Try Again";
          $result['data']=array();
      }
      echo json_encode($result);
    }


    public function ajax_social_update()
    {
        
        
       $cust=array(
          'id' => $this->input->post('id'),
          'fb' => $this->input->post('fb'),
          'twitter' => $this->input->post('twitter'),
          'insta' => $this->input->post('insta'),
          'youtube' => $this->input->post('youtube'),
          'status'=> '1',
        );
        $this->data_model->update(array('id' => $this->input->post('id')), $cust,'social_tbl');
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_site_contact_update()
    {
        
        
       $cust=array(
          'id' => $this->input->post('id'),
          'details' => $this->input->post('details'),
          'type' => $this->input->post('type'),
          'status'=> '1',
        );
        $this->data_model->update(array('id' => $this->input->post('id')), $cust,'site_contact');
        echo json_encode(array("status" => TRUE));
    }



    public function ajax_sub_delete($id){
         $this->load->model('data_model');
        $this->data_model->delete_by_id($id,'subscription_tbl');
        echo json_encode(array("status" => TRUE));
    }



    public function ajax_terms_delete($id)
    {
         $this->load->model('data_model');
        $this->data_model->delete_by_id($id,'terms_tbl');
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_privacy_delete($id)
    {
         $this->load->model('data_model');
        $this->data_model->delete_by_id($id,'privacy_tbl');
        echo json_encode(array("status" => TRUE));
    }
}
