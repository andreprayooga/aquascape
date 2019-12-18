<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['title'] = 'List Product';
        $data['url'] = 'Product';
        
        $data['product'] = $this->Product_model->get();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/produk/index', $data);
		$this->load->view('admin/templates/footer');
    }
    
    public function insert()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Product';
			$data['url'] = 'Product';

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/topbar', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/produk/insert');
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

			$old_gambar = $data['categories']->gambar;

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/topbar', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/kategori/update', $data);
			$this->load->view('admin/templates/footer');
		} else {
			if ( isset($_FILES['gambar']) && $_FILES['gambar']['size'] > 0 )
			{
				// Konfigurasi folder upload & file yang diijinkan untuk diupload/disimpan
				$config['upload_path']          = './assets/admin/uploads/kategori/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 10000000000000;
				$config['max_width']            = 5000;
				$config['max_height']           = 5000;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('gambar'))
				{
					$data['upload_error'] = $this->upload->display_errors();
					$post_image = '';

					$data['title'] = 'Categories Product';
					$data['url'] = 'Categories';

					$this->load->view('admin/templates/header', $data);
					$this->load->view('admin/templates/topbar', $data);
					$this->load->view('admin/templates/sidebar', $data);
					$this->load->view('admin/kategori/insert');
					$this->load->view('admin/templates/footer');
				} else { //jika berhasil upload
					$img_data = $this->upload->data();
					$post_image = $img_data['file_name'];
				}
			} else { //jika tidak upload gambar
				$post_image = '';
			}
			if( empty($data['upload_error']) ) {
				$this->Categories_model->update_data($id, $img_data['file_name']);
				redirect('admin/categories','refresh');
			}
		}
	}

	public function delete($id)
	{
		$this->Categories_model->delete_data($id);
		redirect('admin/categories','refresh');
	}
}
