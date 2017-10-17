<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Property extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Property_model');
		$this->load->helper('url');
		$this->load->library('session');

}

	public function doUpload() {
		$config = array(
			'upload_path' =>"./uploads/" ,
			'allowed_types'=>"jpg|png|jpeg",
			'overwrite'=> TRUE,
			'max_size' => "4096000",
			'max_height'=>"768",
			'max_width'=>"1024"

			 );
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image')){
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('headerAfterSignup',$data);
			$this->load->view('home');
			$this->load->view('footer');
			
			
		}
		else{
			$error = array('error'=>$this->upload->display_errors());
			print_r($error);
			
		}
	}

	public function insertProperty(){
		$property = array(
			'propertyType'=>$this->input->post('propertyType') ,
			'district'=>$this->input->post('district') ,
			'addressLine1'=>$this->input->post('addressL1') ,
			'addressLine2'=>$this->input->post('addressL2') ,
			'city'=>$this->input->post('city') ,
			'revenue'=>$this->input->post('revenue') ,
			'description'=>$this->input->post('description') ,
			'propertyType'=>$this->input->post('propertyType') ,
			'imgName'=>$this->input->post('image'),
			//'Date'=>mdate('%Y-%m-%d %H:%i:%s', now()),
			'Users_username'=>$this->session->userdata('userName') ,

			 );
			$this->doUpload();
			$this->Property_model->insertProperty($property);

		
	}

	


}