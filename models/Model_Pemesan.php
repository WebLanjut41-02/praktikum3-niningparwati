<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_Pemesan extends CI_Model
{

	function inputPemesan($kode, $nama)
	{
		$data = array(
			'id_pemesan' => $kode,
			'nama_pemesan' => $nama
		);

		$this->db->insert('pemesan', $data);
	}

	function getMakanan()
	{
	$this->db->select('*');
	$this->db->from('makanan');

	$query = $this->db->get();
	return $query->result();
	}

	function inputTransaksi($nama, $jumlah)
	{
		$data = array(
			'nama_makanan' => $nama,
			'jumlah_makanan' => $jumlah
		);
		$this->db->insert('transaksi', $data);
	}


}
 ?>