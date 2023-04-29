<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

    public function index()
    {
        $this->load->view('Template/header');
        $this->load->view('Frontend/contacts');
        $this->load->view('Template/footer');
    }

    public function create()
    {
        $this->load->view('Template/header');
        $this->load->view('Frontend/create');
        $this->load->view('Template/footer');
    }

    
    public function store()
    {
        // //create validation
        // $this->form_validation->set_rules('first_name', 'First Name', 'required');
        // $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        // $this->form_validation->set_rules('number', 'Phone Number', 'required');
        // $this->form_validation->set_rules('email', 'Email Address', 'required');
        // $this->form_validation->set_rules('notes', 'Notes', 'required');
        
        // if($this->form_validation->run())
        // {
        //     $data = [
        //         'first_name' => $this->input->post('first_name'),
        //         'last_name' => $this->input->post('last_name'),
        //         'number' => $this->input->post('number'),
        //         'email' => $this->input->post('email'),
        //         'notes' => $this->input->post('notes')
        //     ];
        // }
        // else
        // {
        //     $this->create();
        // }
      $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'number' => $this->input->post('number'),
                'email' => $this->input->post('email'),
                'notes' => $this->input->post('notes')
      ];

        var_dump($data);
    }
}

?>