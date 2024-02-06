<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model{

    
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }


    public function get_tasks_with_users(){

            $this->db->select('tasks.* , users.*');
            $this->db->from('tasks');
            $this->db->join('users', 'tasks.user_id = users.id');
            $query = $this->db->get();

            return $query->result();

    }

    public function add_task($data){


        $this -> db ->insert('tasks',$data);

    }

    public function delete_user($task_id) {
        // Delete the user from the 'users' table
        
        $this->db->where('id', $task_id);
        $this->db->delete('tasks');
    }

}