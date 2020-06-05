<?php
class Edit extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('view_data');
		$data = array();
	}
	
	public function index(){
		$data['contactMe'] = $this->input->post('data');

		$this->db->update('content', $data); // you saved the data here, do this in db

		$data['contactMeData'] = $this->view_data->load_data(); // call a model function and load the data from there

		$this->load->view('pages/home', $data);
	}
	
}