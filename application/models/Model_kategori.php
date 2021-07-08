<?php

	/**
	 * 
	 */
	class Model_kategori extends CI_Model
	{

		public function data_internal()
		{
			return $this->db->get_where("tb_peneliti", array('kategori' => 'Internal BAPPEDA'));
		}

		public function data_eksternal()
		{
			return $this->db->get_where("tb_peneliti", array('kategori' => 'EKSTERNAL BAPPEDA'));
		}
		
	}

?>