<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function get_users() {
        // Fetch all users from the database
        $query = $this->db->get('users');
        return $query->result();
    }


    public function add_user($data){

        $this -> db ->insert('users',$data);

    }

    public function delete_user($user_id) {
        // Delete the user from the 'users' table
        
        $this->db->where('id', $user_id);
        $this->db->delete('users');
    }
}
