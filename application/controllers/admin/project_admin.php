<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Project_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('project_model');
		//$this->load->library('session');
	}
	function index()
	{
		$headerdata['title']="管理者登入";
		$data['project']=$this->project_model->get_all_project()->result();
		$this->load->view('admin/header_admin_view',$headerdata);
		$this->load->view('admin/research/project_edit_view',$data);
		$this->load->view('admin/footer_admin_view');

	}

	//
	function add_project(){
		$data=$this->input->post('add_project');
		$this->project_model->add_project($data);
		$query=json_encode(array("status"=>"add_success"));
		echo $query;
	}
	/*function get_project_by_project_type($member_type){
		
		$query=$this->project_model->get_member_by_member_type($member_type);
		return $query;
	}*/
	function get_project_byid(){
		$data=$this->input->post('id');
		$query=$this->project_model->get_project_byid($data)->result();
		$query=json_encode($query);
		echo $query;
	}

	function edit_project(){
		$data=$this->input->post('edit_project');
		$this->project_model->edit_project($data);
		$query=json_encode(array("status"=>"edit_success"));
		echo $query;
	}
	function del_project(){
		$data=$this->input->post('del_project');
		$this->project_model->del_project($data);
		$query=json_encode(array("status"=>"del_success"));
		echo $query;
	}
	
}
?>