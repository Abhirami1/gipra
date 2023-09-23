<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel');
        
    }

    public function index()
    {
        $this->load->view('registerpages');
    }

    public function insertEmployee()
    {

        $this->form_validation->set_rules('name','Name','trim|required|alpha');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[employeetable_web.email]');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('dob','Date Of Birth','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('phone','Phone Number','required');
        $this->form_validation->set_rules('password','Password','trim|required|md5');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|md5|matches[password]');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else{
           
            $data=array(
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'address'=>$this->input->post('address'),
                'dob'=>$this->input->post('dob'),
                'gender'=>$this->input->post('gender'),
                'phone'=>$this->input->post('phone'),
                'usertype'=>$this->input->post('usertype'),
                'password'=>$this->input->post('password'),
                'user'=>$this->input->post('user'),
                
            );
            $insertvalues=$this->RegisterModel->insertEmployees($data);
            if($insertvalues=='true')
            {
                $this->session->set_flashdata('status','register successfull');
                redirect(base_url('loginpage'));
            }
            else{

                $this->session->set_flashdata('status','register failed');
                $this->index();

            }


        }
        
    }

}