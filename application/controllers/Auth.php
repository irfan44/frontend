<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  
  function __construct(){
		parent::__construct();
		$this->load->helper('url');
 
	}

  public function index(){
		$data = [
            'title' => 'Login',
        ];
		$this->load->view('auth/index', $data);		
	}

	public function registrasi(){
		$data = [
            'title' => 'Registrasi',
        ];
		$this->load->view('auth/registrasi', $data);		
	}
	
}
