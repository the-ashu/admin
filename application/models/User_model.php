<?php
class User_model extends CI_Model
{
    public function login($username, $password){
        // Validate
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('admin');

        if($result->num_rows() == 1){
            return $result->row(0)->adminid;
        } else {
            return false;
        }
    }
}
?>