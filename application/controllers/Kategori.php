<?php

	/**
	 * 
	 */
	class Kategori extends CI_Controller
	{

		public function internal()
		{
					
			$data['internal'] = $this->model_kategori->data_internal()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('internal', $data);
			$this->load->view('templates/footer');
		}

		public function eksternal()
		{
			$data['eksternal'] = $this->model_kategori->data_eksternal()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('eksternal', $data);
			$this->load->view('templates/footer');
		}
	}
?>