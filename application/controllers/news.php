<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Author : Lich Truong
* Email : lichcse@gmail.com
*/
class News extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->model('news_model');
		$data['info'] = $this->news_model->get_news();

		$this->load->model('new_model_2');
		$data['info_2'] = $this->new_model_2->get_news();

		$this->load->model('test/general/test_model');
		$data['info_3'] = $this->test_model->get_news();

		$this->load->view('templates/header');
		$this->load->view('news', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer');
	}
}
?>