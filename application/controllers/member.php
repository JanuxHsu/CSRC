<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();	
		$this->load->model('member_model');
	}
	public function index()//senior
	{
		$data['member']=$this->member_model->get_member_by_member_type(array('member_type'=>'中心主任'))->result();
		$this->load->view('layout/header_view');
		$this->load->view('content/member/senior_view',$data);
		$this->load->view('layout/footer_view');
	}
	public function internal()//internal
	{
		$data['member']=$this->member_model->get_member_by_member_type(array('member_type'=>'校內成員'))->result();
		$this->load->view('layout/header_view');
		$this->load->view('content/member/internal_view',$data);
		$this->load->view('layout/footer_view');
	}
	public function external()
	{
		$data['member']=$this->member_model->get_member_by_member_type(array('member_type'=>'校外成員'))->result();
		$this->load->view('layout/header_view');
		$this->load->view('content/member/external_view',$data);
		$this->load->view('layout/footer_view');
	}
	public function assist()
	{
		$data['member']=$this->member_model->get_member_by_member_type(array('member_type'=>'中心助理'))->result();
		$this->load->view('layout/header_view');
		$this->load->view('content/member/assist_view',$data);
		$this->load->view('layout/footer_view');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */