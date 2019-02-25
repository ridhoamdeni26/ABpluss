<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdb extends CI_Model {

	public function getDataUser()
	{
  		return $this->db->get('user')->result();
 	}


}