<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SQLTable extends CI_Controller {

  function __construct(){
		parent::__construct();
		    $this->load->model('Query');
        $this->load->library("pagination");
    }

    public function loadRecord($rowno=0){
      $userid=$this->session->ses_data->userid;
        $rowperpage = 5;
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }else{
            $rowno = 0 * $rowperpage;
        }
        $allcount = $this->query->countAll('house_dtl_tbl');
        $users_record = $this->query->get_Alldata($rowno,$rowperpage,'house_dtl_tbl',array('userid'=>$userid));
        $result =array();
       foreach($users_record->result() as $house){
        
        $key = array();
        $key ['house_id']=$house->house_id;
        $key ['userid']=$house->userid;
        $key ['house_name']= $house->house_name;
        $key ['address']=$house->address;
        $key ['city']=$house->city;
        $key ['purpose']=$house->purpose;
       $key ['house_rating']= $this->getloop($house->house_rating,'<li class="mb-0"> <i class="fa fa-star"> </i> </li>'); //$this->getloop($house->house_rating,'<li class="mb-0"> <i class="fa fa-star"> </i> </li>');
        $key ['price']=$house->price;
        $key ['status']=$house->status;
        $key ['date']=$house->date;
        $key ['house_imges']=$this->get_images(array('house_id'=>$house->house_id),'1','image_tbl');
        array_push($result, $key);
        
          } 

        $users_record = $result;

        // Pagination Configuration
        $config['base_url'] = base_url().'SQLTable/loadRecord';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
    
        // Initialize
        $this->pagination->initialize($config);
    
        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
    
        echo json_encode($data);
     
      }

      function text(){
        $users_record = $this->query->get_Alldata('0','5','house_dtl_tbl',array('status'=>1));
        print_r($users_record->result());
      }

      function getloop($param, $content){
        $result = '';
        for ($x = 1; $x <= $param; $x++) {
          $result .= $content;
        }
        return $result;
      }

      function get_images($param,$limit,$tbl){
        $items = array();
        $data = $this->query->get_primary_img($param,$limit, $tbl);
        if($data){
         /*foreach ($data->row() as $row_img) {
            $items[]=$row_img->image;
          }*/
          return $items[]=$data;
        }else{
          return false;
        }
      }

      function get_images_id(){
        $items = array();
        $id = $this->input->get('hid');
        $data = $this->query->get_primary_img(array('house_id'=>$id),'', 'image_tbl');
        if($data){
          $items['results']=$data;
        }else{
          $items['results']= '';
        }
        echo json_encode($items);
      }
      

}