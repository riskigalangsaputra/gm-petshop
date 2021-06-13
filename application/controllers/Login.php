<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{

		// validasi jika sudah login maka tidak bisa akses url login lagi
		if($this->user_model->isNotLogin() == FALSE) {
			if ($this->session->userdata('user_logged')->role == 'admin') {
            		redirect(site_url('backend/dashboard'));
        	} else {
        		redirect(site_url('/'));
        	}
		}


		// login sukses akan di arahkan ke halaman sesuai role
		if($this->input->post()){
            if($this->user_model->doLogin()) {
            	if ($this->session->userdata('user_logged')->role == 'admin') {
            		redirect(site_url('backend/dashboard'));
            	} else {
            		redirect(site_url('/'));
            	}
            	
            }
            
        }

		$this->template->view('frontend/layout_v','frontend/login_v');
	}


	public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('/'));
    }

    
}
