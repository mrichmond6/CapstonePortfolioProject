<?php 
class Pages extends MY_Controller{

		public function index()
		{
			$this->load->view('pages/home');
		}
}