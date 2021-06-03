<?php 
class Student extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('dashboard/student/header');
		$this->load->view('dashboard/student/');
		$this->load->view('dashboard/student/footer');

	}
}