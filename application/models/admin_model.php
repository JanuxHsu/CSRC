<?php

class Admin_model extends CI_Model
{
	function __construct()
    {
		parent::__construct(); 
    }
	
	function get_one_user($account,$password)
	{ 
		$this->db->select('*')->from('member')->where('member_account',$account)->where('member_password',$password)->limit(1);	
		$query = $this->db->get();
		if($query->num_rows()>0)
			return $query->result();
		else
			return false;
	}
	function get_one_account($id)
	{
		$query = $this->db->where('member_id',$id)->get('member');
		return $query;
	}
	function check_account($account)
	{
		$count = $this->db->where('member_account',$account)->count_all_results('member');
		return $count;
	}
	function update_password($id,$new_password)
	{
		$apassworddata = array(
		'member_password' => $new_password,
		);
		if($this->db->where('member_id',$id)->update('member', $apassworddata))
		return TRUE;
		else
		return FALSE;
	}

	
}
?>