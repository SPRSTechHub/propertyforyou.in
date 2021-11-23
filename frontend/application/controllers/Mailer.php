<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer extends CI_Controller {

    function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
			$this->load->config('Email');
            $this->load->library('session');
            $this->load->library('email');
        }

    public function index() {
      //  $this->load->view('emails/act_email',$data);
    }

    public function SendEmail() {



        
        /*$act_link= base_url().rand('22','99');
        $data = array('to_email'=>'sprsinfotech@gmail.com',
        'act_link'=>$act_link);
        $status = $this->send_mail($data, 'activation');
         echo json_encode($status);*/
    }

    public function SendtoWebmaster() {
        $msg = array();
        $email=$this->input->get('email');
        $code=$this->input->get('code');
        $email_array= array('to_email'=>$email,'act_link'=>$code);

         $status = $this->send_mail($email_array, 'enquery');
        if($status){
            $msg['error'] = '0'; 
            $msg['status'] = 'Done!';
        }else{
            $msg['error'] = '1'; 
            $msg['status'] = 'Error!';
        }
        redirect(base_url());
    }

    public function send_con(){
        $msg = array();
        $email=$this->input->get('email');
        $code=$this->input->get('code');
        //$email['to_email']
        $email_array= array('to_email'=>$email,'act_link'=>$code);

         $status = $this->send_mail($email_array, 'activation');
        if($status){
            $msg['error'] = '0'; 
            $msg['status'] = 'Check Activation Link.';
        }else{
            $msg['error'] = '1'; 
            $msg['status'] = 'Error.';
        }
        echo json_encode($msg);
    }

    
    public function send_mail($param, $mailtype){
        $this->load->config('Email');
        $this->load->library('email');

        $from = $this->config->item('smtp_user');
        
        $to = $param['to_email'];

        $subject = 'Welcome Mail from Propertyforyou';
             if($mailtype == 'activation'){
                $url=base_url().'home/activation/?code='.$param['act_link'];
                $data['act_link'] = $url;
                $data['user_email'] = $param['to_email'];
                $message = $this->load->view('emails/act_email',$data,true);
             }else if($mailtype == 'enquery'){
                $url=base_url().'home/enquery/?code='.$param['act_link'];
                $data['act_link'] = $url;
                $data['user_email'] = $param['to_email'];
                $message = $this->load->view('emails/enq_mail',$data,true);
             }else{
                 $data = '';
                 $message =  $param['content'];
             }

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()){
           // return 'Email has been sent successfully';
           return true;
        } else {
           // return $this->email->print_debugger();
           return false;
        }
    }

    
}
