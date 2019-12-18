<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['title'] = 'List Product';
		$data['url'] = 'Product';

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/produk/index');
		$this->load->view('admin/templates/footer');
	}
}
