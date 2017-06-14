<?php

Class AdminController extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Customer');
		$this->load->model('Service');
	}

	public function showAdmin(){
		$data['customers'] = $this->Customer->getCustomer();
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}

	public function showService(){
		$data['service'] = $this->Service->getService();
		$data['services'] = $this->Service->getService();
		$this->load->view('admin/header');
		$this->load->view('admin/showservices', $data);
		$this->load->view('admin/footer');
	}

	public function addCustomer(){
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[customers.email]');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('company', 'Company', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');


		if($this->form_validation->run()==FALSE){
			$this->showAdmin();
		}else{
			$addcustomer = array (
				'first_name'=>$this->input->post('firstname'),
				'last_name'=>$this->input->post('lastname'),
				'address'=>$this->input->post('address'),
				'contact'=>$this->input->post('contact'),
				'email'=>$this->input->post('email'),
				'country'=>$this->input->post('country'),
				'company'=>$this->input->post('company'),
				'status'=>$this->input->post('status'),
				'note'=>$this->input->post('note')
			);
			if($query = $this->Customer->insertCustomer($addcustomer)){
				$this->session->set_flashdata('success', 'Customer successfully Added');
				$this->showAdmin();
			}

		}
	}

	public function deleteCustomer(){
		$id=$this->input->post('customerid');
		$this->load->model('Customer');
		$this->Customer->customerDelete($id);
	}

	public function deleteService(){
		$id=$this->input->post('serviceid');
		$this->Service->serviceDelete($id);
	}

	public function selectUpdateCustomer($id){
		$data['customers'] = $this->Customer->getcustomerId($id);
		$this->load->view('admin/header');
		$this->load->view('admin/updatecustomer', $data);
		$this->load->view('admin/footer');
	}

	public function updateCustomer($id){
		$updatecustomer = array(
				'first_name'=>$this->input->post('firstname'),
				'last_name'=>$this->input->post('lastname'),
				'address'=>$this->input->post('address'),
				'contact'=>$this->input->post('contact'),
				'email'=>$this->input->post('email'),
				'country'=>$this->input->post('country'),
				'company'=>$this->input->post('company'),
				'status'=>$this->input->post('status'),
				'note'=>$this->input->post('note')
			);
		$query = $this->Customer->customerUpdate($id, $updatecustomer);
		$this->session->set_flashdata('updated', 'Customer details has been updated');
		$this->showAdmin();

	}

	public function viewInvoice(){
		$this->load->view('admin/header');
		$this->load->view('admin/viewInvoice');
		$this->load->view('admin/footer');
	}

	public function addInvoice(){
		$data['customers'] = $this->Customer->getCustomer();
		$this->load->view('admin/header');
		$this->load->view('admin/addInvoice', $data);
		$this->load->view('admin/footer');
	}

	public function selectClient($id){
		$data['service'] = $this->Service->getService();
		$data['client'] = $this->Customer->getClient($id);
		$this->load->view('admin/header');
		$this->load->view('admin/editInvoice', $data);
		$this->load->view('admin/footer');
	}

	public function addService($id){
		$this->form_validation->set_rules('servicename', 'Service Name', 'required|is_unique[services.service_name]');
		$this->form_validation->set_rules('serviceprice', 'Service Price', 'required|numeric');

		if($this->form_validation->run()==FALSE){
			$data['client'] = $this->Customer->getClient($id);
			$this->load->view('admin/header');
			$this->load->view('admin/editInvoice', $data);
			$this->load->view('admin/footer');
		}else{
			$addservice = Array (
				'service_name'=>$this->input->post('servicename'),
				'service_price'=>$this->input->post('serviceprice'),
				);
			$this->Service->serviceAdd($addservice);
			$this->session->set_flashdata('addedService', 'Service Added');
			$data['service'] = $this->Service->getService();
			$data['client'] = $this->Customer->getClient($id);
			$this->load->view('admin/header');
			$this->load->view('admin/editInvoice', $data);
			$this->load->view('admin/footer');
		}
	}

	public function updateService(){
		$id = $this->input->post('id');
		$updateservice = Array(
				'service_name' => $this->input->post('name'),
				'service_price' => $this->input->post('price')
			);
		$this->Service->serviceUpdate($id, $updateservice);
	}




}
