<?php

	/**
	 *
	 */
	class Kategorip extends CI_Controller
	{
		public function kuliner()
		{
			$data['kuliner'] = $this->model_kategorip->data_kuliner()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('vpenelitian/kuliner', $data);
			$this->load->view('templates/footer');
		}

		public function kriya()
		{
			$data['kriya'] = $this->model_kategorip->data_kriya()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('vpenelitian/kriya', $data);
			$this->load->view('templates/footer');
		}

        public function senbud()
		{
			$data['senbud'] = $this->model_kategorip->data_senbud()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('vpenelitian/senbud', $data);
			$this->load->view('templates/footer');
		}

		public function searchsenbud(){
			$keyword = $this->input->post('keyword');
			$data['senbud']=$this->model_kategorip->get_keywordsenbud($keyword);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('vpenelitian/senbud', $data);
			$this->load->view('templates/footer');
		}
		public function searchkul(){
			$keyword = $this->input->post('keyword');
			$data['kuliner']=$this->model_kategorip->get_keywordkul($keyword);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('vpenelitian/kuliner', $data);
			$this->load->view('templates/footer');
		}
		public function searchkriya(){
			$keyword = $this->input->post('keyword');
			$data['kriya']=$this->model_kategorip->get_keywordkriya($keyword);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('vpenelitian/kriya', $data);
			$this->load->view('templates/footer');
		}
	}
?>
