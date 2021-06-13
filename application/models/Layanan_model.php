<?php
class Layanan_model extends CI_Model
{
	private $_table = "layanan";

	public $id_layanan;
	public $nama_layanan;
	public $keterangan;
	public $gambar;

	public function rules()
    {
        return [
            ['field' => 'nama_layanan',
            'label' => 'Layanan',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
            
            ['field' => 'gambar',
            'label' => 'Gambar',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_layanan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->id_layanan = uniqid();
        $this->nama_layanan = $post["nama_layanan"];
        $this->keterangan = $post["keterangan"];
        $this->gambar = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

	public function update()
    {
        $post = $this->input->post();
        $this->id_layanan = $post["id"];
        $this->nama_layanan = $post["nama_layanan"];
        $this->keterangan = $post["keterangan"];

        if (!empty($_FILES["gambar"]["name"])) {
		    $this->gambar = $this->_uploadImage();
		} else {
		    $this->gambar = $post["old_image"];
		}

        return $this->db->update($this->_table, $this, array('id_layanan' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_layanan" => $id));
    }

    private function _uploadImage()
	{
	    $config['upload_path']          = './assets/backend/upload/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['file_name']            = $this->id_layanan;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('gambar')) {
	        return $this->upload->data("file_name");
	    }
	    print_r($this->upload->display_errors());
	    return "default.png";
	}

	private function _deleteImage($id)
	{
	    $layanan = $this->getById($id);
	    if ($layanan->image != "default.jpg") {
		    $filename = explode(".", $layanan->gambar)[0];
			return array_map('unlink', glob(FCPATH."/assets/backend/upload/$filename.*"));
	    }
	}
}