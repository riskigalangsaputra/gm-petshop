<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->user_model->isNotLogin()) redirect(site_url('/'));

		if($this->user_model->isNotLogin() == FALSE && $this->session->userdata('user_logged')->role != 'admin') {
			redirect(site_url('page_not_found'));
		}
        $this->load->model("layanan_model");
    }

	public function index()
	{
		$data["datas"] = $this->layanan_model->getAll();
		$this->template->view('backend/layout_v','backend/layanan/list', $data);
	}

	public function form() {		
		$this->template->view('backend/layout_v','backend/layanan/form');
	}

	public function edit($id) {
		$data["datas"] = $this->layanan_model->getById($id);
		$this->template->view('backend/layout_v','backend/layanan/edit', $data);
	}

	public function save()
	{
		$this->layanan_model->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('backend/layanan');
	}

	public function update()
    {
        $this->layanan_model->update();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('backend/layanan');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->layanan_model->delete($id)) {
            redirect(site_url('backend/layanan'));
        }
    }
}
