<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

    public function index()
    {
        $this->load->view('Template/header');
        $this->load->model ('ContactModel');
        $data['contacts'] = $this->ContactModel->getContacts();
        $this->load->view('Frontend/contacts', $data);
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

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'Phone Number', 'required');
        $this->form_validation->set_rules('notes', 'Notes', 'required');
        if($this->form_validation->run())
        {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('number'),
                'notes' => $this->input->post('notes')
              ];

                $this->load->model('ContactModel');
                $this->ContactModel->insertContact($data);
                redirect(base_url('index.php/contacts'));
        }
        else{
            $this->create();
        }

    
    }
    public function edit($id)
    {
        $this->load->view('Template/header');
        $this->load->model('ContactModel');
        $data['contact'] = $this->ContactModel->editContact($id);
        $this->load->view('Frontend/edit', $data);
        $this->load->view('Template/footer');
    }

    public function update($id)
    {

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'Phone Number', 'required');
        $this->form_validation->set_rules('notes', 'Notes', 'required');

        if($this->form_validation->run()) :
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('number'),
                'notes' => $this->input->post('notes')
              ];
                $this->load->model('ContactModel');
                $this->ContactModel->updateContact($data, $id);
                redirect(base_url('index.php/contacts/'));            
            else :
                $this->edit($id);
            endif;
      
    }
}


?>