<?php
class Parssingproduk {

  	protected $CI;

  	public $produks = array();
	
    public function __construct()
	{
    	$this->CI =& get_instance();

    	$this->getProuk();
	}


	public function getProuk()
	{
	    $this->CI->load->model('jenisProduk_model');

	    $this->produks = $this->CI->jenisProduk_model->getAll();
	}
}