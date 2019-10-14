<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->API="http://localhost/mwm/";
        $this->load->library('form_validation');
        $this->load->library('curl');

	}

	public function index()
	{
			//$data['result'] = $this->userdb->getDataUser();
			$data['contents'] = 'Grafik/index';
			$this->load->view('layout/index',$data);
	}

} // penutup controller