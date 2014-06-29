<?php

class Scale_model extends CI_Model
{
	function __construct()
    {
		parent::__construct(); 
    }
	
	function add_scale($data){
		$this->db->insert('scale', $data);
	}
	function get_all_scale(){
		$query=$this->db->get('scale');
		return $query;
	}
	function get_scale_byid($data){
		$this->db->where($data);
		$this->db->order_by('scale_id','asc');
		$query=$this->db->get('scale');
		return $query;
	}
	/*function get_scale_by_scale_type($member_type){
		$this->db->where($member_type);
		$this->db->order_by('scale_id','asc');
		$query=$this->db->get('scale');
		return $query;
	}*/
	function edit_scale($data){
		$data_to_update=array('scale_name' => $data['scale_name'],'scale_owner'=>$data['scale_owner'] ,'scale_url'=>$data['scale_url']);
		$this->db->update('scale', $data_to_update,array('scale_id'=>$data['scale_id']));
	}
	function del_scale($data){
		$this->db->where('scale_id', $data['scale_id']);
		$this->db->delete('scale');
	}
}
?>