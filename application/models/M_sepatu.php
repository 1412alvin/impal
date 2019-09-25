<?php 
 
class M_sepatu extends CI_Model{
	
 public $barang = "barang";
 
 function __construct()
    {
        parent::__construct();
		
    }
	
	function tampilbarang(){
	 
		$sql = "SELECT*FROM barang";
        return $this->db->query($sql);
	
	}
	function tambahbarang($data){
		
		$this->db->insert($this->barang,$data);
	}
}







