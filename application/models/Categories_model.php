<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}

	public function get()
	{
		$query = $this->db->get('kategori');
		return $query->result();
	}

	public function get_id($id)
	{
		$this->db->select('*');
		$this->db->from('kategori');
	   	$this->db->where('id_kategori', $id);
		return $this->db->get()->row(0);
	}

	public function insert_data($gambar)
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
			'gambar' => $gambar,
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->db->insert('kategori', $data);
	}

	public function update_data($id, $gambar)
	{
		$data = array (
			'nama_kategori' => $this->input->post('nama_kategori'),
			'gambar' => $gambar,
			'deskripsi' => $this->input->post('deskripsi'),
		);

		  $this->db->set($data);
		  $this->db->where('id_kategori', $id);
		  $this->db->update('kategori', $data);
	}

	public function delete_data($id)
	{
		$this->db->where('id_kategori',$id);
		$this->db->delete('kategori');
	}
}
