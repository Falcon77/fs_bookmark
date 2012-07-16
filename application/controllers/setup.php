<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller {

    public function index() 
    {
        $this->load->view('header', array('title' => 'Setup'));
        $this->load->view('setup/default');
        $this->load->view('footer');
    }

    public function install()
    {
        $this->load->model('setup_model');
        $result = $this->setup_model->createDatabaseSchema();
        
        $this->load->view('header', array('title' => 'Setup - install'));
        $this->load->view('setup/install', array('result' => $result));
        $this->load->view('footer');
    }
}
