<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){



        $this->load->model('user_model','',TRUE);
        $data['users'] = $this-> user_model ->get_users();
        $this->load->view('users',$data);
    }


    public function add_user(){
        $this->load->model('user_model','',TRUE);

        $data = array(
            'username' => $this->input->post('username')
        );

        $this->user_model->add_user($data);

        redirect('First_cod_igniter/users');
    }

    public function delete_user($user_id) {

        $this->load->model('user_model');

        $this->user_model->delete_user($user_id);

        // Redirect to the user list after deletion
        redirect('First_cod_igniter/users');
    }
}