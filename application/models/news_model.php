<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Author : Lich Truong
* Email : lichcse@gmail.com
*/
class News_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_news(){
        return array('First_Name' => 'Lich', 'Last_Name' => 'Truong');
    }
}
?>