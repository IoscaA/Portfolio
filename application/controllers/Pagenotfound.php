<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagenotfound extends CI_Controller
{

	public function index()
	{
		$this->load->view('pagenotfound');
	}

	public function redirectto404(){
		redirect('pagenotfound');
	}
}
