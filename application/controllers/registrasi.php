<?php

	/**
	 * 
	 */
	class Registrasi extends CI_Controller
	{
		
		public function index()
		{
			$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib diisi!']);
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Email wajib diisi!']);
			$this->form_validation->set_rules('nohp', 'Nohp', 'required', ['required' => 'No HP wajib diisi!']);
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_user.username]', ['required' => 'Username wajib diisi!', 'is_unique' => 'username sudah pernah teregistrasi']);
			$this->form_validation->set_rules('password_1', 'Pasword', 'required|matches[password_2]',  ['required' => 'Password wajib diisi!', 'matches' => 'Password tidak cocok!']);
			$this->form_validation->set_rules('password_2', 'Pasword', 'required|matches[password_1]');

			if($this->form_validation->run() == FALSE) 
			{
				$this->load->view('templates/header');
				$this->load->view('registrasi');
				$this->load->view('templates/footer');
			} 
			else
			{
				$data = array
				(
					'id'		=> '',
					'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
					'username'	=> htmlspecialchars($this->input->post('username', true)),
					'email'		=> htmlspecialchars($this->input->post('email',true)),					
					'nohp'		=> htmlspecialchars($this->input->post('nohp',true)),					
					
					'password'	=> $this->input->post('password_1'),
					'role_id'	=> 2,
					'is_active'	=> 1
					);

				$this->db->insert('tb_user', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat anda berhasil registrasi. Silahkan login untuk mengakses website
			  </div>');
				redirect('auth/login');
			}
		}
	}
?>