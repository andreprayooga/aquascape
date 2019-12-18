<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}

	public function get()
	{
		$query = $this->db->get('produk');
		return $query->result();
	}

	public function get_id($id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('id_produk', $id);
		return $this->db->get()->row(0);
	}

	public function insert_data($foto)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'id_kategori' => $this->input->post('id_kategori'),
			'foto' => $foto,
			'harga' => $this->input->post('harga'),
		);

		$this->db->insert('produk', $data);
	}

	public function update_data($id, $foto)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'id_kategori' => $this->input->post('id_kategori'),
			'foto' => $foto,
			'harga' => $this->input->post('harga'),
			'id_merk' => $this->input->post('id_merk'),
		);


		$this->db->set($data);
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}

	public function delete_data($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}
