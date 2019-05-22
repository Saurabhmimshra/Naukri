<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruiter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
    if($this->session->userdata('candidate_id'))
      redirect('candidate');

	  if ($this->session->userdata('recruiter_id')) {
      redirect('pvtrec');
    }

		$this->load->library('form_validation');
		$this->load->helper('form');

	}

	public function index(){	

		$this->load->view('templates/header');
    $data = array(
              'heading' => 'Recruiter',
              'path' => 'recruiter/login',
              'register_path' => 'recruiter/register'
            );
		$this->load->view('login', $data);
		$this->load->view('templates/footer');

	}

	public function login(){

    $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if($this->form_validation->run()){
        $this->load->model('recruiter_model');
        $result = $this->recruiter_model->can_login($this->input->post('email'), $this->input->post('password'));
        if($result){
          $this->session->set_userdata('recruiter_id', $result->id);
          redirect('pvtrec');
        }else{
          $this->session->set_flashdata('message', "Incorrect Email Address or Password.");
          redirect('recruiter');
        }
      }else{
        $this->index();
      } 
  }

  public function register(){

    $this->load->view('templates/header');
    $this->load->view('rcregister');
    $this->load->view('templates/footer');

  }

  public function create_recruiter(){

    $this->load->model('recruiter_model');

    $config = array(
            array(
                    'field' => 'email',
                    'label' => 'Email Address',
                    'rules' => 'required|valid_email'
            ),
            array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'You must provide a %s.',
                    ),
            ),
            array(
                    'field' => 'cpassword',
                    'label' => 'Password Confirmation',
                    'rules' => 'required|matches[password]'
            ),
            array(
                    'field' => 'company_name',
                    'label' => 'Company Name',
                    'rules' => 'required|min_length[5]|max_length[200]'
            ),
            array(
                    'field' => 'name',
                    'label' => 'Contact Person Name',
                    'rules' => 'required|min_length[5]|max_length[200]'
            ),
            array(
                    'field' => 'designation',
                    'label' => 'Designation',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'address',
                    'label' => 'Office Address',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'mobile',
                    'label' => 'Mobile Number',
                    'rules' => 'required'
            ),
    );
    $this->form_validation->set_rules($config);

    if ($this->form_validation->run())
      {
          $data = array(
            'email' => $this->input->post('email'),           
            'password' => $this->input->post('password'),
            'cname' => $this->input->post('company_name'),
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'address' => $this->input->post('address'),
            'mobile' => $this->input->post('mobile'),
          );

          $id = $this->recruiter_model->insert($data);
          if($id > 0){
            $this->session->set_flashdata('message', "You are successfuly registered.");
            redirect('recruiter/register');
          }
      }
      else
      {
          $this->register();
      }
  }

}
