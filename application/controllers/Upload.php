<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

		function __construct(){
		parent::__construct();
		// $this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->API="http://localhost/mwm/";
        $this->load->library('form_validation','curl');
        // $this->load->model('userdb');
	}

	public function index()
	{
			$data['contents'] = 'Upload/index';
			$this->load->view('layout/index',$data);
	}

	public function brand1()
	{
		$data['contents'] = 'Upload/rexona';
		$this->load->view('layout/index',$data);
	}

} // penutup controller