<?php

class Conf_103_regist_model extends CI_Model
{
	function __construct()
    {
		parent::__construct(); 
    }
	
	function add_regist($data){
		$this->db->insert('conf103_regist', $data);
	}
	function get_all_regist(){
		$query=$this->db->get('conf103_regist');
		return $query;
	}
	// function get_regist_byid($data){
	// 	$this->db->where($data);
	// 	$this->db->order_by('member_id','asc');
	// 	$query=$this->db->get('regist');
	// 	return $query;
	// }
	// function get_regist_by_regist_type($member_type){
	// 	$this->db->where($member_type);
	// 	$this->db->order_by('member_id','asc');
	// 	$query=$this->db->get('regist');
	// 	return $query;
	// }
	// function edit_regist($data){
	// 	$data_to_update=array('member_name' => $data['member_name'],'member_title'=>$data['member_title'] ,'member_type'=>$data['member_type'],'member_url'=>$data['member_url']);
	// 	$this->db->update('member', $data_to_update,array('member_id'=>$data['member_id']));
	// }
	// function del_regist($data){
	// 	$this->db->where('member_id', $data['member_id']);
	// 	$this->db->delete('member');
	// }
}
?>