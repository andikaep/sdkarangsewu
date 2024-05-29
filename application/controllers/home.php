<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
	}
	function index(){
			$x['galeri']=$this->m_galeri->get_galeri_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['download']=$this->m_files->get_files_home();
			$this->load->view('tampilan/v_home',$x);
		}

	
}