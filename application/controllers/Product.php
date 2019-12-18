<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['page'] = 'product';

      $this->load->view('template/header', $data);
      $this->load->view('product/index');
      $this->load->view('template/footer');
  }

}
