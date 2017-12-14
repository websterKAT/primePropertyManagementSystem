<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Detailview extends CI_Controller {

  public function index() {

    //$userid = $this->input->get('userid', TRUE);
    //$data['view'] = $this->Detail_model->viewmore_user(1);

    $this->load->view('header');
    $this->load->view('detailview');
    $this->load->view('footer');
}


  function viewmore(){

    $userid = $this->uri->segment(3);
    $this->load->model('Detail_model');
    $data['view'] = $this->Detail_model->viewmore_user($userid);

    $this->load->view('header');
    $this->load->view('detailview', $data);
    $this->load->view('footer');
}


}
?>
