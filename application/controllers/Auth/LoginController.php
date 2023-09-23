

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        // if($this->session->has_userdata('authenticated')==1)
        // {
        //     $this->session->set_flashdata('status','you are already login');
        //     redirect(base_url('userpage'));

        // }
        // else{
        //     $this->session->set_flashdata('status','you are already login');
        //     redirect(base_url('adminpage'));

        // }
        
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function checklogin()
    {
        $this->form_validation->set_rules('email','EMAIL','trim|required|valid_email');
        $this->form_validation->set_rules('password','PASSWORD','trim|required|md5');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else{
            $data=array(
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password'),
            );
           $result=$this->LoginModel->checkuser($data);
           if(!empty($result))
           {
            // print_r($result);
              $auth_userdetails=array(
                'name'=>$result->name,
                'email'=>$result->email,
              );
              if($result->user_id==1)
              {
              $this->session->set_userdata('authenticated',$result->user_id);
              $this->session->set_userdata('auth_user',$auth_userdetails);
              $this->session->set_flashdata('status','login successfull...................');
              redirect(base_url('userpage'));
              }
              else{
                $auth_userdetails=array(
                    'name'=>$result->name,
                    'email'=>$result->email,
                  );
                //   print_r($auth_userdetails);
                    $this->session->set_userdata('authenticated',$result->user_id);
                  $this->session->set_userdata('auth_user',$auth_userdetails);
                  $this->session->set_flashdata('status','login successfull...................');
                  redirect(base_url('adminpage'));

              }
           }
           else{
               $this->session->set_flashdata('status','invalid user..................');
               redirect(base_url('loginpage'));
           }
        }
    }


}