<?php
class visi_misi extends CI_Controller{
	function __construct(){
		parent::__construct();

	}
	function index(){
		$this->load->view('tampilan/v_visi_misi');
	}
}