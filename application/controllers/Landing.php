<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
 
	}
	
	public function index()
	{
		$data = [
            'title' => 'Dashboard',
            // 'users' => $this->db->get('mahasiswa')->result_array()
        ];
		$this->load->view('templates/header.php', $data);
		$this->load->view('landing/index');
		$this->load->view('templates/footer.php');
	}

	public function menambah(){
		$data = [
            'title' => 'Tambah data',
        ];
		$this->load->view('templates/header.php', $data);
		$this->load->view('main/menambah');
		$this->load->view('templates/footer.php');
	}

	// public function tambah_data(){
	// 	$email = $this->input->post('email');
	// 	$nim = $this->input->post('nim');
	// 	$fullname = $this->input->post('fullname');

	// 	$data = array(
	// 		'email' => $email,
	// 		'nim' => $nim,
	// 		'fullname' => $fullname
	// 		);
	// 	$this->db->insert('mahasiswa',$data);
	// 	redirect('mahasiswa/index');
	// }

	// public function hapus($id){
	// 	$where = array('id' => $id);
	// 	$this->db->where($where);
	// 	$this->db->delete('mahasiswa');
	// 	redirect('mahasiswa/index');
	// }

	// public function edit($id){
	// 	$where = array('id' => $id);
	// 	$data = [
	// 		'title' => 'Edit data',
	// 		'users' => $this->db->get_where('mahasiswa',$where)->result_array()
	// 	];
	// 	$this->load->view('templates/header.php', $data);
	// 	$this->load->view('mahasiswa/edit',$data);
	// 	$this->load->view('templates/footer.php');
	// }

	// function update(){
	// 	$id = $this->input->post('id');
	// 	$email = $this->input->post('email');
	// 	$nim = $this->input->post('nim');
	// 	$fullname = $this->input->post('fullname');

	// 	$data = array(
	// 		'email' => $email,
	// 		'nim' => $nim,
	// 		'fullname' => $fullname
	// 		);
	 
	// 	$where = array(
	// 		'id' => $id
	// 	);
	 
	// 	$this->db->where($where);
	// 	$this->db->update('mahasiswa',$data);
	// 	redirect('mahasiswa/index');
	// }

}

