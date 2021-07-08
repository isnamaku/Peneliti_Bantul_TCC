<?php

	class Model_users extends CI_Model
	{
		private $dbUsers;
        
        public function __construct()
        {
            $this->dbUsers = $this->load->database('data_peneliti_satu', TRUE);
        }

		public function tampil_data()
		{
			return $this->dbUsers->get('tb_user')->result();
		}
		
		public function tambah_users($data,$table)
		{
			$this->dbUsers->insert($table, $data);
		}

		public function edit_users($where,$table)
		{
			return $this->dbUsers->get_where($table, $where);
		}

		public function update_data($where,$data,$table)
		{
			$this->dbUsers->where($where);
			$this->dbUsers->update($table,$data);
		}

		public function hapus_data($where,$table)
		{
			$this->dbUsers->where($where);
			$this->dbUsers->delete($table);			
		}

		public function find($id)
		{
			 $result = $this->dbUsers->where('id', $id)
								->limit(1)
								->get('tb_user');
			 if($result->num_rows() > 0 )
			 {
			 	return $result->row();
			 }
			 else
			 {
			 	return array();
			 }
		}

		public function get_keyword($keyword){
			$this->dbUsers->select('*');
			$this->dbUsers->from('tb_user');
			$this->dbUsers->like('nama',$keyword);
			$this->dbUsers->or_like('email',$keyword);
			$this->dbUsers->or_like('nohp',$keyword);
			$this->dbUsers->or_like('password',$keyword);
			$this->dbUsers->or_like('role_id',$keyword);
			
			//.$this->db->like_or('kategori', $keyword);
			return $this->dbUsers->get()->result();

		}
	}
