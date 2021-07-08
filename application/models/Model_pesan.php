<?php

	class Model_pesan extends CI_Model
	{

		public function tampil_pesan()
		{
			return $this->db->get('tb_pesan')->result();
		}

		public function tambah_pesan($data,$table)
		{
			$this->db->insert($table, $data);
		}

		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);			
		}

	}
?>