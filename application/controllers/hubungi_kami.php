<?php

class hubungi_kami extends CI_Controller {

	
		public function index()
		{

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('hubungi_kami');
			$this->load->view('templates/footer');
		}

		public function tambah_pesan()
		{
			$nama 		 = $this->input->post('nama');
			$email		 = $this->input->post('email');
			$alamat	 	 = $this->input->post('alamat');
			$judul 		 = $this->input->post('judul');
			$isi_pesan	 = $this->input->post('isi_pesan');

			$data = array
			(
				'nama'	 	 => $nama,
				'email'		 => $email,
				'alamat'	 => $alamat,
				'judul'		 => $judul,
				'isi_pesan'	 => $isi_pesan
			);

			$this->model_pesan->tambah_pesan($data, 'tb_pesan');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat anda berhasil mengirimkan pesan. Balasan dikirimkan lewat email
			  </div>');
			redirect('hubungi_kami/index');
		}
}