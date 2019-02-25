<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roleuser extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->API="http://localhost/mwm/";
        $this->load->library('form_validation','curl');
        $this->load->model('userdb');
	}

	public function index()
	{
			$data['result'] = $this->userdb->getDataUser();
			$data['contents'] = 'Managementuser/index';
			$this->load->view('layout/index',$data);
	}

	// function add()
	// {
	// 	if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level_user')=="1")
	// 	{
	// 		$data['data']=$this->usermodel->getDataUser();
	// 		$this->form_validation->set_rules('nama_lengkap', 'Field of Type Nama Lengkap', 'trim|required');
	// 		$this->form_validation->set_rules('username', 'Field of Username', 'trim|required');
	// 		$this->form_validation->set_rules('password', 'Field of Password', 'trim|required');
	// 		$this->form_validation->set_rules('confirm_password', 'Field of Ulangi Password', 'trim|required');
	// 		$this->form_validation->set_rules('id_level', 'Field of Level User', 'trim|required');
	// 		$this->form_validation->set_rules('status', 'Field of Level User', 'trim|required');

	// 		if ($this->form_validation->run()==FALSE)
	// 			{
	// 				$data['contents'] = 'Managementuser/view';
	// 				$this->load->view('layout/index',$data);
	//        		}
	       
	// 		else
	// 		{  
	// 		        		if ($_POST["password"] === $_POST["confirm_password"]) {
	// 			        		$cek = $this->usermodel->cekData();
	// 			        		if (!$cek > 0 )
	// 			        		{
	// 			        			$tambahdata = $this->usermodel->addData();
	// 					          if($insert)
	// 					         	{
	// 					          $this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 					          							  <h4>Oppss</h4>
	// 										                  <p>Data Gagal di Tambah, Silahkan Ulangi</p>
	// 										                  </div>');
	// 					          redirect('Management/index');
	// 					     	 	} 
	// 					     	 	else
	// 					     	 	{
	// 					     	 	$this->session->set_flashdata('msg','<div class="alert alert-success">
	// 													                 <h4>Berhasil </h4>
	// 													                 <p>Data Berhasil di Tambah !</p>
	// 													                 </div>');
	// 					     	 	redirect('Management/index');
	// 					     	 	} 
				        			
	// 			        		}
	// 			        		else
	// 			        		{

	// 					          $this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 					          							  <h4>Oppss</h4>
	// 										                  <p>Data Sudah Tersedia Silhakan ulangi kembali</p>
	// 										                  </div>');
	// 					          redirect('Management/index');
	// 			        		}
	// 		        		}
	// 		        		else
	// 		        		{
	// 		        			$this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 				          							  <h4>Maaf</h4>
	// 									                  <p>Password yang di masukan tidak sama, mohon di ulangi!</p>
	// 									                  </div>');
	// 				         	redirect('Management/index');
	// 		        		}

	//     	}
	//     }
	//     else
	// 	{
	// 		$this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 			          							  <h4>Oppss</h4>
	// 								                  <p>Maaf Anda Tidak di Persilahkan Untuk Melihat Halaman Ini</p>
	// 								                  </div>');
	// 		redirect('App/index');
	// 	}
	// }

	// function edit()
	// {
	// 	if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level_user')=="1")
	// 	{
	// 		$id = $this->input->get('id');
	// 		$hasil = $this->usermodel->editData($id); //kirim parameter $id
	// 		echo json_encode($hasil);
	// 	}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 			          							  <h4>Oppss</h4>
	// 								                  <p>Maaf Anda Tidak di Persilahkan Untuk Melihat Halaman Ini</p>
	// 								                  </div>');
	// 		redirect('App/index');
	// 	}

	// }

	// function ubah()
	// {
	// 	if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level_user')=="1")
	// 	{
	//         $id = $this->input->post('ID');
	//         $nl =  $this->input->post('NL');
	//         $un =  $this->input->post('UN');
	//         $ps =  $this->input->post('PS');
	//         $conf =  $this->input->post('CONF');
	//         $level =  $this->input->post('LEVEL');
	//         $status =  $this->input->post('ST');

	//         $up  = array('id_user'=> $id, 'nama_lengkap'=> $nl, 'username'=> $un, 'password'=> Md5($ps), 'id_level_user'=> $level, 'status'=>$status);
	//         if ($ps === $conf) {
	//         // $wh  = array('ID', $id);
	// 	         $this->db->where('id_user', $id);
	// 			 $this->db->update('tb_user', $up);
	// 			if($this->db->affected_rows()) {
	// 			   $this->session->set_flashdata('msg','<div class="alert alert-success">
	// 													 <h4>Berhasil </h4>
	// 													 <p>Data Berhasil Di Update !</p>
	// 													 </div>');
	// 											} 
	// 											else 
	// 											{
	// 											$this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 							          						<h4>Oppss</h4>
	// 												            <p>Data Gagal Di Update Password Tidak Boleh Sama !</p>
	// 												            </div>');
	// 											}
	// 		}else{
	// 			    $this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 				<h4>Maaf</h4>
	// 				<p>Password yang di masukan tidak sama, mohon di ulangi!</p>
	// 				</div>');
	// 		    }

	// 	}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('msg','<div class="alert alert-danger">
	// 			          							  <h4>Oppss</h4>
	// 								                  <p>Maaf Anda Tidak di Persilahkan Untuk Melihat Halaman Ini</p>
	// 								                  </div>');
	// 		redirect('App/index');
	// 	}
	// }

} // penutup controller