<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->API="http://localhost/mwm/";
        $this->load->library('form_validation','curl');
        // $this->load->model('userdb');
	}

	public function index()
	{
			$data['contents'] = 'Record/index';
			$this->load->view('layout/index',$data);
	}

} // penutup controller