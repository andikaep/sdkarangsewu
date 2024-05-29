<?php
class Kontak extends CI_Controller{
        function __construct(){
		parent::__construct();
                $this->load->model('m_kontak');
	}
	function index(){
		$this->load->library('googlemaps');
                $config=array();
                $config['center']="-7.944922, 110.210877";
                $config['zoom']=17;
                $config['map_height']="400px";
                $this->googlemaps->initialize($config);
                $marker=array();
                $marker['position']="-7.944922, 110.210877";
                $this->googlemaps->add_marker($marker);
                $data['map']=$this->googlemaps->create_map();
		$this->load->view('tampilan/v_kontak',$data);
	}

        function kirim_pesan(){
               $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
                $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
                $pesan=htmlspecialchars(trim($this->input->post('pesan',TRUE)),ENT_QUOTES);
                $this->m_kontak->kirim_pesan($nama,$email,$pesan);
                echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah menghubungi kontak SD Negeri Karangsewu</div>");
                redirect('kontak');
        }
}