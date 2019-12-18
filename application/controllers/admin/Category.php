<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Category Product';
		$data['url'] = 'Category';

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/kategori/index');
		$this->load->view('admin/templates/footer');
	}
}
