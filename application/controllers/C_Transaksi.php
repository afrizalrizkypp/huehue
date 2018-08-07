<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MA_Barang');

		$this->load->helper('url');

	 // // if($this->session->userdata('status') != "sucsess"){
		// redirect(base_url("index.php/login"));
	}

	
	public function index(){
	 		
	$x['data']=$this->MA_Barang->tampil();
	$this->load->view('Admin/template/transaksi/VA_Transaksi', $x);
	}
