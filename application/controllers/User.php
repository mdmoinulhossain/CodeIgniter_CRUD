<?php

class User extends CI_Controller {

	public function create()
	{
		$this->load->model('User_model');
		// for validation
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('zip', 'Zip', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('create');
		} else {
			// insert to database
			$formArray = array();
			$formArray['Firstname'] = $this->input->post('fname');
			$formArray['Lastname'] = $this->input->post('lname');
			$formArray['email'] = $this->input->post('email');
			$formArray['city'] = $this->input->post('city');
			$formArray['zip'] = $this->input->post('zip');
			$formArray['created_at'] = date('Y-m-d');

			$this->User_model->create($formArray);
			$this->session->set_flashdata('success', 'Record added successfully.');
			$this->session->set_flashdata('failed', 'Record Not Added!');
			redirect(base_url('/'));
		}
	}

	public function read()
	{
		$this->load->model('User_model');

		$users = $this->User_model->all();
		$data = array();
		$data['users'] = $users;
		$this->load->view('list', $data);
	}

	public function edit($UserId)
	{
		$this->load->model('User_model');
		$user = $this->User_model->getUser($UserId);
		$data = array();
		$data['user'] = $user;


		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('zip', 'Zip', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('edit', $data);
		} else {
			// Update to database
			$formArray = array();
			$formArray['Firstname'] = $this->input->post('fname');
			$formArray['Lastname'] = $this->input->post('lname');
			$formArray['email'] = $this->input->post('email');
			$formArray['city'] = $this->input->post('city');
			$formArray['zip'] = $this->input->post('zip');
			$formArray['created_at'] = date('Y-m-d');

			$this->User_model->updateUser($UserId,$formArray);
			$this->session->set_flashdata('success', 'Record Updated successfully.');
			$this->session->set_flashdata('failed', 'Record Not Added!');
			redirect(base_url('/'));
		}
		
	}

	public function delete()
	{

	}

}
