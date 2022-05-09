<?php 
class Users extends CI_Controller {
  public function index()
  {
      $data['judul'] = 'Users';
      $this->load->view("headerfooter/header.php", $data);
      $this->load->view("users.php");
      $this->load->view("headerfooter/footer.php");
  }
}
?>