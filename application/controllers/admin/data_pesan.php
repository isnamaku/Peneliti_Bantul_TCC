<?php


class Data_pesan extends CI_Controller
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
			
			$data['pesan'] = $this->model_pesan->tampil_pesan();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/data_pesan', $data);	
			$this->load->view('templates_admin/footer');
		}


		public function hapus($id_pesan)
		{
			$where = array('id_pesan' => $id_pesan);
			$this->model_pesan->hapus_data($where, 'tb_pesan');
			redirect('admin/data_pesan/index');
		}

	}
?>