<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Author : Lich Truong
* Email : lichcse@gmail.com
*/
class Test_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_news(){
    	$this->load->model('news_model');
        return $this->news_model->get_news();
    }
}
?>