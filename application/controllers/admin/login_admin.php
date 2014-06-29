<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Login_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('admin_model');
		$this->load->library('session');
	}
	function index()
	{
		$headerdata['title']="管理者登入";

		$this->load->view('admin/login_admin_view',$headerdata);
		$this->load->view('admin/footer_admin_view');

	}
	function login_submit()
	{
		$status = '';
		$msg = '';
		$result='';
		$account = $this->input->post('member_account',true);
		$password = $this->input->post('member_password',true);	
		$password=md5($password);
		$result = $this->admin_model->get_one_user($account,$password);
		if($result)
		{
			$status='success';
			$msg='登入成功!';
			$admin_data = array(
			'token' => $token = md5(uniqid(rand(), TRUE)),
			'member_id' => $result[0]->member_id,
			'member_name' => $result[0]->member_name,
			'member_type' => $result[0]->member_type
			);			
			$this->session->set_userdata('admin',$admin_data);
			//redirect('admin/home_admin');
		}
		else
		{		
			$status='fail';
			$msg='帳號，密碼錯誤!';	
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));	
	}
	function logout_submit()
	{
		$is_login = $this->session->userdata('admin');
		if($is_login)
		{
			$this->session->unset_userdata('admin');
			redirect('admin/login_admin');
		}
		else
		{
			redirect('admin/login_admin'); 	
		}
	}
}
?>