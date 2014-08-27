<?php
	/* INFO
	dashboard page
	*/
	
	//coba

	class Admin extends CI_Controller {

		public function index(){
			echo "DASHBOARD";
		}

		public function newpost(){
			$data['title'] = "new post";
			$this->load->view('template/header',$data);
			$this->load->view('editor');
			$this->load->view('template/footer');
		}

		public function previewpost(){
			$this->load->library('Parsedown');
			$this->load->library('ParsedownExtra');

			$tulisan = $this->input->post('inilah');
			/*$tulisan = htmlspecialchars($_POST['inilah']);*/

			$Tulis = new ParsedownExtra();
			echo $Tulis->text($tulisan);
		}

	}
