<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('vendor_model'));
  }

  function index()
  {
      $data['title'] = 'Vendor Product';
      $data['url'] = 'Vendor';

      $data['vendor'] = $this->vendor_model->get();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/topbar', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/vendor/index', $data);
      $this->load->view('admin/templates/footer');
  }

  public function insert()
  {
      # code...
  }

}
