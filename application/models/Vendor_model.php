<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get()
  {
      $query = $this->db->get('merek');
      return $query->result();
  }

}
