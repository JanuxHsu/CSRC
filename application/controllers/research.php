<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Research extends CI_Controller {

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
		$this->load->model('project_model');
		$this->load->model('scale_model');
		//$this->load->library('session');
	}
	public function index()//internal
	{
		$data['project']=$this->project_model->get_all_project()->result();
		$this->load->view('layout/header_view');
		$this->load->view('content/research_result/project_view',$data);
		$this->load->view('layout/footer_view');
	}
	public function scale()
	{
		$data['scale']=$this->scale_model->get_all_scale()->result();
		$this->load->view('layout/header_view');
		$this->load->view('content/research_result/scale_view',$data);
		$this->load->view('layout/footer_view');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */