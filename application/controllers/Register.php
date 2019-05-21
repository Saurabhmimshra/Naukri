<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function recruiter(){

		$this->load->helper('html');
		$this->load->helper('url');
		
		$this->load->view('templates/header');
		$this->load->view('rcregister');
		$this->load->view('templates/footer');

	}

	public function candidate(){

		$this->load->helper('html');
		$this->load->helper('url');
		
		$this->load->view('templates/header');
		$this->load->view('cdregister');
		$this->load->view('templates/footer');

	}
	
}
