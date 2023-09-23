<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller 
{
    function __contruct()
    {
        parent::__contruct();
        $this->load->model('Authentication');
    }
    public function index()
    {
        $this->load->view('userpage');
    }
}