<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Candidate_model extends CI_Model {

    public function __construct(){
     	
     	parent:: __construct();
    }

    public function can_login($email, $password){
    	$arr['email'] = $email;
    	$arr['password'] = $password;
    	return $this->db->get_where('candidate',$arr)->row();
    }

    public function insert($data){
    	
    	$this->db->insert('candidate', $data);
    	return $this->db->insert_id();
    }

    public function get_by_id($id){
        return $this->db->get_where('candidate', array('id' => $id ))->row();
    }
}