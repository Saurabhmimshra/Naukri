<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$this->session->userdata('id'))
			redirect('home');
	}

	public function index(){

		$this->load->helper('html');
		$this->load->helper('url');
		
		$this->load->view('templates/header');
		$this->load->view('jobs');
		$this->load->view('templates/footer');

	}

	public function createjob(){
		$this->load->helper('html');
		$this->load->helper('url');
		
		$this->load->view('templates/header');
		$this->load->view('job_post');
		$this->load->view('templates/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

}
