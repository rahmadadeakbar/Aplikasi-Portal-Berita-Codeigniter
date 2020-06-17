<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	


	public function index()
	{
		$this->load->model('m_home');
		
		$this->load->view('home');
	}
	
	public function saveData()
	{
		$this->input->post('');
	}

	public function editData()
	{
		$this->input->post('');
	}
}
