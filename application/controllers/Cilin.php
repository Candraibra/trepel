<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cilin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
		//Load Dependencies
 
  }
  public function index()
  {
      // 1. Load the data:
    $data['isi'] = $this->db->get('user');
      // 2. Make the data available to the view
      // 3. Render the view:
    $this->load->view('form/views', $data);
  }
  public function add()
  {
    $this->load->view('form/tambah');//memanggil form untuk input data yg berada di folder user
  }

  public function masukkan()
  {
      # code...
    $input = array('username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'fullname' => $this->input->post('fullname'), 'email' => $this->input->post('email'), 'level' => $this->input->post('level'));

    $insert = $this->db->insert('user', $input);//

    if ($insert) {


      echo "sukses";

    } else {

      echo "gagal";

    }
  }
    //Update one item
  public function update($id = '')
  {
      
        # code...
    $this->db->where('id', $id);

    $data['isi'] = $this->db->get('user');

    $this->load->view('form/update', $data);

  }

  public function gantikan($id = '')
  {
      # code...
    $input = array('username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'fullname' => $this->input->post('fullname'), 'email' => $this->input->post('email'), 'level' => $this->input->post('level'));
    $this->db->where('id', $id);
    $insert = $this->db->update('user', $input);//

    if ($insert) {


      echo "sukses";

    } else {

      echo "gagal";

    }

  }
  
    //Delete one item
  public function delete($id = '')
  {
    $this->db->where('id', $id);

    $this->db->delete('user');

    redirect('Cilin', 'refresh');
  
      /*if($this->input->post('submit'))
      {
  
        $id = $this->input->post('id');
  
        $this->db->where('id',$id);
  
        $this->db->delete('user');
  
        redirect('User','refresh');
      }*/
  }


  public function login()
  {


  }
}