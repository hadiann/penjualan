
<?php
defined("BASEPATH") or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'requiredltrim');
        $this->form_validation->set_rules('password', 'password', 'requiredltrim');

        $this->load->view('login/index');
    }
}
?>