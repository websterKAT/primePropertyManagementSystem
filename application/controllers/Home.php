<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}


	public function showAddProperty(){
		$this->load->view('header');
		$this->load->view('addProperty');
		$this->load->view('footer');
	}

	public function showSignIn(){
		$this->load->view('signin');
	}
}
