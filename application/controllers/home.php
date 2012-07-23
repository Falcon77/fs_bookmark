<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() 
    {
        $this->load->view('header', array('title' => 'My Bookmarks Start Page'));
        $this->load->view('home/default');
        $this->load->view('footer');
    }

    public function about() 
    {
        $this->load->view('header', array('title' => 'About'));
        $this->load->view('home/about');
        $this->load->view('footer');  
    }

}
