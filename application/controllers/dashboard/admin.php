<?php 
class Admin extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('dashboard/admin/header');
		$this->load->view('dashboard/admin/');
		$this->load->view('dashboard/admin/footer');

	}
}