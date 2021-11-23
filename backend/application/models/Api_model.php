<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model{
	
   // var $column_search = array('id');
    var $order = array('id' => 'desc');
	
	
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function allposts_count($tbl)
    {   
        $query = $this->db->get($tbl);
        return $query->num_rows();  
    }

    function allposts($limit,$start,$col,$dir,$tbl)
    {
       $this->db->limit($limit,$start);
       $this->db->order_by($col,$dir);
       $query = $this->db->get($tbl);
        
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
    }

    function posts_search($limit,$start,$search,$col,$dir,$tbl)
    {
        $this->db->like('id',$search);
        $this->db->or_like('title',$search);
        $this->db->limit($limit,$start);
        $this->db->order_by($col,$dir);
        $query = $this->db->get($tbl);
        
        if($query->num_rows()>0)
        {
            return $query->result();  
        }
        else
        {
            return null;
        }
    }

    function posts_search_count($search,$tbl)
    {
        $this->db->like('id',$search);
        $this->db->or_like('title',$search);
        $query = $this->db->get($tbl);
    
        return $query->num_rows();
    }

}

    ?>