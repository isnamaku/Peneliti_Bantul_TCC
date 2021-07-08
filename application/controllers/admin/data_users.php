<?php


class Data_users extends CI_Controller
	{
		public function __construct(){
			parent:: __construct();

			if ($this->session->userdata('role_id') != '1') {
				$this->session->set_flashdata('pesan', '
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
  							<strong>Anda belum login!
  							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
  							</button>
						</div>');
				redirect('auth/login');
			}
		}
		
		public function index()
		{
			
			$data['users'] = $this->model_users->tampil_data();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_users', $data);	
			$this->load->view('templates_admin/footer');
		}


		public function tambah_aksi()
		{
			$nama 		 = $this->input->post('nama');
			$username	 = $this->input->post('username');
			$email 		 = $this->input->post('email');
			$nohp		 = $this->input->post('nohp');
			$password	 = $this->input->post('password');
			$role_id 	 = $this->input->post('role_id');
			

			$data = array
			(
				'nama'		 => $nama,
				'username'	 => $username,
				'email'		 => $email,
				'nohp'	 	 => $nohp,
				'password'	 =>$password,
				'role_id'	 =>$role_id			
			);

			$this->model_users->tambah_users($data, 'tb_user');
			redirect('admin/data_users/index');
		}

		public function edit($id)
		{
			$where = array('id' => $id);
			$data['users'] = $this->model_users->edit_users($where, 'tb_user')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/edit_users', $data);
			$this->load->view('templates_admin/footer');
		}

		public function update()
		{
			$id 		= $this->input->post('id');
			$nama 		= $this->input->post('nama');
			$username 	= $this->input->post('username');
			$email 		 = $this->input->post('email');
			$nohp	 = $this->input->post('nohp');
			$password	 = $this->input->post('password');
			$role_id	 = $this->input->post('role_id');
			

			$data = array
			(
				'nama' 		 => $nama, 
				'username'	 => $username,
				'email' 	 => $email, 
				'nohp'	 	 => $nohp,
				'password'	 =>$password,
				'role_id'	 =>$role_id
			);

			$where = array('id' => $id);

			$this->model_users->update_data($where,$data,'tb_user');
			redirect('admin/data_users/index');
		}

		public function hapus($id)
		{
			$where = array('id' => $id);
			$this->model_users->hapus_data($where, 'tb_user');
			redirect('admin/data_users/index');
		}

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['users']=$this->model_users->get_keyword($keyword);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_users', $data);
			$this->load->view('templates_admin/footer');						
	
		}
	}
?>