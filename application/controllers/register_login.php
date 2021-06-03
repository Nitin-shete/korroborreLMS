<?php 
class Register_login extends CI_Controller {

	

	public function register(){
     


		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	 


			
			$firstName =$this->input->post('fname');
			$lastName=$this->input->post('lname');
			$email=$this->input->post('email');
			$password =$this->input->post('pass');
			$password =$this->input->post('cpass');
			

			
			
			$insertData = array('fname'=>$firstName,
								'lname'=>$lastName,
								'email'=>$email,
								'phone'=>$phone,
								'password'=>$hashPassword,
							);

	}



			public function login(){

					$this->load->view('header');
		            $this->load->view('register');
		            $this->load->view('footer');



			}

}
