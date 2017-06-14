<?php

class Customer extends CI_Model{

	public function insertCustomer($addcustomer){
		$this->db->insert('customers', $addcustomer);
		return true;
	}

	public function getCustomer(){
		return $this->db->select('*')
		->from('customers')
		->where(['is_deleted'=>'no'])
		->get()
		->result_array();
	}

	public function customerDelete($id){
		$this->db->set('is_deleted','yes')
		->where('id',$id)
		->update('customers');

	}

	public function getcustomerId($id){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function customerUpdate($id, $updatecustomer){
		$this->db->where('id', $id);
        $this->db->update('customers', $updatecustomer);

	}

	public function getClient($id){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}




}
