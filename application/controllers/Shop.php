<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('product_model', 'categories_model'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['page'] = 'shop';
      $data['product'] = $this->product_model->get();
      $data['categories'] = $this->categories_model->get();

      $this->load->view('template/header.php', $data);
      $this->load->view('shop/index.php', $data);
      $this->load->view('template/footer.php');
  }

}
