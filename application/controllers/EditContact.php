<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditContact extends CI_Controller {

    public function index()
	{
		$this->load->view('EditContact');
	}

	public function edit($editUrl = '')
	{
		echo "edit contact with url: " . $editUrl;
	}
}