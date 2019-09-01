<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	public function index(){
		$data['title'] = 'Login';
		$this->load->view('_part/login_head', $data);
		$this->load->view('login_v');
		$this->load->view('_part/login_footer');
	}

	public function forgotpass(){
		$data['title'] = 'Recovery password';
		$this->load->view('_part/login_head', $data);
		$this->load->view('forgotpass_v');
		$this->load->view('_part/login_footer');
	}

	public function register(){
		$data['title'] = 'Recovery password';
		$this->load->view('_part/login_head', $data);
		$this->load->view('register_v');
		$this->load->view('_part/login_footer');
	}
}