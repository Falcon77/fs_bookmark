<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() 
    {
        $this->load->view('header', array('title' => 'Admin'));
        $this->load->view('admin/default');
        $this->load->view('footer');
    }
    
    public function createUser()
    {
        // part 3
    }
}
