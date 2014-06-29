<?php

class News_model extends CI_Model
{
	function __construct()
    {
		parent::__construct(); 
    }
	
	function add_news($data){
		$this->db->insert('news', $data);
	}

	function add_data($data)
	{
		$this->db->insert('data', $data);
	}

	function get_all_news()
	{
		$this->db->order_by('news_time','desc');
		return $this->db->get('news');
	}

	function get_all_news_by_admin($admin_name)
	{
		$this->db->where('admin_name',$admin_name);
		return $this->db->get('news');
	}

	function get_news_byid($data){
		$this->db->where($data);
		$this->db->order_by('news_id','asc');
		$query=$this->db->get('news');
		return $query;
	}

	function get_one_news($news_id)
	{
		$this->db->where('news_id',$news_id);
		return $this->db->get('news');
	}
	
	/*
	function get_member_by_member_type($member_type){
		$this->db->where($member_type);
		$this->db->order_by('member_id','asc');
		$query=$this->db->get('member');
		return $query;
	}
	*/
	function edit_news($data){
		$data_to_update=array('news_content' => $data['news_content'],'news_title'=>$data['news_title']);
		$this->db->update('news', $data_to_update,array('news_id'=>$data['news_id']));
	}
	function del_news($data){
		$this->db->where('news_id', $data['news_id']);
		$this->db->delete('news');
	}
	function is_result_exist(){
		$result=$this->db->count_all('news');
		if ($result>0){
			return true;
		}else{
			return false;
		}
	}

	function update_news_doc($filename,$newsid)
	{
		$userdata=array
		(			
			'news_doc'=>$filename,
			
		);
		return $this->db->where('news_id',$newsid)->update('news',$userdata);
	}
}
?>