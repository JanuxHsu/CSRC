<?php

class Project_model extends CI_Model
{
	function __construct()
    {
		parent::__construct(); 
    }
	
	function add_project($data){
		$this->db->insert('project', $data);
	}
	function get_all_project(){
		$query=$this->db->get('project');
		return $query;
	}
	function get_project_byid($data){
		$this->db->where($data);
		$this->db->order_by('project_id','asc');
		$query=$this->db->get('project');
		return $query;
	}
	/*function get_scale_by_scale_type($member_type){
		$this->db->where($member_type);
		$this->db->order_by('scale_id','asc');
		$query=$this->db->get('scale');
		return $query;
	}*/
	function edit_project($data){
		$data_to_update=array('project_name' => $data['project_name'],'project_owner'=>$data['project_owner'] ,'project_year'=>$data['project_year']);
		$this->db->update('project', $data_to_update,array('project_id'=>$data['project_id']));
	}
	function del_project($data){
		$this->db->where('project_id', $data['project_id']);
		$this->db->delete('project');
	}
}
?>