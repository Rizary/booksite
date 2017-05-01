<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Booksite_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getBuku($option, $param) {
		if ($option=="all") {
			$sqlstr = "SELECT * FROM buku ORDER BY id_buku ASC";
		}
		else {
			$sqlstr = "SELECT * FROM buku WHERE $option = $param ORDER BY id_buku ASC";
		}

		$hasil = $this->db->query($sqlstr);

		return $hasil->result_array();
		
	}

	function jRec() {
		$hasil = $this->db->count_all('buku');
		return $hasil;
	}

	function getKatalog() {
		$sqlstr = "SELECT * FROM katalog ORDER BY id ASC";
		$hasil = $this->db->query($sqlstr);
		return $hasil->result_array();
	}

	function getKategori() {
		$sqlstr = "SELECT * FROM kategori ORDER BY id ASC";
		$hasil = $this->db->query($sqlstr);
		return $hasil->result_array();
	}
}

?>