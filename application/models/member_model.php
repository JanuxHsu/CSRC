<?php

class Member_model extends CI_Model
{
	function __construct()
    {
		parent::__construct(); 
    }
	
	function add_member($data){
		$this->db->insert('member', $data);
	}
	function get_all_member(){
		$query=$this->db->get('member');
		return $query;
	}
	function get_member_byid($data){
		$this->db->where($data);
		$this->db->order_by('member_id','asc');
		$query=$this->db->get('member');
		return $query;
	}
	function get_member_by_member_type($member_type){
		$this->db->where($member_type);
		$this->db->order_by('member_id','asc');
		$query=$this->db->get('member');
		return $query;
	}
	function edit_member($data){
		$this->db->update('member', $data);
	}
	function del_member($data){
		$this->db->where('member_id', $data['member_id']);
		$this->db->delete('member');
	}
}
?>