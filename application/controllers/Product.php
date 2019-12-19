<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model(array('product_model', 'categories_model', 'vendor_model'));
	}

	public function index()
	{
		$data['page'] = 'product';

		$this->load->view('template/header.php', $data);
		$this->load->view('product/index.php');
		$this->load->view('template/footer.php');
	}

	public function detail($id)
    {
        $data['page'] = 'product';
        $data['product'] = $this->product_model->get_id($id);

        $this->load->view('template/header', $data);
        $this->load->view('product/detail', $data);
        $this->load->view('template/footer');
    }
}
