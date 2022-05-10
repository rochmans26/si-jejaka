<?php 
class Users extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('users_model');
  }
  public function index()
  {
      $data['judul'] = 'Users';
      $data['list'] = $this->users_model->getalldata();
      $this->load->view("headerfooter/header.php", $data);
      $this->load->view("users.php", $data);
      $this->load->view("headerfooter/footer.php");
  }
}
?>