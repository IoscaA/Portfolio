<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller
{


	public function index()
	{
		$page = 'work';
		$parametro =  $this->uri->total_segments();
		$parametro = $this->uri->segment($parametro);



		  $Full_Name = ['Alfonso Pio ', 'Iosca'];
		  $Website_Name = "Oxygen Code.";
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
			$this->load->view('work'.$parametro);
			$this->load->view('footer');
	  }

}
