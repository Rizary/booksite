<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Booksite extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Booksite_model', 'Model');
	}

	function index()
	{
		$data = [
			"title"		=> "Booksite.com",
		];

		$data["katalog"] = $this->Model->getKatalog();
		$data["kategori"] = $this->Model->getKategori();

		$data["hasil"] = $this->Model->getBuku('all', null);
		$data["jml_rec"] = $this->Model->jRec();

		$this->load->view('wrapper', $data);
	}

	function detail()
	{
		
	}
}

?>
