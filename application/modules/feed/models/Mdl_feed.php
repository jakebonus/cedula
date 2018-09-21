<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_feed extends CI_Model {

	public function __construct() {
		parent::__construct();

	}


	public function m_savefeed($data){
		$query = $this->db->insert('`tbl_feeds`',$data);
		
		if($query){
			return true;
		}else{
			return false;
		}
	}	
	public function m_get_feeds(){
		$sql  = "SELECT * FROM `tbl_feeds` WHERE `f_deleted` = 'NO' ORDER BY `f_id` DESC";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0 ){
			return $query->result();
		}else{
			return false;
		}
	}
}
