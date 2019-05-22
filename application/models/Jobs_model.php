<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Jobs_model extends CI_Model {

    public function __construct(){
     	
     	parent:: __construct();
    }


    public function insert($data){
    	
    	$this->db->insert('jobs', $data);
    	return $this->db->insert_id();
    }

    public function all_jobs(){
        $this->db->select('jobs.id, title, qualifications, experience, location, skills, cname');
        $this->db->from('jobs');
        $this->db->join('recruiter', 'jobs.recid = recruiter.id');
        $this->db->order_by('jobs.id','DESC');
        return $this->db->get()->result_array();
    }

    public function jobs_by_recruiter($recid){
        $this->db->select('jobs.id, title, qualifications, experience, location, skills, cname');
        $this->db->from('jobs');
        $this->db->join('recruiter', 'jobs.recid = recruiter.id','left');
        $this->db->order_by('jobs.id','DESC');
        return $this->db->get()->result_array();
    }
}