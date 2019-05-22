<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
    if($this->session->userdata('recruiter_id'))
      redirect('recruiter');

		if($this->session->userdata('candidate_id'))
			redirect('');

		$this->load->library('form_validation');
		$this->load->helper('form');

	}

	public function index(){		
		$this->load->view('templates/header');
    $data = array(
              'heading' => 'Candidate',
              'path' => 'candidate/login',
              'register_path' => 'candidate/register'
            );
		$this->load->view('login', $data);
		$this->load->view('templates/footer');

	}

	public function login(){
		

		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
  		$this->form_validation->set_rules('password', 'Password', 'required');

  		if($this->form_validation->run()){
  			$this->load->model('candidate_model');
  			$result = $this->candidate_model->can_login($this->input->post('email'), $this->input->post('password'));
  			if($result){
  				$this->session->set_userdata('candidate_id', $result->id);
  				redirect('');
  			}else{
  				$this->session->set_flashdata('message', "Incorrect Email Address or Password.");
  				redirect('candidate/login');
  			}
  		}else{
  			$this->index();
  		}	
	}

  public function register(){
    
    $this->load->view('templates/header');
    $this->load->view('cdregister');
    $this->load->view('templates/footer');  

  }

  public function create_candidate(){
    
    $this->load->model('candidate_model');

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[candidate.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
    $this->form_validation->set_rules('name', 'Contact Person Name', 'required|min_length[5]|max_length[200]');
    $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
    $this->form_validation->set_rules('education', 'Education Detail', 'required');

    if ($this->form_validation->run())
      {
          $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),           
            'password' => $this->input->post('password'),
            'education' => $this->input->post('education'),
            'mobile' => $this->input->post('mobile'),
          );

          $id = $this->candidate_model->insert($data);
          if($id > 0){
            $this->session->set_flashdata('message', "You are successfuly registered.");
            redirect('candidate/register');
          }
      }
      else
      {
          $this->register();
      }

  }

}
