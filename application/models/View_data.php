<?php

class View_data extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	public function load_data(){

    $data['contactMeData'] = $this->db->select('contactMe')->from('content')->get()->result(); // You probably want to do this in model

    return $data['contactMeData'];
	}
}