<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Scale_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('scale_model');
		//$this->load->library('session');
	}
	function index()
	{
		$headerdata['title']="管理者登入";
		$data['scale']=$this->scale_model->get_all_scale()->result();
		$this->load->view('admin/header_admin_view',$headerdata);
		$this->load->view('admin/research/scale_edit_view',$data);
		$this->load->view('admin/footer_admin_view');

	}

	//
	function add_scale(){
		$data=$this->input->post('add_scale');
		$this->scale_model->add_scale($data);
		$query=json_encode(array("status"=>"add_success"));
		echo $query;
	}
	/*
	function get_scale_by_scale_type($member_type){
		
		$query=$this->member_model->get_member_by_member_type($member_type);
		return $query;
	}*/
	function get_scale_byid(){
		$data=$this->input->post('id');
		$query=$this->scale_model->get_scale_byid($data)->result();
		$query=json_encode($query);
		echo $query;
	}

	function edit_scale(){
		$data=$this->input->post('edit_scale');
		$this->scale_model->edit_scale($data);
		$query=json_encode(array("status"=>"edit_success"));
		echo $query;
	}
	function del_scale(){
		$data=$this->input->post('del_scale');
		$this->scale_model->del_scale($data);
		$query=json_encode(array("status"=>"del_success"));
		echo $query;
	}
	
}
?>