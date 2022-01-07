<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
		$this->load->view('main/index');
		$this->load->view('templates/footer.php');
	}

	public function pencarian()
	{
		$data = [
            'title' => 'Dashboard',
            // 'users' => $this->db->get('mahasiswa')->result_array()
        ];
		$this->load->view('templates/header.php', $data);
		$this->load->view('main/pencarian');
		$this->load->view('templates/footer.php');
	}

	public function deskripsi()
	{
		$data = [
            'title' => 'Dashboard',
            // 'users' => $this->db->get('mahasiswa')->result_array()
        ];
		$this->load->view('templates/header.php', $data);
		$this->load->view('main/deskripsi');
		$this->load->view('templates/footer.php');
	}

	// public function menambah(){
	// 	$data = [
    //         'title' => 'Tambah data',
    //     ];
	// 	$this->load->view('templates/header.php', $data);
	// 	$this->load->view('main/menambah');
	// 	$this->load->view('templates/footer.php');
	// }
}
?>