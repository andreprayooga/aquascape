<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get()
  {
      $query = $this->db->get('transaksi');
      return $query->result();
  }

}
