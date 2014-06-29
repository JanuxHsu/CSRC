<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class News_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('news_model');
		//$this->load->library('session');
	}
	function index()
	{
		$user_session = $this->session->userdata('admin');
		$now_admin_name = $user_session['member_name'];
		$now_admin_type = $user_session['member_type'];

		$headerdata['title']="管理者登入";
		if($now_admin_type =='總管理員'){
			$data['news']=$this->news_model->get_all_news()->result();
		}else{
			$data['news']=$this->news_model->get_all_news_by_admin($now_admin_name)->result();
		}
		
		$this->load->view('admin/header_admin_view',$headerdata);
		$this->load->view('admin/news/news_edit_view',$data);
		$this->load->view('admin/footer_admin_view');

	}

	function get_time_ip()
	{
		$timestamp = mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'));
		$now_time = date("Y/m/d H:i:s", $timestamp);
		$now_ip = $this->input->ip_address();
		return array("user_begintime"=>$now_time,"user_ip"=>$now_ip);
	}

	function add_news()
	{
		$timestamp = mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'));
		$now_time = date("Y/m/d H:i:s", $timestamp);
		$user_session = $this->session->userdata('admin');
		$now_admin_id = $user_session['member_id'];
		$newsdata=$this->input->post('add_news');
		$newscontent = $newsdata['news_content'];
		$content = @ereg_replace("\n", "<br/>\n", $newscontent);
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
			//$uplooad_file=$this->upload->data();
			//print_r($uplooad_file);
			//iconv("utf-8", "big5",$uplooad_file['full_path']);
			//print_r($uplooad_file);
			//$error = array('error' => $this->upload->display_errors());
			//print_r($error);
			$regist_user=array(
		    	'news_title'=>$newsdata['news_title'],
		    	'news_content'=>$content,
		    	'news_time'=>$now_time,
		    	'news_doc'=>"沒有相關檔案",
		    	'admin_name'=>$user_session['member_name'],
		    	);
		    $this->news_model->add_news($regist_user);
		    $query=json_encode(array("status"=>"add_success"));
			echo $query;

		}
		else
		{
			$uplooad_file=$this->upload->data();
			//print_r($uplooad_file);
			iconv("utf-8", "big5",$uplooad_file['full_path']);
			$data = array('upload_data' => $this->upload->data());
			
			$regist_user=array(
		    	'news_title'=>$newsdata['news_title'],
		    	'news_content'=>$newsdata['news_content'],
		    	'news_time'=>$now_time,
		    	'news_doc'=>$data['upload_data']['file_name'],
		    	'admin_name'=>$user_session['admin_name'],
		    	);
		    $this->news_model->add_news($regist_user);
		    $query=json_encode(array("status"=>"add_success"));
			echo $query;

		}
			  	
			

	  	
	}
	/*
	function get_member_by_member_type($member_type){
		
		$query=$this->member_model->get_member_by_member_type($member_type);
		return $query;
	}
	*/
	function get_news_byid(){
		$data=$this->input->post('id');
		$query=$this->news_model->get_news_byid($data)->result();
		$query=json_encode($query);
		echo $query;
	}

	function edit_news(){
		$data=$this->input->post('edit_news');
		$this->news_model->edit_news($data);
		$query=json_encode(array("status"=>"edit_success"));
		echo $query;
	}
	function del_news(){
		$data=$this->input->post('del_news');
		$this->news_model->del_news($data);
		$query=json_encode(array("status"=>"del_success"));
		echo $query;
	}

	
}
?>