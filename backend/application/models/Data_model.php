<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model{
	
   // var $column_search = array('id');
    var $order = array('id' => 'desc');
	
	
public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
    private function _get_datatables_query($tbl){
        
        $column_order = $this->db->list_fields($tbl);
	 	$column_search = $this->db->list_fields($tbl);
		$this->db->from($tbl);
        $i = 0;
	
        foreach ($column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
	 function get_datatables_by_date_range($tbl, $filter){
		$condition = "date BETWEEN " . "'" . $filter['date1'] . "'" . " AND " . "'" . $filter['date2'] . "'";	
        $this->_get_datatables_query($tbl);
		$this->db->where($condition);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
	
    function get_datatables($tbl){
        $this->_get_datatables_query($tbl);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($tbl){
        $this->_get_datatables_query($tbl);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($tbl){
        $this->db->from($tbl);
        return $this->db->count_all_results();
    }
 
    public function get_by_id($mid, $tbl){
		$this->db->where('id', $mid);
        $query = $this->db->get($tbl);
        return $query->row();
    }
    
    
    
    public function get_by_id1($id)
    {
        $this->db->from($this->$tbl);
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
    

    public function save($data,$tbl){
        $this->db->insert($this->$tbl, $data);
        return $this->db->insert_id();
    }
    
    public function insert($param, $table){ 
       $insert = $this->db->insert($table,$param);
       if($insert){
              return true;
       }else{
            return false;
        }
    }
 
    public function update($where, $data, $tbl){
        $this->db->update($tbl, $data, $where);
        return $this->db->affected_rows();
    }
 
    public function delete_by_id($id, $tbl){
        $this->db->where('id', $id);
        $this->db->delete($tbl);
		
    }
 
}