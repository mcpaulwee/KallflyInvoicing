<?php  

class Service extends CI_Model{

	public function serviceAdd($addservice){
		$this->db->insert('services', $addservice);
	}

	public function getService(){
		return $this->db->select('*')
		->from('services')
		->where(['is_deleted'=>'no'])
		->get()
		->result_array();
	}

	public function serviceDelete($id){
		$this->db->set('is_deleted', 'yes')
		->where('id', $id)
		->update('services');
	}

	public function serviceUpdate($id, $updateservice){
		$this->db->where('id', $id);
		$this->db->update('services', $updateservice);
	}
}