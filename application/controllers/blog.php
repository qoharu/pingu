<?php
	/* TODO :
	Building backbone structure
	*/
	class Blog extends CI_Controller {

		public function index($page=1){
			$data['title'] = "Forum";
			
			$this->load->view('template/header',$data);
			$this->load->view('blog');
			$this->load->view('template/footer',$data);
		}

		public function date($year,$month,$day,$page=1){
			echo "blablabla";
		}

		public function search($query,$page=1){

		}

		public function category($cat,$page=1){

		}

	}