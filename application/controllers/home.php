<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
            if (!$this->tank_auth->is_logged_in()) {
                redirect('/auth/login/');
            } else {
                $data['user_id']	= $this->tank_auth->get_user_id();
                $data['username']	= $this->tank_auth->get_username();
                $this->load->view('header', array('title' => 'My Bookmarks Start Page'));
                $this->load->view('home/default', $data);
                $this->load->view('footer');
            }
	}
        
        public function about() 
        {
            $this->load->view('header', array('title' => 'About'));
            $this->load->view('home/about');
            $this->load->view('footer');  
        }
    }

/* End of file home.php */
/* Location: ./application/controllers/home.php */