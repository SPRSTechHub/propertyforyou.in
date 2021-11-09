defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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