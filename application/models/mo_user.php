<?php

class Mo_user extends CI_Model {

	public function __construct() {
	   parent::__construct();
	}

	public function login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$rec = $this->db->get('user');
		if($rec->num_rows() != 0){
			foreach ($rec->result() as $key) {
				$cur_user = array(
					'ID' => $key->username,
					'Name' => $key->fullname,
					'Email' => $key->email,
					'isLogin' => 'true', 
				);
			}
			$this->session->set_userdata($cur_user);
			return true;
		}
		else{
			return false;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
	}

	public function check_user($username){
		$this->db->where('username', $username);
		$rec = $this->db->get('user');
		if($rec->num_rows() == 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function addnew($username, $password, $fullname, $email){
		$this->db->set('username', $username);
		$this->db->set('password', md5($password));
		$this->db->set('fullname', $fullname);
		$this->db->set('email', $email);
		$this->db->insert('user');
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}	
	}
}