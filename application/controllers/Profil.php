<?php

class Profil extends CI_Controller {

	
		public function index()
		{
			//$data['barang'] = $this->model_barang->tampil_data();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('profil');
			$this->load->view('templates/footer');
		}
}
