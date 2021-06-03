<?php 
class Instructor extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('dashboard/instructor/header');
		$this->load->view('dashboard/instructor/');
		$this->load->view('dashboard/student/footer');

	}
}