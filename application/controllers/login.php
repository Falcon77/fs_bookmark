<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header', array('title' => 'Login'));
        $this->load->view('login/default');
        $this->load->view('footer');        
    }
    
    public function run()
    {
        $this->login_model->run(); //auto loaded this model
    }

}
