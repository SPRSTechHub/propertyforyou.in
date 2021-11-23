<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('Query');
    }
    

  public function checking_tbl(){
    $msg = array();
    $userid= $this->input->post('userid');
    $password=$this->input->post('password');
    $userfind = $this->query->finder(array('userid' => $userid), 'user_tbl');
    if($userfind){
      $userfind = $this->query->finder(array('userid' => $userid,'status'=> '0'), 'user_tbl');
      if($userfind){
        $msg['error'] = '2';
        $msg['status'] ='Your id is not verified,eheck Your Mail Id And verified First.';
      }else{
      $user_data = array(
        'userid'=>$userid,
        'password'=>$password,
        'status'=> '1',
      );
      $data_chk = $this->query->finder($user_data, 'user_tbl');
       if($data_chk){
      $user_data = $this->query->finder(array('userid'=>$userid), 'user_tbl')->row();
      $this->session->set_userdata('ses_data',$user_data);
      $msg['error'] = '0';
      $msg['status'] = 'Logged in Successfully';
  
       }else{
      $msg['error'] = '1';
      $msg['status'] ='incorrect password';
       }
      }
    }else{
       $msg['error'] = '2';
       $msg['status'] ='create account to log in';
    }
    echo json_encode($msg);
  }

  public function sold_function(){
    $msg = array();
    $status= $this->input->post('status');
    $house_id=$this->input->post('house_id');
    
    $userfind = $this->query->updater(array('house_id' => $house_id),array('status'=>$status),'house_dtl_tbl');
    if($userfind){
      $msg['error'] = '0';
      $msg['status'] ='Details Updated. ';
    }else{
       $msg['error'] = '2';
       $msg['status'] ='Try After Some Time. ';
    }
    echo json_encode($msg);
  }

  public function verify_tbl(){
    $msg = array();
    $code=$this->input->post('code');
    $userfind = $this->query->finder(array('code' => $code), 'user_tbl');
    if($userfind){


      $user_data = array(
        'code'=>$code,
        'status'=> '1',
      );
      $data_chk = $this->query->finder($user_data, 'user_tbl');
      if($data_chk){
        $msg['error'] = '2';
        $msg['status'] ='Already verified !';
      }else{
        $update_user = $this->query->updater( array('code' => $code), array( 'status' =>'1'), 'user_tbl' );
        if($update_user){
          $msg['error'] = '0';
          $msg['status'] ='Successfully verified !';
        }else{
          $msg['error'] = '2';
          $msg['status'] ='Try Again';
        }
      }
      
      
    }else{
       $msg['error'] = '2';
       $msg['status'] ='Wrong verification code !';
    }
    echo json_encode($msg);
  }

  public function store_cust(){
    $msg = array();
    $userid= $this->input->post('userid');
    $password=$this->input->post('password');

    $name= $this->input->post('name');
    $phone=$this->input->post('phone');

    $random=rand(0000,9999);
    $userfind = $this->query->finder(array('userid' => $userid), 'user_tbl');
    if($userfind){
      $msg['error'] = '2';
       $msg['status'] ='This Email Id Is Already Register With A Account, Log In To Open Your Account';
       echo json_encode($msg);
    }else{
      $user_data = array(
        'userid'=>$userid,
        'password'=>$password,
        'name'=>$name,
        'phone'=>$phone,
        'code'=>$random,
        'status'=> '0',
        'date'=>date('Y-m-d'),
      );
      $data_chk = $this->query->insert($user_data, 'user_tbl');
       if($data_chk){
      redirect('Mailer/send_con/?email='.$userid.'&code='.$random);
       }else{
      $msg['error'] = '1';
      $msg['status'] ='Try Again';
      echo json_encode($msg);
       }
    }
  }




  public function store_house_img(){
    $result=array();
    $old_img= $this->input->post('old_img');
      $house_img = $this->upload_image('house_img');
    
    
  
      $store_img =  $this->query->updater(array('image'=> $old_img),array('image'=> $house_img),'image_tbl');
      if($store_img){
      $result['status']='0';
      }else{
      $result['status']='2';
      }
  
  
    
       
    echo json_encode($result);
  } 

  public function review(){
    $msg = array();
    $name= $this->input->post('name');
    $text=$this->input->post('text');

    $user_data = array(
      'house_id'=>$this->input->post('house_id'),
      'name'=>$name,
      'text'=>$text,
      'date'=>date('Y-m-d'),
      'status'=> '1',
    );
    $data_chk = $this->query->insert($user_data, 'review_tbl');
     if($data_chk){
    
    $msg['error'] = '0';
    $msg['status'] = 'Successfully Submited.';

     }else{
    $msg['error'] = '1';
    $msg['status'] ='Try Again';
     }
    echo json_encode($msg);
  }

  public function con_submit(){
    $msg = array();
    $name= $this->input->post('name');
    $email= $this->input->post('email');
    $message=$this->input->post('message');

    $user_data = array(
      'name'=>$name,
      'email'=>$email,
      'message'=>$message,
      'status'=> '1',
    );
    //$data_chk = $this->query->insert($user_data, 'contact_tbl');
    $data_chk =  $this->db->insert('contact_tbl', $user_data);
    $insert_id = $this->db->insert_id();

     if($data_chk){

      $rcvr = $this->query->finder(array('type' => 'recever_email_id'), 'tbl_config');
      $rcvr_id = !empty($rcvr)?$rcvr->row()->descp : 'sprsinfotech@gmail.com';
    $msg['error'] = '0';
    $msg['status'] = 'Successfully Submited.';
    $msg['rcvrid']= $rcvr_id;
    $msg['id']=$insert_id;
     }else{
    $msg['error'] = '1';
    $msg['status'] ='Try Again';
     }
    echo json_encode($msg);
  }


    public function store_list_tbl(){
      $result = array();
      if($this->session->has_userdata('post_data')){
        $permission = $this->input->post('permission');
        if(!empty($permission)){
          $post_data = $this->session->post_data;
          $img_data = $this->session->img_data;
          $result['status']='0';
          $result['message']='Wait for verification from our end.';
       
          $storems = $this->query->insert($post_data,'house_dtl_tbl');
              if($storems){
                // insert batch images //
                $batch_insert_nwb3 = $this->db->insert_batch('image_tbl', $img_data);
                 $result['status']='0';
                 $result['message']='Request Send To Admin,Now Waiting For Admin Response';
                 $result['houseid']=$post_data['house_id'];

                 // clear all post session //
                 unset($_SESSION['post_data']);
                 unset($_SESSION['img_data']);
              }else{
                 $result['status']='1';
                 $result['message']='Try again';
              }
            }
          }else{
            $house_id='BGL'.rand ( 1000 , 9999 );
            $post_array = array(
              'house_id'=>$house_id,
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
              'date'=>date('Y-m-d'),
              'status'=> '3',
            );
            $post_data = $this->session->set_userdata('post_data',$post_array);
            $result['status']='0';
            $result['message']='One more step now.... upload some image';
            $result['houseid']=$house_id;
        }
        echo json_encode($result);
    }

