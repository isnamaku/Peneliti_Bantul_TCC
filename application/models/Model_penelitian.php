<?php

	class Model_penelitian extends CI_Model
	{
		
		public function tampil_data()
		{
			return $this->db->get('tb_penelitian')->result();
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('tb_penelitian');
			$this->db->like('nama_penelitian',$keyword);
			$this->db->or_like('nama_peneliti',$keyword);
			$this->db->or_like('kategori',$keyword);
			$this->db->or_like('tahun',$keyword);
			
			return $this->db->get()->result();

		}

		public function tambah_penelitian($data,$table)
		{
			$this->db->insert($table, $data);
		}

		public function edit_penelitian($where,$table)
		{
			return $this->db->get_where($table, $where);
		}

		public function update_penelitian($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}		

		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);			
		}

		public function find($id_penelitian)
		{
			 $result = $this->db->where('id_penelitian', $id_penelitian)
								->limit(1)
								->get('tb_penelitian');
			 if($result->num_rows() > 0 )
			 {
			 	return $result->row();
			 }
			 else
			 {
			 	return array();
			 }
		}

		public function detail_penelitian($id_penelitian)
		{
			$result = $this->db->where('id_penelitian', $id_penelitian)->get('tb_penelitian');
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
