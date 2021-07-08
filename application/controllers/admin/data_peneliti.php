<?php

	class Data_peneliti extends CI_Controller
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
			
			$data['peneliti'] = $this->model_peneliti->tampil_data();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_peneliti', $data);	
			$this->load->view('templates_admin/footer');
		}


		public function tambah_aksi()
		{
			$nama_peneliti 		= $this->input->post('nama_peneliti');
			$ktpnik		 		= $this->input->post('ktpnik');
			$ttl		 		= $this->input->post('ttl');
			$jenkel		 		= $this->input->post('jenkel');
			$alamat		 		= $this->input->post('alamat');
			$kategori	 		= $this->input->post('kategori');
			$instansi	 		= $this->input->post('instansi');
			$alamat_ins	 		= $this->input->post('alamat_ins');
			$email				= $this->input->post('email');
			$pendidikan	 		= $this->input->post('pendidikan');
			$jenjangpeneliti 	= $this->input->post('jenjangpeneliti');
			$no_hp		 		= $this->input->post('no_hp');
			$list_research	 	= $this->input->post('list_research');
			$gambar		 		= $_FILES['gambar']['name'];
			if ($gambar = '') {}
			else{
				
				$config ['upload_path'] = './uploads';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) 
				{
					echo "Gambar Gagal di Upload!";
				}
				else
				{
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array
			(
				'nama_peneliti'		=> $nama_peneliti,
				'ktpnik'	 		=> $ktpnik,
				'ttl'		 		=> $ttl,
				'jenkel'	 		=> $jenkel,
				'alamat'	 		=> $alamat,
				'kategori'	 		=> $kategori,
				'instansi'	 		=> $instansi,
				'alamat_ins'	 	=> $alamat_ins,
				'email'			 	=> $email,
				'no_hp'			 	=> $no_hp,
				'pendidikan'		=> $pendidikan,
				'jenjangpeneliti'	=> $jenjangpeneliti,
				'list_research'	 	=> $list_research,
				'gambar'	 		=> $gambar
			);

			$this->model_peneliti->tambah_peneliti($data, 'tb_peneliti');
			redirect('admin/data_peneliti/index');
		}

		public function edit($id)
		{
			$where = array('id_peneliti' => $id);
			$data['peneliti'] = $this->model_peneliti->edit_peneliti($where, 'tb_peneliti')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/edit_peneliti', $data);
			$this->load->view('templates_admin/footer');
		}

		public function update()
		{
			$id 				= $this->input->post('id_peneliti');
			$nama_peneliti 		= $this->input->post('nama_peneliti');
			$ktpnik		 		= $this->input->post('ktpnik');
			$ttl		 		= $this->input->post('ttl');
			$jenkel		 		= $this->input->post('jenkel');
			$alamat		 		= $this->input->post('alamat');
			$kategori	 		= $this->input->post('kategori');
			$instansi	 		= $this->input->post('instansi');
			$alamat_ins	 		= $this->input->post('alamat_ins');
			$email				= $this->input->post('email');
			$pendidikan	 		= $this->input->post('pendidikan');
			$jenjangpeneliti 	= $this->input->post('jenjangpeneliti');
			$no_hp		 		= $this->input->post('no_hp');
			$list_research	 	= $this->input->post('list_research');


			$data = array
			(
				'nama_peneliti'		=> $nama_peneliti,
				'ktpnik'	 		=> $ktpnik,
				'ttl'		 		=> $ttl,
				'jenkel'	 		=> $jenkel,
				'alamat'	 		=> $alamat,
				'kategori'	 		=> $kategori,
				'instansi'	 		=> $instansi,
				'alamat_ins'	 	=> $alamat_ins,
				'email'			 	=> $email,
				'no_hp'			 	=> $no_hp,
				'pendidikan'		=> $pendidikan,
				'jenjangpeneliti'	=> $jenjangpeneliti,
				'list_research'	 	=> $list_research,
			);

			$where = array('id_peneliti' => $id);

			$this->model_peneliti->update_data($where,$data,'tb_peneliti');
			redirect('admin/data_peneliti/index');
		}

		public function hapus($id)
		{
			$where = array('id_peneliti' => $id);
			$this->model_peneliti->hapus_data($where, 'tb_peneliti');
			redirect('admin/data_peneliti/index');
		}

		public function detail($id_peneliti)
		{
			$data['peneliti'] = $this->model_peneliti->detail_peneliti($id_peneliti);
				$this->load->view('templates_admin/header');
				$this->load->view('templates_admin/sidebar');
				$this->load->view('templates_admin/topbar');
				$this->load->view('admin/detail_peneliti', $data);
				$this->load->view('templates_admin/footer');						
		}

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['peneliti']=$this->model_peneliti->get_keyword($keyword);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_peneliti', $data);
			$this->load->view('templates_admin/footer');						
	
		}

	}
?>