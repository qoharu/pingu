<?php
	class Account extends CI_Controller {
		function __construct(){
			parent::__construct(); 
			$this->load->model('account_model');
		}

		public function index(){

			//if user not logged in
			if( ! $this->session->userdata('isLogin') ){
				//go to login page
				redirect('account/login');
			}else{
				//go to profile page
				redirect('account/profile');
				
			}
		}

		public function login(){
			$data['title'] = "User Login";

			//if user has logged in then
			if($this->session->userdata('isLogin')){
				redirect('account/profile');	
			}
			//show the login form
			$this->load->view('template/header',$data);
			$this->load->view('login_form');
			$this->load->view('template/footer');
		}

		public function login_process(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if( $this->account_model->validate($username,$password) == TRUE ){
				echo "true";
			}else{
				echo "false";
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('home');
		}

		public function register(){
			$data['title'] = "Register";

			if($this->session->userdata('isLogin')){
				redirect('account/profile');
			}

			$this->load->view('template/header',$data);
			$this->load->view('register');
			$this->load->view('template/footer');
		}

		public function profile($username){
			/* TODO
			This page shows profile based on function
			parameter, if $username is empty then it will
			shows profile page using user session
			*/
			echo "HALAMAN PROFILE";
		}

	}