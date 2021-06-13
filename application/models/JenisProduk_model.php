<?php

class JenisProduk_model extends CI_Model
{
	private $_table = "jenis_produk";

	public $id_jenis;
	public $nama_jenis;
	public $keterangan;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}