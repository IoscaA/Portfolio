<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatti extends CI_Controller
{
	public function send_email(){
		$no_error =true;
		$name = $this->input->post('name');
		if ($name ==""){
			$no_error =false;
			echo "Inserire il Nome";
		}
		$email = $this->input->post('email');
		if (!(strpos($email, '@') !== false)) {
			$no_error =false;
			echo "<br>Inserire un email valida;";
		}
		$subject = $this->input->post('subject');
		if ($subject ==""){
			$no_error =false;
			echo "<br>Inserire un oggetto valido";
		}
		$message = $this->input->post('message');
		if ($message ==""){
			$no_error =false;
			echo "<br>Inserire un messaggio valido";
		}

		if ($no_error){
			$message .= ".\nLa mia mail e': ".$email;
			mail("ioscaalfonsopio@gmail.com", $subject, $message) or die("Errore durante l'invio del messaggio.\nRiprova più tardi");
			echo "OK";
		}
	}


	public function index()
	{
		$this->load->helper('form');
		$page =  $this->uri->total_segments();
		$page = $this->uri->segment($page);


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
			'page' => $page,
			'name' =>  $this->security->get_csrf_token_name(),
			'hash'  =>  $this->security->get_csrf_hash()

		);

				$this->load->view('settings' , $data);
				$this->load->view('contatti');
				$this->load->view('footer');
	}





}
