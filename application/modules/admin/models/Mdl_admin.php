<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_admin extends CI_Model {

	public function __construct() {
		parent::__construct();

	}

	public function m_get_clientlist($data){
		$sql = "SELECT 
					`c`.`c_id`,
					`c`.`c_refnum`,
					`c`.`c_refvaliduntil`,
					 CONCAT(`c`.`c_lname`,', ',`c`.`c_fname`,' ',`c`.`c_mi`) AS `name`,
					 IF(`c`.`c_gender` = 'M','MALE','FEMALE') AS `c_gender`,
					 `c`.`c_citizenship`,
					 `c`.`c_civilstatus`,
					 `c`.`c_birthdate`,
					TIMESTAMPDIFF(YEAR, `c`.`c_birthdate`, CURDATE()) AS `age`
				FROM `tbl_clients` `c`";

		if($data['ftr_ctcnum'] != 'N/A'){
			$sql .= "INNER JOIN `tbl_transactions` `t` ON
					`t`.`c_id` = `c`.`c_id` ";
		}

		$sql	.=	" WHERE `c`.`c_isactive` = 'YES' ";

		if($data['ftr_refnum'] != 'N/A'){
			$sql .= "AND `c`.`c_refnum` = '".$data['ftr_refnum']."' ";
		}
		if($data['ftr_fname'] != 'N/A'){
			$sql .= "AND `c`.`c_fname` = '".$data['ftr_fname']."' ";
		}
		if($data['ftr_lname'] != 'N/A'){
			$sql .= "AND `c`.`c_lname` = '".$data['ftr_lname']."' ";
		}
		if($data['ftr_mname'] != 'N/A'){
			$sql .= "AND `c`.`c_mname` = '".$data['ftr_mname']."' ";
		}
		if($data['ftr_gender'] != 'N/A'){
			$sql .= "AND `c`.`c_gender` = '".$data['ftr_gender']."' ";
		}
		if($data['ftr_ctcnum'] != 'N/A'){
			$sql .= "AND `t`.`ctcnum` = '".$data['ftr_ctcnum']."' ";
		}

		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_get_clientdetails_forprinting($id){
		$sql = "SELECT 
					`c_fname`,
					`c_mname`,
					`c_lname`,
					`c_housenum`,
					`c_brgy`,
					if(`c_city` = 'CITY OF SAN FERNANDO','CSF',`c_city`) as `c_city`,
					if(`c_province` = 'PAMPANGA','PAMP',`c_province`) as `c_province`,
					`c_mobilenum`,
					`c_tin`,
					IF(`c_gender` = 'M','MALE','FEMALE') AS `c_gender`,
					`c_citizenship`,
					`c_civilstatus`,
					`c_birthdate`,
					`c_birthplace`,
					`c_occupation`,
					`c_annualsalary`,
					`c_height`,
					`c_weight`,
					`c_icrno`,
					IF(`c_city` = 'CITY OF SAN FERNANDO' AND `c_province` = 'PAMPANGA',
							CONCAT(`c_housenum`,' ',`c_brgy`,' ','CSF PAMP'),
							CONCAT(`c_housenum`,' ',`c_brgy`,' ',`c_city`,' ',`c_province`)
					)AS `fulladd`
				FROM `tbl_clients`
				WHERE `c_isactive` = 'YES' AND `c_id` = '$id'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	
	public function m_get_clientdetails_forform($id){
		$sql = "SELECT 
					`c_fname`,
					`c_mname`,
					`c_lname`,
					`c_housenum`,
					`c_brgy`,
					`c_city`,
					`c_province`,
					`c_mobilenum`,
					`c_tin`,
					`c_gender`,
					`c_citizenship`,
					`c_civilstatus`,
					`c_birthdate`,
					`c_birthplace`,
					`c_occupation`,
					`c_annualsalary`,
					`c_height`,
					`c_weight`,
					`c_icrno`,
					IF(`c_city` = 'CITY OF SAN FERNANDO' AND `c_province` = 'PAMPANGA',
							CONCAT(`c_housenum`,' ',`c_brgy`,' ','CSF PAMP'),
							CONCAT(`c_housenum`,' ',`c_brgy`,' ',`c_city`,' ',`c_province`)
					)AS `fulladd`
				FROM `tbl_clients`
				WHERE `c_isactive` = 'YES' AND `c_id` = '$id'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_updateinfo($id,$data){
		$this->db->where('`c_id`',$id);
	$query =	$this->db->update('`tbl_clients`',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function m_saveinfo($data){

        $query =  $this->db->insert('`tbl_clients`',$data);
        if($query){
            return $this->db->insert_id();
        }else{
            return false;
        }
	}
	public function m_savetrasaction($data){

        $query =  $this->db->insert('`tbl_transactions`',$data);
        if($query){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

}
