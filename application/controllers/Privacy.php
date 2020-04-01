<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller
{


	public function index()
	{
		$page =  $this->uri->total_segments();
		$page = $this->uri->segment($page);


		  $Full_Name = ['Alfonso Pio ', 'Iosca'];
		  $Website_Name = "Alfonso Pio Iosca";
		  $Full_name_str ="";
		  foreach ($Full_Name as $str) {
		     $Full_name_str.= $str;
		   }

		   $Job = "Web & Graphics Designer";



		$data = array(
			'Full_Name' => $Full_Name ,
			'Website_Name' => $Website_Name,
			'Full_name_str' => $Full_name_str,
			'Job' => $Job,
			'page' => $page
		);


		$this->load->view('settings' , $data);
		$this->load->view('privacy');
		$this->load->view('footer');
	}

}
