<?php

	/**
	 * 
	 */
	class Model_auth extends CI_Model
	{
		private $dbUsers;
        
        public function __construct()
        {
            $this->dbUsers = $this->load->database('data_peneliti_satu', TRUE);
        }
		
		public function cek_login()
		{
			$username = set_value('username');
			$password = set_value('password');

			$result	  = $this->dbUsers->where('username', $username)
								 -> where('password', $password)
								 ->limit(1)
								 ->get('tb_user');
			if ($result->num_rows() > 0)
			{
				return $result->row();
			}
			else
			{
				return array();
			}
		}
	}

?>