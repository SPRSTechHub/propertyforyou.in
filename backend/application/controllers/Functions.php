<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('Query');
    }

    public function ajax_delete($id)
    {
        $this->query->delete_by_id($id,$table);
        echo json_encode(array("status" => TRUE));
    }


    public function checking_tbl(){
      $msg = array();
      $admin_id= $this->input->post('admin_id');
      $admin_pass=$this->input->post('admin_pass');
      $userfind = $this->query->finder(array('admin_id' => $admin_id), 'admin_tbl');
      if($userfind){
        $admin_data = array(
          'admin_id'=>$admin_id,
          'admin_pass'=>$admin_pass,
          'status'=> '1',
        );
        $data_chk = $this->query->finder($admin_data, 'admin_tbl');
         if($data_chk){
  
        $this->session->set_userdata('ses_data', $data_chk);
        $msg['error'] = '0';
        $msg['status'] = 'Logged in Successfully';
  
         }else{
        $msg['error'] = '1';
        $msg['status'] ='incorrect password';
         }
      }else{
         $msg['error'] = '2';
         $msg['status'] ='create account to log in';
      }
      echo json_encode($msg);
}



public function store_house_img(){
  $result=array();
  $old_img= $this->input->post('old_img');
  //$house_img= $this->input->post('house_img');
  
  //$cat_img= $this->input->post('cat_img');
  //if(!empty($cat_img)){
    $house_img = $this->upload_image('house_img');
  //}
  

  $store_img =  $this->query->updater(array('image'=> $old_img),array('image'=> $house_img),'image_tbl');
    if($store_img){
    $result['status']='0';
    }else{
    $result['status']='2';
    }


  
     
  echo json_encode($result);
} 

function upload_image($param){
  if(isset($_FILES[$param]))
  {
     $extension = explode('.', $_FILES[$param]['name']);
     $new_name = rand() . '.' . $extension[1];
     $destination = 'uploads/' . $new_name;
     move_uploaded_file($_FILES[$param]['tmp_name'], $destination);
     return $new_name;
  }else{
    return false;
  }
}
}