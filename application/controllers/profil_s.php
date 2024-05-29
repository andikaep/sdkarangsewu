<?php
class Profil_s extends CI_Controller{
	function __construct(){
		parent::__construct();

	}
	function index(){
		$this->load->view('tampilan/v_profil_s');
	}
}