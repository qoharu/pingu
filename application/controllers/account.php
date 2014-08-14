<?php
	class Account extends CI_Controller {

		public function index(){

			//if user not logged in
			if($this->session->userdata('isLogin')==FALSE){
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
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('home');
		}

		public function register(){
			/* TODO
			user logged in -> show the profile page
			link to register account
			*/
			echo "HALAMAN REGISTER";
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