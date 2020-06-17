<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postingan extends CI_Controller {

	


	public function index()
	{
		$this->load->model('m_home');
		
		$this->load->view('postingan');
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
