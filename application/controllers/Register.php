<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
			parent:: __construct();

			if($this->session->userdata('id'))
				redirect('jobs');

			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->model('candidate');
	}

	public function recruiter(){

		$this->load->view('templates/header');
		$this->load->view('rcregister');
		$this->load->view('templates/footer');

	}

	public function candidate(){
		
		$this->load->view('templates/header');
		$this->load->view('cdregister');
		$this->load->view('templates/footer');

	}

	public function create_candidate(){
		
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

	        $id = $this->candidate->insert($data);
	        if($id > 0){
	        	$this->session->set_flashdata('message', "You are successfuly registered.");
	        	redirect('register/candidate');
	        }
	    }
	    else
	    {
	        $this->candidate();
	    }

	}
	
}
