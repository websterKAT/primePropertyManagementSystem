<?php

class Detail_model extends CI_model{

  public function viewmore_user($userid){
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('idproperty',$userid);

		if($query=$this->db->get()){
			return $query->row_array();
		}
		else{
			return false;
		}

	}





}



?>
