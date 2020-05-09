<?php 

class Dashboard extends Admin_Controller{

//    function _remap($method)
//    {
//        is_file(APPPATH.'views/admin/'.$method.'.php') OR show_404();
//		$headerdata['title'] = ucfirst($method);
//		$this->load->view("admin/$method", $headerdata);
//    }
    public function index()
  {
    $this->load->view('admin/dashboard_view');
  }
}