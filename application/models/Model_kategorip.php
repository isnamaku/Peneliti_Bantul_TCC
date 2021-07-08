<?php

	/**
	 * 
	 */
	class Model_kategorip extends CI_Model
	{

		public function data_kuliner()
		{
			return $this->db->get_where("tb_penelitian", array('kategori' => 'Kuliner'));
        }

		public function data_kriya()
		{
			return $this->db->get_where("tb_penelitian", array('kategori' => 'Kriya'));
		}
		
        public function data_senbud()
		{
			return $this->db->get_where("tb_penelitian", array('kategori' => 'Seni Budaya'));
		}
		
		public function get_keywordkriya($keyword){
			$this->db->select('*');
			$this->db->from('tb_penelitian');
			$this->db->like('nama_penelitian',$keyword);
			$this->db->or_like('nama_peneliti',$keyword);
			$this->db->or_like('tahun',$keyword);
			return $this->db->get()->result();

		}
		public function get_keywordkul($keyword){
			$this->db->select('*');
			$this->db->from('tb_penelitian');
			$this->db->like('nama_penelitian',$keyword);
			$this->db->or_like('nama_peneliti',$keyword);
			$this->db->or_like('tahun',$keyword);
			return $this->db->get()->result();

		}
		public function get_keywordsenbud($keyword){
			$this->db->select('*');
			$this->db->from('tb_penelitian');
			$this->db->like('nama_penelitian',$keyword);
			$this->db->or_like('nama_peneliti',$keyword);
			$this->db->or_like('tahun',$keyword);
			return $this->db->get()->result();

		}
	}

?>