<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Candidate extends CI_Model {

    public function __construct(){
     	
     	parent:: __construct();
    }

    public function validate(){

    }

    public function insert($data){
    	
    	$this->db->insert('candidate', $data);
    	return $this->db->insert_id();
    }
}