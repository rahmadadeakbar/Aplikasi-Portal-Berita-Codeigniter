<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postingan extends CI_Controller {



	public function index()
	{
		$this->load->model('m_postingan');
		$data['berita']=$this->m_postingan->getAll();
		$this->load->view('postingan',$data);
	}

	public function detail($id){

		$this->load->model('m_postingan');
		$data['detailBerita']=$this->m_postingan->getWhere($id);
		// die(json_encode($id));
		$this->load->view('postingan',$data);
		
	}

	public function edit($id)
	{
		$where=array('id_org' => $id);
		$data['editBerita']=$this->m_postingan->editData($where)->result_array();
		$this->load->view('postingan',$data);


	}

	
	public function saveData()
	{
		$id_berita = sha1(uniqid());
		$judul= $this->input->post('judul');
		$tanggal= $this->input->post('tanggal');
		$kategori= $this->input->post('kategori');
		$konten= $this->input->post('konten');

		

		$this->db->query("INSERT INTO berita (id_berita,judul,tanggal,kategori,konten)VALUES ('$id_berita','$judul','$tanggal','$kategori','$konten')");
	}


	public function update()
	{
		$this->input->post('');
	}

	

	public function hapus($id = null){
		$this->load->model('m_postingan');

        if ($this->m_postingan->delete($id)) {
            redirect(base_url('postingan'));
        }

	}
}
