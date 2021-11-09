<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		$this->load->view('temp/header');
        $this->load->view('landing');
        $this->load->view('temp/footer');
	}
    public function about()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/about');
        $this->load->view('temp/footer');
	}
    public function news()
	{
		$this->load->view('temp/header');
        $this->load->view('temp/news');
        $this->load->view('temp/footer');
	}
    public function contact()
	{
		$this->load->view('temp/header');
        $this->load->view('temp/contact');
        $this->load->view('temp/footer');
	}
    public function faq()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/faq');
        $this->load->view('temp/footer');
	}
    public function legal()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/legal');
        $this->load->view('temp/footer');
	}
    public function privacy()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/privacy');
        $this->load->view('temp/footer');
	}
    public function term()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/term');
        $this->load->view('temp/footer');
	}
	public function traning()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/traning');
        //$this->load->view('temp/footer');
	}
    public function grievance()
	{
		$this->load->view('temp/header');
        $this->load->view('pages/grievance');
        $this->load->view('temp/footer');
	}
}
