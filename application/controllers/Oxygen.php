<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oxygen extends CI_Controller
{
	public function addnewsletter(){
			$name = $this->input->post('email');
			$no_error = true;
			if (!(strpos($name, '@') !== false)) {
				$no_error =false ;
				echo "Non hai inserito una mail valida...";
			}

			$newfile="newsletter_email.txt";
			$fh = fopen($newfile, 'a') or die("<p class='mb-4' style='color:black;'><b><big>Oh snap!</big></b> <br>An error has occured while creating an error report.</p>");
			file_put_contents("juan.txt",$name.PHP_EOL,FILE_APPEND);
			fclose($fh);
			if ($no_error)
				echo "OK";
	}

	public function index()
	{
					$this->load->helper('form');
				  $Full_Name = ['Alfonso Pio ', 'Iosca'];
				  $Website_Name = "Oxygen Code.";
				  $Full_name_str ="";
				  foreach ($Full_Name as $str) {
				     $Full_name_str.= $str;
				   }

				   $Job = "Web & Graphics Designer";

				   $page =  $this->uri->total_segments();
					 $page = $this->uri->segment($page);

					$data = array(
						'Full_Name' => $Full_Name ,
						'Website_Name' => $Website_Name,
						'Full_name_str' => $Full_name_str,
						'Job' => $Job,
						'page' => $page,
						'name' =>  $this->security->get_csrf_token_name(),
						'hash'  =>  $this->security->get_csrf_hash()
					);

					$this->load->view('settings' , $data);
					$this->load->view('oxygen');
					$this->load->view('footer');

	}

}
