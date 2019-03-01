<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuMakanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Pemesan');
	}

	public function index()
	{
		$this->load->view('inputNama');
	}

	public function inputPemesan()
	{
		$kode = $this->input->post('kodePemesan');
		$nama = $this->input->post('namaPemesan');

		$this->Model_Pemesan->inputPemesan($kode, $nama);
		redirect('MenuMakanan/TampilMenu');
	}	

	public function TampilMenu()
	{
		$data = $this->Model_Pemesan->getMakanan();
		$this->session->set_userdata('makanan', $data);
		$this->load->view('berandaMenu');

	}

	public function inputTransaksi()
	{
		$nama = $this->input->post('namaMakanan');
		$harga = $this->input->post('hargaMakanan');
		$jumlah = $this->input->post('jumlahMakanan');

		$this->Model_Pemesan->inputTransaksi($nama, $jumlah);
		// redirect('MenuMakanan/DetailTransaksi');
	}


}
 ?>