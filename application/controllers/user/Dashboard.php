
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('user/dashboard');
    }

}