function faltukaam(){
  unset($_SESSION['post_data']);
  unset($_SESSION['img_data']);
}

    function store_img_session(){
      $result=array();
      $hid = $this->input->post('hid');

      if(isset($_FILES))
      {
         $tmpFile = $_FILES['file']['tmp_name'];
         $extension = explode('.', $_FILES['file']['name']);
         $new_name = rand() . '.' . $extension[1];
         $destination = 'uploads/' . $new_name;
         $movment = move_uploaded_file($tmpFile, $destination);
        if($movment){
          $post_img_array = array('house_id' => $hid,'image' =>$new_name,'status'=> '1');
          $_SESSION['img_data'][]=$post_img_array;
          $result['status']='0';
          $result['result'] = 'image under verification';
          $result['data']=count($_SESSION['img_data']);
        }else{
          $result['status']='2';
          $result['result'] = 'Try to upload another image!';
        }
      }else{
        $result['result'] = 'No image detected!';
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


function uploadFiles(){
    $result=array();
    $hid = $this->input->post('hid');
    $find_id = $this->query->finder(array('house_id'=>$hid), 'house_dtl_tbl');
    if($find_id){
      if(isset($_FILES))
      {
        $tmpFile = $_FILES['file']['tmp_name'];
         $extension = explode('.', $_FILES['file']['name']);
         $new_name = rand() . '.' . $extension[1];
         $destination = 'uploads/' . $new_name;
         move_uploaded_file($tmpFile, $destination);
        
         $nibedita_stor_kore_janao =  $this->query->insert(array('house_id' => $hid,'image' =>$new_name,'status'=> '1',), 'image_tbl');
         if($nibedita_stor_kore_janao){
         $result['status']='0';
         $result['result'] = 'image uploaded successfully';
         }else{
         $result['status']='2';
         $result['result'] = 'No image added!';
         }

      }else{
        $result['result'] = 'No image detected!';
      }
    }else{
      $result['result'] = 'This id not stored!';
    }
    echo json_encode($result);
}


    public function storeimg(){
      $result=array();
      // $avatarimg= $this->input->post('filep');
      
      
      $image = $this->upload_image('propertyimage');
    
      $find_id = $this->query->finder(array('house_id'=>$this->input->post('house_id')), 'image_tbl');
      if($find_id){
          $count = $find_id->num_rows();
      }else{
        $count=1;
      }

      if($find_id->num_rows() >= '10'){
        // UPDATE  START
        //$old_image=$this->query->getlastimg( array('house_id' => $this->input->post('house_id')));
       // $house_id=$this->input->post('house_id');

       // $call_table = $this->query->getQuery
       //     ("SELECT * FROM image_tbl WHERE status = '1' AND house_id = '".$house_id."' ORDER BY 'id' DESC LIMIT 1");

       // $update_profile_img_data = $this->query->updater( array('house_id' => $house_id,'image' =>$call_table->result()->image), array( 'image' =>$image), 'image_tbl' );
        // if($update_profile_img_data){
        // $result['status']='0';
        // }else{
        // $result['status']='2';
        // }
        // UPDATE END
        $result['status']='5';
      }else{
        $nibedita_stor_kore_janao =  $this->query->insert(array('house_id' => $this->input->post('house_id'),'image' =>$image,'status'=> '1',), 'image_tbl');
        if($nibedita_stor_kore_janao){
        $result['status']='0';
        }else{
        $result['status']='2';
        }
      }


      
         
      echo json_encode($result);
    }  

    function store_list_tbl_update(){
      $msg = array();
      $hid = $this->input->get('hid');
      $data = $this->input->post();
      $row = array();
      foreach ($data as $key => $value) {
        $row[$key] = strip_tags($value);
      }
      $updatestatus = $this->query->updater( array('house_id' => $hid), 
       $row, 'house_dtl_tbl' );

       if($updatestatus){
        $msg['status']= 0;
        $msg['result']='Update done successfully';
       }else{
        $msg['status']= 1;
        $msg['result']='Update failed!';
       }
       echo json_encode($msg);
    }

}
