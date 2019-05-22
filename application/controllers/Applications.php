<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		if($this->session->userdata('recruiter_id'))
			redirect('recruiter');
		if(!$this->session->userdata('candidate_id'))
			redirect('candidate');

		$this->load->model('applications_model');
		$this->load->model('candidate_model');
	}
	
	public function index(){

		$result = $this->applications_model->jobs_applied_by($this->session->userdata('candidate_id'));

		$data = array(
			'heading' => 'My Applications',
			'posts' => $result,
			'path' => 'applications/details/',
			'button_name' => 'View Details'
		);

		$result = $this->candidate_model->get_by_id($this->session->userdata('candidate_id'));

		$this->load->view('templates/header_candidate', array('name' => $result->name ,'title' => 'My Applications' ));
		$this->load->view('post_list', $data);
		$this->load->view('templates/footer');

	}

	public function apply($id = ''){

		$data = array(
			'user_id' => $this->session->userdata('candidate_id'),
			'job_id' => $id
		);


		$result = $this->applications_model->insert($data);
		if($result > 0){
			$this->session->set_flashdata('message', 'Successfully Applied !');
			redirect('');
		}
				
	}

	public function details($job_id){
		echo $job_id;
	}
}
