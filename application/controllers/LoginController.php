<?php  

Class LoginController extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User');
	}

	public function index(){
		$this->load->view('login');
	}

	public function loginAttempt(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()==FALSE){
			$this->index();
		}else{
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($data = $this->User->checkLogin($username, $password)){

				if($data['role']=='admin'){
					$session_data = array(
						'user_id' => $data['user_id'],
						'username' => $data['username'],
						'password' => $data["password"],
						'logged_in' => true
						);
					$this->session->set_userdata($session_data);
					redirect('AdminController/showAdmin');
				}
			}else{
				$this->session->set_flashdata('error', 'Invalid name or password');
				$this->index();
			}


		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

}
