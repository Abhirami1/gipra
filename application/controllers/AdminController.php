<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller 
{

    function __contruct()
    {
        parent::__contruct();
        $this->load->model('Authentication');
    }
    public function index()
    {
        $this->load->model('AdminModel');
        $result['employees']=$this->AdminModel->fetchdata();
        $this->load->view('admin',$result);
    }

    public function edit($id)
    {
        $this->load->model('AdminModel');

        $result['employeedetails']=$this->AdminModel->fetcheditdetails($id);

        $this->load->view('edits',$result);

    }
    public function update($id)
    {

        $this->form_validation->set_rules('name','Name','trim|required|alpha');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('dob','Date Of Birth','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('phone','Phone Number','required');
        if($this->form_validation->run())
        {
            $data=array(
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'address'=>$this->input->post('address'),
                'dob'=>$this->input->post('dob'),
                'gender'=>$this->input->post('gender'),
                'phone'=>$this->input->post('phone'),

        );
    
        $this->load->model('AdminModel');
        $result=$this->AdminModel->updatedata($id,$data);
        $this->session->set_flashdata('status','update successfullly');
        redirect(base_url('adminpage'));
    }else{
        $this->edit($id);
    }
       
        

    }

    
    public function delete($id)
    {
        $this->load->model('AdminModel');
        $result=$this->AdminModel->deleteData($id);
        redirect(base_url('adminpage'));
    }


}