<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tasks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){

        $this->load->model('task_model','',TRUE);
        $this->load->model('user_model','',TRUE);
        $data['tasks'] = $this->task_model->get_tasks_with_users();
        $data['users'] = $this-> user_model ->get_users();
        $this->load->view('tasks',$data);

    }

    public function add_task(){
        $this->load->model('task_model','',TRUE);

        $data = array(
            'user_id' => $this->input->post('user_id'),
            'description' => $this->input->post('description')
        );

        $this->task_model->add_task($data);

        redirect('First_cod_igniter/tasks');
    }

    public function delete_task($task_id){
        $this->load->model('task_model','', TRUE);
        $this->task_model->delete_user($task_id);

        redirect('First_cod_igniter/tasks');
        
    }

}

