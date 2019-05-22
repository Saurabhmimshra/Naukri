<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		
    parent::__construct();
		
    if($this->session->userdata('recruiter_id'))
      redirect('recruiter');

    if ($this->session->userdata('candidate_id')) {
      
      $this->load->model('candidate_model');

      $result = $this->candidate_model->get_by_id($this->session->userdata('candidate_id'));
      $data = array(
        'title' => 'Naukri', 
        'name' => $result->name,
      );
      $this->load->view('templates/header_candidate', $data);
    }else{
      $this->load->view('templates/header', array('title' => 'Naukri'));
    }

		$this->load->library('form_validation');
		$this->load->helper('form');

	}

	public function index(){		
    
    $this->load->model('jobs_model');

    $result = $this->jobs_model->all_jobs();
    $data = array(
      'heading' => 'View Jobs', 
      'posts' => $result 
    );


    $this->load->view('home',$data);
		$this->load->view('templates/footer');

	}


}
