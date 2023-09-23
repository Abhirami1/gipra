<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePageController extends CI_Controller 
{

    public function main()
    {
        $this->load->view('homepage');
    }
}