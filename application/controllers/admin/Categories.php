<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Categories_model');
	}

	public function index()
	{
		$data['title'] = 'Categories Product';
		$data['url'] = 'Categories';

		$data['categories'] = $this->Categories_model->get();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/kategori/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Categories Product';
			$data['url'] = 'Categories';

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/topbar', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/kategori/insert');
			$this->load->view('admin/templates/footer');
		} else {
			date_default_timezone_set('Asia/Jakarta');
			$config['upload_path'] = './assets/admin/uploads/kategori/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$upload_data = $this->upload->data();
				$this->Categories_model->insert_data($upload_data['file_name']);
				redirect('admin/categories');
			} else {
				echo $this->upload->display_errors();
			}
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		$data['categories'] = $this->Categories_model->get();
		$data['categories'] = $this->Categories_model->get_id($id);

		if($this->form_validation->run() == false) {
			$data['title'] = 'Categories Product';
			$data['url'] = 'Categories';

			$data['categories'] = $this->Categories_model->get();
			$data['categories'] = $this->Categories_model->get_id($id);

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/topbar', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/kategori/update', $data);
			$this->load->view('admin/templates/footer');
		} else {
			date_default_timezone_set('Asia/Jakarta');
			$config['upload_path'] = './assets/admin/uploads/kategori/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$upload_data = $this->upload->data();
				$this->Categories_model->update_data()($upload_data['file_name']);
				redirect('admin/categories');
			} else {
				echo $this->upload->display_errors();
			}
		}
	}
}
