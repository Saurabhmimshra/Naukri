<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvtrec extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		
		if($this->session->userdata('candidate_id'))
			redirect('candidate');
		
		if(!$this->session->userdata('recruiter_id'))
			redirect('recruiter');

		$this->load->model('recruiter_model');
		$this->load->library('form_validation');
		$this->load->helper('form');

	     $result = $this->recruiter_model->get_by_id($this->session->userdata('recruiter_id'));
	    $data = array(
			        'title' => 'Naukri', 
			        'company_name' => $result->cname,
			        'name' => $result->name
	    		);
	    $this->load->view('templates/header_recruiter', $data);
	}

	public function index(){
      
			// $this->load->view('post_list');
			$this->myposts();
			$this->load->view('templates/footer');
	}

	public function newpost(){

		$this->load->view('job_post');
		$this->load->view('templates/footer');
	}

	public function addpost(){

	    $this->load->model('jobs_model');

	    $config = array(
	            array(
	                    'field' => 'title',
	                    'label' => 'Job Title',
	                    'rules' => 'required|max_length[200]|min_length[5]'
	            ),
	            array(
	                    'field' => 'location',
	                    'label' => 'Job Location',
	                    'rules' => 'required|max_length[200]'
	            ),
	            array(
	                    'field' => 'qualifications',	
	                    'label' => 'Qualifications',
	                    'rules' => 'required|max_length[200]'
	            ),
	            array(
	                    'field' => 'skills',
	                    'label' => 'Skills',
	                    'rules' => 'required|max_length[200]'
	            ),
	            array(
	                    'field' => 'experience',
	                    'label' => 'Experience',
	                    'rules' => 'required|numeric'
	            )
	    );
	    $this->form_validation->set_rules($config);

	    if ($this->form_validation->run())
	      {
	          $data = array(
	            'title' => $this->input->post('title'),           
	            'qualifications' => $this->input->post('qualifications'),
	            'experience' => $this->input->post('experience'),
	            'location' => $this->input->post('location'),
	            'skills' => $this->input->post('skills'),
	            'recid' => $this->session->userdata('recruiter_id')
	          );

	          $id = $this->jobs_model->insert($data);
	          if($id > 0){
	            $this->session->set_flashdata('message', "Job posted successfuly !");
	            redirect('pvtrec/newpost');
	          }
	      }
	      else
	      {
	          $this->newpost();
	      }
  	}

	public function myposts(){

		$this->load->model('jobs_model');
		$result = $this->jobs_model->jobs_by_recruiter($this->session->userdata('recruiter_id'));
		$data = array(
			'heading' => 'My Posts', 
			'posts' => $result 
		);

		$this->load->view('post_list',$data);
	}


}
