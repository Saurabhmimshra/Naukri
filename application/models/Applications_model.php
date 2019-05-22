<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Applications_model extends CI_Model {

    public function __construct(){
     	
     	parent:: __construct();
    }



    public function insert($data){
    	
    	$this->db->insert('applications', $data);
    	return $this->db->insert_id();
    }

    public function jobs_applied_by($user_id){
        $this->db->select('title, qualifications, experience, location, skills, cname, user_id');
        $this->db->from('jobs');
        $this->db->join('applications', 'jobs.id = applications.job_id');
        $this->db->join('recruiter', 'jobs.recid = recruiter.id');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('applications.id', 'DESC');
        return $this->db->get()->result_array();
    }
}