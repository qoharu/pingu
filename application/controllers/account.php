<?php
	class Account extends CI_Controller {

		public function index(){
			/* TODO
			user not logged in -> show the login page
			user logged in -> show the profile page
			*/
			echo "HALAMAN ACCOUNT";
		}

		public function login(){
			/* TODO
			user logged in -> show the profile page
			link to register account
			*/
			echo "HALAMAN LOGIN";
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