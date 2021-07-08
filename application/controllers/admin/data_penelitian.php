<?php

	class Data_penelitian extends CI_Controller
	{
		
		public function index()
		{
			$data['penelitian'] = $this->model_penelitian->tampil_data();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_penelitian', $data);	
			$this->load->view('templates_admin/footer');
		}


		public function tambah_aksi()
		{
			$nama_penelitian 	= $this->input->post('nama_penelitian');
			$nama_peneliti 		= $this->input->post('nama_peneliti');
			$kategori	 		= $this->input->post('kategori');
            $tahun	 			= $this->input->post('tahun');
		
			$data = array
			(
				'nama_penelitian'	=> $nama_penelitian,
				'nama_peneliti'	 	=> $nama_peneliti,
				'kategori'			=> $kategori,
				'tahun'	 			=> $tahun
				
			);

			$this->model_penelitian->tambah_penelitian($data, 'tb_penelitian');
			redirect('admin/data_penelitian/index');
		}

		public function edit($id)
		{
			$where = array('id_penelitian' => $id);
			$data['penelitian'] = $this->model_penelitian->edit_penelitian($where, 'tb_penelitian')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/edit_penelitian', $data);
			$this->load->view('templates_admin/footer');
		}

		public function update()
		{
			$id 				= $this->input->post('id_penelitian');
			$nama_penelitian 	= $this->input->post('nama_penelitian');
			$nama_peneliti 		= $this->input->post('nama_peneliti');
			$kategori	 		= $this->input->post('kategori');
            $tahun	 			= $this->input->post('tahun');


			$data = array
			(
				'nama_penelitian'	=> $nama_penelitian,
				'nama_peneliti'	 	=> $nama_peneliti,
				'kategori'			=> $kategori,
				'tahun'	 			=> $tahun
			);

			$where = array('id_penelitian' => $id);

			$this->model_penelitian->update_penelitian($where,$data,'tb_penelitian');
			redirect('admin/data_penelitian/index');
		}

		public function hapus($id_penelitian)
		{
			$where = array('id_penelitian' => $id_penelitian);
			$this->model_penelitian->hapus_data($where, 'tb_penelitian');
			redirect('admin/data_penelitian/index');
		}

		public function detail($id_penelitian)
		{
			$data['penelitian'] = $this->model_penelitian->detail_penelitian($id_penelitian);
				$this->load->view('templates_admin/header');
				$this->load->view('templates_admin/sidebar');
				$this->load->view('templates_admin/topbar');
				$this->load->view('admin/detail_penelitian', $data);
				$this->load->view('templates_admin/footer');						
		}

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['penelitian']=$this->model_penelitian->get_keyword($keyword);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_penelitian', $data);
			$this->load->view('templates_admin/footer');						
	
		}

	}
?>