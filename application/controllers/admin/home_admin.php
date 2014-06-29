<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Home_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
	    $is_login = $this->session->userdata('admin');
		if(!$is_login||empty($is_login['token']))
		{
			redirect('admin/login_admin/');
		}	
	}

	function index()
	{
		$headerdata['title']="管理者首頁";
		$admin_array = $this->session->userdata('admin');
		$data['member_name'] = $admin_array['member_name'].' 管理員 '; 
		
		$this->load->view('admin/header_admin_view',$headerdata);
		$this->load->view('admin/home_view',$data); 
		$this->load->view('admin/footer_admin_view'); 
	}
}
?>