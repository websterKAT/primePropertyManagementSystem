<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Home extends CI_Controller {

	public function index() {
		if($this->session->userdata('userName')){
			$data["userid"] = (1);
			$this->load->view('headerAfterSignup');
			$this->load->view('home',$data);
			$this->load->view('footer');
		}
		else{
			$data["userid"] = (1);
			$this->load->view('header');
			$this->load->view('home',$data);
			$this->load->view('footer');
		}

	}


	public function showAddProperty(){
		if($this->session->userdata('username')){
			$this->load->view('header');
			$this->load->view('addProperty');
			$this->load->view('footer');
		}
		else{
			$this->load->view('signin');
		}

	}


}
?>
