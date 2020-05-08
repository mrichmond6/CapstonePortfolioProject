<?php 

class Dashboard_View extends MY_Controller{
    function _remap($method)
    {
        is_file(APPPATH.'views/admin/'.$method.'.php') OR show_404();
		$headerdata['title'] = ucfirst($method);
		$this->load->view("admin/$method", $headerdata);
    }
}
}