<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("layanan_model");
	} 

	public function index()
	{
		$data["datas"] = $this->layanan_model->getAll();
		$this->template->view('frontend/layout_v','frontend/layanan/layanan_v', $data);
	}
}
