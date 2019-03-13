<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	var $API ="";

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->API="http://localhost/mwm/";
        $this->load->library('curl');
	}
	
	public function index()
	{
		$data['contents'] = 'app/dashboard';
		$this->load->view('layout/index',$data);
		// $this->load->view('app/test');
	}

}
