<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('card');
		$this->load->view('footer');

	}


public function product(){

        $this->load->view('header');
		$this->load->view('single_product');
		$this->load->view('footer');

	}


}


 ?> 