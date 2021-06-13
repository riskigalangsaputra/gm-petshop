<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->user_model->isNotLogin() == TRUE) {
			redirect(site_url('/login'));
		}

		$this->load->model("user_model");

	} 

	public function form($id) {


		$user_id = $this->session->userdata('user_logged')->user_id;
		$data["users"] = $this->user_model->findByUserId($user_id);

		$this->template->view('frontend/layout_v','frontend/booking/form', $data);
	}
}
