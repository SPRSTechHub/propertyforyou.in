<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function landing()
	{
		$this->load->view('landing');
	}


	public function index(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/dash',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}

	public function product(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/product',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}

	public function images(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/images',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}

	public function description(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/description',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}


	public function review(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/review',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}


	public function user(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/user',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}

	public function approve(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/approve',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
	}

	public function signin()
	{
		$this->load->view('auth/signin');
	}



	public function logout(){
		$this->session->unset_userdata('ses_data');
		$this->session->sess_destroy();
		redirect('home/signin');
	}


	public function test(){
		if($this->session->has_userdata('ses_data')){
		$data['admin_data']=$this->session->ses_data;
		
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/test',$data);
		$this->load->view('temp/footer');
		
        
	    }else{
		redirect('https://control.propertyforyou.in//home/signin');
		}
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
	


	public function approve_row(){
        $result = array();
        
        $house_id = $this->input->post('house_id');
		$find = $this->query->finder(array('house_id' => $house_id),'temp_house_dtl_tbl');
		if($find){
			$insert_data = $this->query->insert($find,'house_dtl_tbl');
			if($insert_data){
			// DELETE DATA START
				$deltete_history = $this->query->delete(array('house_id'=>$house_id,'status'=> '1'),'temp_house_dtl_tbl');
				if($deltete_history){
					$result['status']='0';
					$result['message'] = 'Approved Sussessfully.';
				}else{
					$result['status']='2';
					$result['message'] = 'Insert, Data Not Delete';
				}
			// DELETE DATA END
			}else{
				$result['status']='1';
				$result['message'] = 'Not Insert,Try After some Time';
			}
		}else{
            $result['status']='2';
            $result['message'] = 'Not Find';
		}
		

        echo json_encode($result);
      }
}
