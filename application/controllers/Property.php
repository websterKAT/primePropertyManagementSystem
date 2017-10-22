<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Property extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Property_model');
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function insertProperty() {
		$config = array(
			'upload_path' =>"./uploads/" ,
			'allowed_types'=>"jpg|png|jpeg",
			'overwrite'=> TRUE,
			'max_size' => "4096000",
			'max_height'=>"768",
			'max_width'=>"2048"

			 );
		$this->load->library('upload',$config);
		if($this->upload->do_upload('imageName'))
		{
			$data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];
			$property = array(
			'propertyType'=>$this->input->post('propertyType') ,
			'district'=>$this->input->post('district') ,
			'addressLine1'=>$this->input->post('addressL1') ,
			'addressLine2'=>$this->input->post('addressL2') ,
			'city'=>$this->input->post('city') ,
			'revenue'=>$this->input->post('revenue') ,
			'description'=>$this->input->post('description') ,
			'propertyType'=>$this->input->post('propertyType') ,
			'imgName'=> $file_name ,
			'Date'=> date("Y-m-d"),
			'Users_username'=>$this->session->userdata('userName') ,

			 );
			$this->Property_model->insertProperty($property);
			$this->loadPropertyDetails();
			
			
		}
		
		else {
			$error = array('error'=>$this->upload->display_errors());
			print_r($error);
			
		}
		
	}

	public function loadPendingPropertyDetails() {
		$userId = $this->session->userdata('userName'); 
		$query = $this->Property_model->getPendingProperty($userId);
		
	}


	public function loadPropertyDetails() {
		$userId = $this->session->userdata('userName'); 
		$query = $this->Property_model->getPendingProperty($userId);
		$data['PPROPERTIES'] = null;
		if($query){
			$data['PPROPERTIES'] = $query;
		}
		$query = $this->Property_model->getProperty($userId);
		$data['PROPERTIES'] = null;
		if($query){
			$data['PROPERTIES']= $query;
		}
		
		$this->load->view('headerAfterSignup');
		$this->load->view('propertylist',$data);
		$this->load->view('footer');

	}

	public function deleteProperty($propertyId){
		
		$this->Property_model->dodDeleteProperty($propertyId);
		$this->session->set_flashdata('success_msg', 'Successfully Deleted');
		$this->loadPropertyDetails();

	}

	public function loadAllPendingPosts(){
		$query = $this->Property_model->getAllPendingProperty();
		$data['PPROPERTIES'] = null;
		if($query){
			$data['PPROPERTIES'] = $query;
		}
		$this->load->view('basicAdmin');
		$this->load->view('pendingPosts',$data);

	}

	public function loadPropertyForReview($propertyId){
		$query = $this->Property_model->getOnePropertyForReview($propertyId);
		$data['PROPERTY'] = null;
		if($query){
			$data['PROPERTY'] = $query;
		}
		$this->load->view('basicAdmin');
		$this->load->view('propertyReview',$data);
	}
	public function approveProperty($propertyId){
		$this->Property_model->doApproveProperty($propertyId);
		$this->session->set_flashdata('success_msg', 'Successfully Approved');
		$this->loadAllPendingPosts();
	}

	public function deleteSubmittedPosts($propertyId){
		$this->Property_model->dodDeleteProperty($propertyId);
		$this->session->set_flashdata('success_msg', 'Successfully Deleted');
		$this->loadAllPendingPosts();

	}
}