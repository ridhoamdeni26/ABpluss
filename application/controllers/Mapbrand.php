<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapbrand extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		
		$data['contents'] = 'Brand/index';
		$this->load->view('layout/index',$data);
	
	}


} //penutup controller