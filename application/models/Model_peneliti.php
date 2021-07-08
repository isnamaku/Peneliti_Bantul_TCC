<?php

	class Model_peneliti extends CI_Model
	{
		private $dbUsers;
        
        public function __construct()
        {
            $this->dbUsers = $this->load->database('data_peneliti_satu', TRUE);
        }

		public function hitungJumlahAsset()
		{   
			$query = $this->db->get('tb_peneliti');
			if($query->num_rows()>0)
			{
			return $query->num_rows();
			}
			else
			{
			return 0;
			}
		}
		
		public function hitungJumlahUsr()
		{   
			$query = $this->dbUsers->get('tb_user');
			if($query->num_rows()>0)
			{
			return $query->num_rows();
			}
			else
			{
			return 0;
			}
		}

		public function hitungPenelitiEks(){
			$this->db->select('*');
			$this->db->from('tb_peneliti');
			$this->db->like('kategori','Eksternal BAPPEDA','both');

			return $this->db->get()->num_rows();
		}
		
		public function hitungPenelitiInt(){
			$this->db->select('*');
			$this->db->from('tb_peneliti');
			$this->db->like('kategori','Internal BAPPEDA','both');

			return $this->db->get()->num_rows();
		}

		public function tampil_data()
		{
			return $this->db->get('tb_peneliti')->result();
		}

		public function get_category_keyword($keyword){
			$this->db->select('*');
			$this->db->from('tb_peneliti');
			$this->db->like('nama_peneliti',$keyword);
			return $this->db->get()->result();

		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('tb_peneliti');
			$this->db->or_like('nama_peneliti',$keyword);
			$this->db->or_like('kategori',$keyword);
			$this->db->or_like('alamat',$keyword);
			$this->db->or_like('jenjangpeneliti',$keyword);
			$this->db->or_like('alamat_ins',$keyword);
			$this->db->or_like('email',$keyword);
			$this->db->or_like('list_research',$keyword);
			
			//.$this->db->like_or('kategori', $keyword);
			return $this->db->get()->result();

		}

		public function tambah_peneliti($data,$table)
		{
			$this->db->insert($table, $data);
		}

		public function edit_peneliti($where,$table)
		{
			return $this->db->get_where($table, $where);
		}

		public function update_data($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);			
		}

		public function find($id)
		{
			 $result = $this->db->where('id_peneliti', $id)
								->limit(1)
								->get('tb_peneliti');
			 if($result->num_rows() > 0 )
			 {
			 	return $result->row();
			 }
			 else
			 {
			 	return array();
			 }
		}

		public function detail_peneliti($id_peneliti)
		{
			$result = $this->db->where('id_peneliti', $id_peneliti)->get('tb_peneliti');
			if ($result->num_rows()>0) 
			{
				return $result->result();
			}
			else
			{
				return false;
			}
		}
	}
