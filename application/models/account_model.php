<?php
	class Account_model extends CI_Model{

		function __construct(){
			parent::__construct(); 

		}

		public function validate($username=NULL,$password=NULL){
			$password = sha1($password);
			$query=$this->db->query("select * from users where user_login='$username' and user_pass='$password'");
			if($query->num_rows() == 1){
			 	$data=$query->row();
			 	$this->set_session($data);
			 	return TRUE;
			}else{
				return FALSE;
			}
		}

		function set_session($data){
	        $sesi = array(
	            'uid' => $data->ID,
	            'username'  => $data->user_login,
	            'email'     => $data->user_email,
	            'level'  => $data->user_level,
	            'isLogin'  => TRUE
	        );
	        $this->session->set_userdata($sesi);
    	}
	}