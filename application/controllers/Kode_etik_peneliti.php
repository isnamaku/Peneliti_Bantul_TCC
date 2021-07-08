<?php

class kode_etik_peneliti extends CI_Controller {

	
		public function index()
		{

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('kode_etik_peneliti');
			$this->load->view('templates/footer');
		}
}