<?php
	class Property_model extends CI_model {

		public function insertProperty($property) {
			$this->db->insert('property',$property);
		}
		
		public function getProperty($userId){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"APPROVED");
			$this->db->where('Users_username',$userId);	
			$query = $this->db->get();	
			return $query->result();	
		}

		public function getPendingProperty($userId){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"PENDING");
			$this->db->where('Users_username',$userId);	
			$query = $this->db->get();
			return $query->result();
		}

		public function dodDeleteProperty($id) {
			$this->db->where('idproperty',$id);
			$this->db->delete('property');
		}


		public function getAllPendingProperty(){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"PENDING");
			$query = $this->db->get();	
			return $query->result();	
		}

	}

?>