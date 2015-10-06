<?php

class Mo_motor extends CI_Model {

	public function __construct() {
	   parent::__construct();
	}

	public function addnew($name, $type, $producer, $price){
		$this->db->set('mo_name', $name);
		$this->db->set('mo_type', $type);
		$this->db->set('mo_producer', $producer);
		$this->db->set('mo_price', $price);
		$this->db->insert('motor');
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}	
	}
}