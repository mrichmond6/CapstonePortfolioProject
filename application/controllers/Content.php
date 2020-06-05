<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

  public function __construct() {

    parent::__construct();

    // load base_url
    $this->load->helper('url');
  }

  public function index(){

    $data = array();
    if($this->input->post('submit') != NULL ){ 
			
	$content = $this->input->post('content');
	$data['content'] = $content;
			
    }

    $this->load->view('admin/admin_edit',$data);
 
  }

}