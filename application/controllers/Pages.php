<?php 
class Pages extends MY_Controller{
//    public function index(){
//        return view('welcome_message');
//    }
//    
//   public function view($page = 'home')
//    {
//            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
//            {
//                    // Whoops, we don't have a page for that!
//                    show_404();
//            }
//
//            $data['title'] = ucfirst($page); // Capitalize the first letter
//
//            $this->load->view('templates/header', $data);
//            $this->load->view('pages/'.$page, $data);
//            $this->load->view('templates/footer', $data);
//    }
//}
    function _remap($method)
    {
        is_file(APPPATH.'views/pages/'.$method.'.php') OR show_404();
		$headerdata['title'] = ucfirst($method);
		$this->load->view("pages/$method", $headerdata);
    }
}