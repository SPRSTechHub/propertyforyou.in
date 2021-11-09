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
}