<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('news_model');
		//$this->load->library('session');
	}
	public function index()
	{

		$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('home_view',$data);
		$this->load->view('layout/footer_view');
		
	}

	public function page1()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('1');
		$this->load->view('layout/footer_view');
		
	}

	public function page2()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('2');
		$this->load->view('layout/footer_view');
		
	}

	public function page3_1()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('3');
		$this->load->view('layout/footer_view');
		
	}

	public function page3_2()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('3_2');
		$this->load->view('layout/footer_view');
		
	}

	public function page3_3()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('3_3');
		$this->load->view('layout/footer_view');
		
	}

	public function page3_4()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('3_4');
		$this->load->view('layout/footer_view');
		
	}

	public function page3_5()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('3_5');
		$this->load->view('layout/footer_view');
		
	}

	public function page4()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_2()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_2');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_3()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_3');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_4()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_4');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_5()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_5');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_6()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_6');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_7()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_7');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_8()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_8');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_9()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_9');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_10()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_10');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_11()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_11');
		$this->load->view('layout/footer_view');
		
	}

	public function page4_12()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('4_12');
		$this->load->view('layout/footer_view');
		
	}

	public function page5()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$user_session = $this->session->userdata('admin');
		$now_admin_id = $user_session['member_id'];
		$data['admin'] = $now_admin_id;
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('5',$data);
		$this->load->view('layout/footer_view');
		
	}

	public function page6()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('6');
		$this->load->view('layout/footer_view');
		
	}

	public function page7()
	{
		//$data['news']=$this->news_model->get_all_news()->result();
		//$data['news_exist']=$this->news_model->is_result_exist();
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('7');
		$this->load->view('layout/footer_view');
		
	}

	public function news_article()
	{
		$news_id = $this->uri->segment(2);
		$data['news'] = $this->news_model->get_one_news($news_id);
		//print_r($data->result());
		$this->load->view('layout/header_view');
		$this->load->view('layout/sidebar_view');
		$this->load->view('news_view',$data);
		$this->load->view('layout/footer_view');
	}
	public function research_region()
	{
		$this->load->view('layout/header_view');
		$this->load->view('content/research_region_view');
		$this->load->view('layout/footer_view');
	}
	public function link()
	{
		$this->load->view('layout/header_view');
		$this->load->view('content/link_view');
		$this->load->view('layout/footer_view');
	}
	public function contact()
	{
		$this->load->view('layout/header_view');
		$this->load->view('content/contact_view');
		$this->load->view('layout/footer_view');
	}

	function add_data()
	{
		$timestamp = mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'));
		$now_time = date("Y/m/d H:i:s", $timestamp);
		$user_session = $this->session->userdata('admin');
		$now_admin_id = $user_session['member_id'];
		$newsdata=$this->input->post('add_news');
		$dataname = $newsdata['data_name'];
		// $data['admin_id']=$user_session['admin_id'];
		// $data['news_time']=$now_time;
		// //print_r($data);
		// $this->news_model->add_news($data);
		// $query=json_encode(array("status"=>"add_success"));
		// echo $query;

		$config['upload_path'] = './data/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '20480';
		$config['remove_spaces']=TRUE;
		$config['file_name']  = time();
		
		
		$field_name ="regist_file";
		$this->load->library('upload',$config);
		
	 	//iconv("utf-8", "big5",$uplooad_file['full_path']);

		if (!$this->upload->do_upload($field_name))
		{
			$uplooad_file=$this->upload->data();
			print_r($uplooad_file);
			iconv("utf-8", "big5",$uplooad_file['full_path']);
			print_r($uplooad_file);
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			// $regist_user=array(
		 //    	'data_url'=>$data['upload_data']['file_name'],
		 //    	'data_name'=>$newsdata['data_name'],
		 //    	'member_id'=>$now_admin_id,
		 //    	);
		 //    $this->news_model->add_data($regist_user);
		 //    $query=json_encode(array("status"=>"add_success"));
			// echo $query;

		}
		else
		{
			$uplooad_file=$this->upload->data();
			//print_r($uplooad_file);
			iconv("utf-8", "big5",$uplooad_file['full_path']);
			$data = array('upload_data' => $this->upload->data());
			
			$regist_user=array(
		    	'data_url'=>base_url().'data/'.$data['upload_data']['file_name'],
		    	'data_name'=>$newsdata['data_name'],
		    	'member_id'=>$now_admin_id,
		    	);
		    $this->news_model->add_data($regist_user);
		    $query=json_encode(array("status"=>"add_success"));
			echo $query;

		}
			  	
			

	  	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */