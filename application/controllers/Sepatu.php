<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepatu extends CI_Controller {

function __construct()
    {
        parent::__construct();

		$this->load->model('M_sepatu','',TRUE);
		$this->load->helper(array('url'));

    }
  function beranda() {
    $this->load->view('beranda/index');
  }
     function menuAdmin()
	{

		 $this->load->view('Admin/v_header');
		 $this->load->view('Admin/index');
	}
  function index()
  {
    $data['user'] = $this->M_sepatu->logged_id($this->session->userdata('username'));
    $this->load->view('user/menu');
  }
	public function login()
	{
		$data = array();
        if ($this->session->userdata('username') != "")
            redirect('sepatu/login');
        $this->load->view('Admin/login', $data);
	}

	public function loginA()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
    if($username == 'admin' &&$password=='admin') {
      $checking = $this->M_sepatu->check_login('login_admin', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
        if ($checking != FALSE) {
        	foreach ($checking as $apps) {

                        $session_data = array(
                            'user_name' => $apps->username,
                            'name'=>$apps->nama,
                            'user_pass' => $apps->password
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('Sepatu/menuAdmin');

                    }
            }
        else {
        	$this->load->view('Admin/login');
        }
      }
    else {
      $checking = $this->M_sepatu->check_login('customer', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
        if ($checking != FALSE) {
        	foreach ($checking as $apps) {

                        $session_data = array(
                            'user_name' => $apps->username,
                            'name' => $apps->nama,
                            'user_pass' => $apps->password
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('Sepatu/index');

                    }
            }
        else {
        	$this->load->view('Admin/login');
        }
    }
	}

	function logout()
    {
        $this->session->sess_destroy();
        redirect('Sepatu/login');
    }
    function register()
    {
      $this->load->view('Admin/register');
    }

	function vbarang()
	{
		$this->load->view('Admin/v_header');
		$data['barang'] = $this->M_sepatu->tampilbarang()->result();
		$this->load->view('Admin/v_barang',$data);
	}
  function vpemesanan()
  {
    $this->load->view('Admin/v_header');
    $data['barang'] = $this->M_sepatu->tampilpesanan()->result();
    $this->load->view('Admin/v_pemesanan',$data);
  }


	function inputbarang()
	{
		 $this->load->view('Admin/v_header');
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
  function tambahAkun()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    if ($username !="admin")
    {
    $data = array(
			'username' => $username,
      'password' => $password,
      'nama' => $nama,
      'email' => $email
			);
    $this->M_sepatu->tambahakun($data);
      echo '<script type="text/javascript">
             alert("Berhasil Login");
      </script>';
    $this->load->view('Admin/login');



  }else {

    echo '<script type="text/javascript">
             alert("Login Gagal");
      </script>';
    $this->load->view('Admin/register');
  }
  }
	function deletebarang($kode)
	{
		$get = $this->M_sepatu->get_data_barang($kode);
		$row = $get->row();
		$data = array();
		$data['barang'] = $row;
		$kode = $row->kode;
		$this->M_sepatu->deletebarang($kode);
		 redirect('sepatu/vbarang');


	}
	function formeditbarang($kode)
	{

        $data = array();
		$data['barang'] = $this->M_sepatu->tampilbarang()->result();
        $rs            = $this->M_sepatu->get_data_barang($kode);
        $row           = $rs->row();
        $data['row']   = $row;
        $this->load->view('Admin/v_header', $data);
		$this->load->view('Admin/v_editbarang',$data);


	}
  function formbarang()
  {
    $data = array();
$data['barang'] = $this->M_sepatu->tampilbarang()->result();
    $rs            = $this->M_sepatu->get_data_barang($kode);
    $row           = $rs->row();
    $data['row']   = $row;
$this->load->view('pembayaran/menupembayaran',$data);
  }

	function editbarang()
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

        $this->M_sepatu->editbarang($kode, $data);
        $this->vbarang();

	}
  function menupembayaran()
  {
    $this->load->view('pembayaran/menupembayaran');
  }
  function addPemesanan()
	{

		$kode = $this->input->post('kodesepatu');
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');
    $metode = $this->input->post('metode');

		$data = array(
			'kode' => $kode,
			'nama' => $nama,
			'nohp' => $nohp,
			'alamat' => $alamat,
      'metode' => $metode,
			);
		$this->M_sepatu->tambahpesanan($data);
    redirect('Sepatu/notifTransaksi');
}
  function notifTransaksi()
  {
    $this->load->view('pembayaran/notif');
  }

}
