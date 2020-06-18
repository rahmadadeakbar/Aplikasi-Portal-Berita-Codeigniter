<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_postingan extends CI_Model 
{

    protected $table = 'berita';
    protected $id = 'id_berita';


    
    
	public function getAll()
	{
        return $this->db->query('SELECT * FROM berita')->result_array();
    }

    public function getWhere($id){
        // $id=['id_berita'];
        return $this->db->query("SELECT judul,tanggal,kategori,konten FROM berita WHERE id_berita='$id'")->result_array();
    }
    
    public function inputData($data,$table)
    {    
        $this->db->insert($table,$data);
    }

    public function editData($where)
    {
        $id=$where['id_berita'];   
        return $this->db->query("SELECT * FROM berita  WHERE id_berita='$id'");
    }



    public function delete($id){
        return $this->db->delete($this->table, array("id_berita" => $id));
    }

}
