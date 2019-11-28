<?php

class M_sepatu extends CI_Model{
 public $loginA = "login_admin";
 public $barang = "barang";
 public $customer = "customer";
 public $datapemesanan = "datapemesanan";

 function __construct()
    {
        parent::__construct();

    }
    function logged_id($username)
    {
       // return $this->session->userdata('user_id');
     $this->db->where('username',$username);
     $query = $this->db->get($this->customer);
     $query->row();
    }
	 // function cek_username($table, $where)
  //   {

  //       return $this->db->get_where($table,$where);
  //   }
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }


	function tampilbarang(){

		$sql = "SELECT*FROM barang";
        return $this->db->query($sql);

	}
  function tampilpesanan()
  {
    $sql = "SELECT*FROM datapemesanan";
        return $this->db->query($sql);
  }
	function tambahbarang($data){

		$this->db->insert($this->barang,$data);
	}
  function tambahpesanan($data)
  {
    $this->db->insert($this->datapemesanan,$data);
  }
	function get_data_barang($kode)
    {
        $this->db->where('kode', $kode);
        return $this->db->get($this->barang);
    }

	function deletebarang($kode){
		$sql='DELETE FROM barang WHERE kode="'.$kode.'"';
		$this->db->query($sql);
	}
	function editbarang($kode, $data)
    {
        $this->db->where('kode', $kode);
        $this->db->update($this->barang, $data);
    }
    function tambahakun($data){
      $this->db->insert($this->customer,$data);
    }
}
