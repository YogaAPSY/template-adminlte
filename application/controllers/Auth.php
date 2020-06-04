<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		// $data['page'] = 'Login';
		// $data['layout'] = 'auth/login';
		$this->load->view('auth/login');
	}

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function forgot_password()
	{
		$this->load->view('auth/forgotPassword');
	}
}
