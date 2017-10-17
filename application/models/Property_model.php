<?php
	class Property_model extends CI_model {

		public function insertProperty($property){
			$this->db->insert('property',$property);
		}


	}

?>