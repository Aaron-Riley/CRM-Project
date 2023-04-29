<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

    public function index()
    {
        $this->load->model('ContactModel');
        $contact = $this->ContactModel->contact_data();
        echo "Contact name: ". $contact;
    }
}

?>