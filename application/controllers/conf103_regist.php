<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conf103_regist extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();	
		$this->load->model('conf_model/conf_103_regist_model');
		$this->load->library('form_validation');
		//$this->load->library('session');
	}
	public function index()
	{
		$data['error']='';
		$this->load->view('conference/conf_head_view');
		$this->load->view('conference/conf_103_view',$data);
		$this->load->view('layout/footer_view');
	}
	public function file_download()
	{
		$data['error']='';
		$data['register']=$this->conf_103_regist_model->get_all_regist()->result();
		$this->load->view('conference/conf_head_view');
		$this->load->view('conference/conf_download_view',$data);
		$this->load->view('layout/footer_view');
	}
	
	

	function regist(){
		
		$regist_data=array(
			
			'regist_name'=>$this->input->post('regist_name'),
			'regist_email'=>$this->input->post('regist_email'),
			'regist_institution'=>$this->input->post('regist_institution'),
			'regist_unit'=>$this->input->post('regist_unit'),
			'regist_title'=>$this->input->post('regist_title'),
			'regist_identity'=>$this->input->post('regist_identity'),
			'regist_meal'=>$this->input->post('regist_meal'),
			'regist_file'=>$this->input->post('regist_file')
			);

			$this->form_validation->set_rules('regist_name', '姓名', 'trim|required');
			$this->form_validation->set_rules('regist_email', '電子信箱', 'trim|valid_emails|required');
			$this->form_validation->set_rules('regist_institution', '服務機構', 'trim|required');
			$this->form_validation->set_rules('regist_title', '職位', 'trim|required');
			$this->form_validation->set_rules('regist_identity', '報名身份', 'trim|required');
			$this->form_validation->set_rules('regist_meal', '中餐', 'trim|required');
			
			if($regist_data['regist_identity']!='其他：關心性別與科技研究之學者'&&empty($_FILES['regist_file']['name'])){
				$this->form_validation->set_rules('regist_file', '上傳檔案', 'trim|required');
				}
			  

			  if ($this->form_validation->run() == FALSE)
			  {
			  	$data['error']='';
				$this->load->view('conference/conf_head_view');
				$this->load->view('conference/conf_103_view',$data);
				$this->load->view('layout/footer_view');

			  }else{

				  	$config['upload_path'] = './asset/uploads/';
					$config['allowed_types'] = 'pdf|PDF';
					$config['max_size']	= '10240';
					$config['remove_spaces']=TRUE;
					$config['file_name']  = time();
					
					
					$field_name ="regist_file";
					$this->load->library('upload',$config);
					
				 	//iconv("utf-8", "big5",$uplooad_file['full_path']);

				if($regist_data['regist_identity']!='其他：關心性別與科技研究之學者'){

					if (!$this->upload->do_upload($field_name))
					{
						$uplooad_file=$this->upload->data();
						//print_r($uplooad_file);
						iconv("utf-8", "big5",$uplooad_file['full_path']);
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('conference/conf_head_view');
						$this->load->view('conference/conf_103_view',$error);
						$this->load->view('layout/footer_view');
					}
					else
					{
						$uplooad_file=$this->upload->data();
						//print_r($uplooad_file);
						iconv("utf-8", "big5",$uplooad_file['full_path']);
						$data = array('upload_data' => $this->upload->data());
						
						$path='/CTRC/asset/uploads/'.$data['upload_data']['file_name'];
						
						$regist_user=array(
					    	'regist_name'=>$regist_data['regist_name'],
					    	'regist_email'=>$regist_data['regist_email'],
					    	'regist_unit'=>$regist_data['regist_unit'],
					    	'regist_title'=>$regist_data['regist_title'],
					    	'regist_identity'=>$regist_data['regist_identity'],
					    	'regist_meal'=>$regist_data['regist_meal'],
					    	'regist_uploadpath'=>$path,
					    	'regist_institution'=>$regist_data['regist_institution'],
					    	);
					    $this->conf_103_regist_model->add_regist($regist_user);

					    $this->load->view('conference/conf_head_view');
						$this->load->view('conference/conf_success_view');
						$this->load->view('layout/footer_view');
					}
			  	}else{

			  		$path='';
						
						$regist_user=array(
					    	'regist_name'=>$regist_data['regist_name'],
					    	'regist_email'=>$regist_data['regist_email'],
					    	'regist_unit'=>$regist_data['regist_unit'],
					    	'regist_title'=>$regist_data['regist_title'],
					    	'regist_identity'=>$regist_data['regist_identity'],
					    	'regist_meal'=>$regist_data['regist_meal'],
					    	'regist_uploadpath'=>$path,
					    	'regist_institution'=>$regist_data['regist_institution'],
					    	);

					    $this->conf_103_regist_model->add_regist($regist_user);
					  
					    $this->load->view('conference/conf_head_view');
						$this->load->view('conference/conf_success_view');
						$this->load->view('layout/footer_view');

			  	}
				   
			}
	}


	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */