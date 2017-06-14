<?php 

class User extends CI_Model{

	public function checkLogin($username, $password){

		 return $this->db->select('user_id, username, password, role')
		->get_where('users',['username'=> $username, 'password'=> $password])
		->row_array() ? : [];
	}

	public function get_all_customers(){
		return $this->db->get('users',['role_type'=> 'customer'])->get()->result_array() ? : [];
	}
}