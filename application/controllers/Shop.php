<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['page'] = 'shop';

      $this->load->view('template/header.php', $data);
      $this->load->view('shop/index.php');
      $this->load->view('template/footer.php');
  }

}
