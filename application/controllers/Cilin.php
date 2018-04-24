<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Cilin extends CI_Controller {
    public function index()
    {
      // 1. Load the data:
      // 2. Make the data available to the view
      // 3. Render the view:
      $this->load->view('kokkurang');
    }

}