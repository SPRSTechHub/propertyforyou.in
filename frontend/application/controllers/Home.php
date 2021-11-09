<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/index',$data);
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/index');
			$this->load->view('temp/footer');
		}
	}
	
	public function search_page(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/search_page',$data);
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/search_page');
			$this->load->view('temp/footer');
		}
    }


	public function landing()
	{
		$this->load->view('landing');
	}

	public function about(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/about');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/about');
			$this->load->view('temp/footer');
		}
	}

	public function contact(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/contact');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/contact');
			$this->load->view('temp/footer');
		}
	}

	//public function activation(){
		//https://propertyforyou.in/functions/activation/?code=123
	//	$code=$this->input->get('code');
	//	echo($code);
	//}


	// public function desc()
	// {
	// 	$this->load->view('temp/header');
	// 	$this->load->view('temp/nav');
	// 	$this->load->view('pages/desc');
	// 	$this->load->view('temp/footer');
	// }
	
	public function desc(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/desc');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/desc');
			$this->load->view('temp/footer');
		}
    }

	public function listing(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/listing',$data);
		$this->load->view('temp/footer');
        
	    }else{
		redirect('home/signin');
		}
	}
	
	public function my_listing(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/my_listing',$data);
		$this->load->view('temp/footer');
        
	    }else{
		redirect('home/signin');
		}
    }


	public function signin()
	{
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/signin');
		$this->load->view('temp/footer');
	}

	public function activation()
	{
		//$this->load->view('temp/header');
		//$this->load->view('temp/nav');
		$this->load->view('pages/activation');
		//$this->load->view('temp/footer');
	}

	public function verify()
	{
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/verify');
		$this->load->view('temp/footer');
	}

	public function signup()
	{
		$this->load->view('temp/header');
		$this->load->view('temp/nav');
		$this->load->view('pages/signup');
		$this->load->view('temp/footer');
	}

	public function sale(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/sale');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/sale');
			$this->load->view('temp/footer');
		}
	}
	public function rent(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/rent');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/rent');
			$this->load->view('temp/footer');
		}
	}
	public function garage(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/garage');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/garage');
			$this->load->view('temp/footer');
		}
	}
	public function apartment(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/apartment');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/apartment');
			$this->load->view('temp/footer');
		}
	}
	public function commercial(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/commercial');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/commercial');
			$this->load->view('temp/footer');
		}
	}
	public function house(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/house');
		$this->load->view('temp/footer');
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/house');
			$this->load->view('temp/footer');
		}
	}
	
	public function photo(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/photo');
		$this->load->view('temp/footer');
        
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/photo');
			$this->load->view('temp/footer');
		}
    }

	public function post(){
		if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('temp/header');
		$this->load->view('temp/nav',$data);
		$this->load->view('pages/edit_post');
		$this->load->view('temp/footer');
	    }else{
			$this->load->view('temp/header');
			$this->load->view('temp/nav');
			$this->load->view('pages/photo');
			$this->load->view('temp/footer');
		}
    }

	public function logout(){
		$this->session->unset_userdata('ses_data');
		$this->session->sess_destroy();
		redirect('home/signin');
	}
}