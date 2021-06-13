<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("layanan_model");
		// $this->load->model("produk_model");
	} 

	public function index()
	{
		$data["datas"] = $this->layanan_model->getAll();
		$this->template->view('frontend/layout_v','frontend/home_v',$data);
	}
}
