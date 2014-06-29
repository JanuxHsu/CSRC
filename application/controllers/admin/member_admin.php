<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Member_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('member_model');
	}
	function index()
	{
		$user_session = $this->session->userdata('admin');
		$now_admin_type = $user_session['member_type'];
		$headerdata['title']="管理者登入";
		$data['members']=$this->member_model->get_all_member()->result();
		$data['type']=$now_admin_type;
		//print_r($data);


		
		$this->load->view('admin/header_admin_view',$headerdata);
		$this->load->view('admin/member/member_edit_view',$data);
		$this->load->view('admin/footer_admin_view');

	}
	
	function add_member()
	{
		$data=$this->input->post('add_member');
		$regist_user=array(
		    	'member_name'=>$data['member_name'],
		    	'member_account'=>$data['member_account'],
		    	'member_password'=>md5($data['member_password']),
		    	'member_type'=>$data['member_type'],
		    	);
		$this->member_model->add_member($regist_user);
		$query=json_encode(array("status"=>"add_success"));
		echo $query;
	}
	function get_member_by_member_type($member_type){
		
		$query=$this->member_model->get_member_by_member_type($member_type);
		return $query;
	}
	function get_member_byid(){
		$data=$this->input->post('id');
		$query=$this->member_model->get_member_byid($data)->result();
		$query=json_encode($query);
		echo $query;
	}

	function edit_member()
	{
		$data=$this->input->post('edit_member');
		$regist_user=array(
		    	'member_name'=>$data['member_name'],
		    	'member_account'=>$data['member_account'],
		    	'member_password'=>md5($data['member_password']),
		    	'member_type'=>$data['member_type'],
		    	);
		$this->member_model->edit_member($regist_user);
		$query=json_encode(array("status"=>"edit_success"));
		echo $query;
	}
	function del_member()
	{
		$data=$this->input->post('del_member');
		$this->member_model->del_member($data);
		$query=json_encode(array("status"=>"del_success"));
		echo $query;
	}
	
}
?>