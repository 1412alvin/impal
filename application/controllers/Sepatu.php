<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepatu extends CI_Controller {

function __construct()
    {
        parent::__construct();
		
		$this->load->model('M_sepatu','',TRUE);
		$this->load->helper(array('url')); 
		
    }
	public function login()
	{
		 $this->load->view('Admin/login');
	}
	
	public function index()
	{
		 $this->load->view('Admin/index');
	}
	

	function vbarang()
	{
		$data['barang'] = $this->M_sepatu->tampilbarang()->result();
		 $this->load->view('Admin/v_barang',$data);
	}
	
	
	function inputbarang()
	{
		 $this->load->view('Admin/form_databarang');
	}
	
	function tambahbarang()
	{
	
		$kode = $this->input->post('kode');
		$merk = $this->input->post('merk');
		$ukuran = $this->input->post('ukuran');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
 
		$data = array(
			'kode' => $kode,
			'merk' => $merk,
			'ukuran' => $ukuran,
			'jumlah' => $jumlah,
			'harga' => $harga
			);
		$this->M_sepatu->tambahbarang($data);
		redirect('sepatu/vbarang');
		
	
}
}