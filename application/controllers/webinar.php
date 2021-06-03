<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Webinar extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('webinar_list');
		$this->load->view('footer');

	}

	public function details()
	{
		
		$this->load->view('header');
		$this->load->view('webinar_single');
		$this->load->view('footer');

	}

	public function gallery()
	{
		
		$this->load->view('header');
		$this->load->view('webinar_gallery');
		$this->load->view('footer');

	}
}
 ?>