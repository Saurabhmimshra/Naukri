<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('id'))
			redirect('jobs');

		$this->load->library('form_validation');
		$this->load->helper('form');

	}

	public function index(){		
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');

	}

	public function login(){
		

		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
  		$this->form_validation->set_rules('password', 'Password', 'required');

  		if($this->form_validation->run()){
  			$this->load->model('candidate');
  			$result = $this->candidate->can_login($this->input->post('email'), $this->input->post('password'));
  			if($result){
  				$this->session->set_userdata('id', $result->id);
  				redirect('jobs');
  			}else{
  				$this->session->set_flashdata('message', "Incorrect Email Address or Password.");
  				redirect('home');
  			}
  		}else{
  			$this->index();
  		}	
	}
}
