<?php 
class Users_model extends CI_Model
{
  public function getalldata(){
    return $this->db->get('users')->result();
  }
}
?>