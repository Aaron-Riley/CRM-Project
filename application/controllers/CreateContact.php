<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CreateContact extends CI_Controller {

    public function index()
	{
		$this->load->view('CreateContact');
	}

}