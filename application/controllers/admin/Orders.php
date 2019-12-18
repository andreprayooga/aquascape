<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Order_model'));
  }

  function index()
  {
      $data['title'] = 'Orders Product';
      $data['url'] = 'Orders';

      $data['order'] = $this->Order_model->get();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/order/index', $data);
      $this->load->view('admin/templates/footer');
  }

  public function insert()
  {
      # code...
  }

}
