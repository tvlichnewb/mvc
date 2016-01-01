<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Author : Lich Truong
* Email : lichcse@gmail.com
*/
class New_Model_2 extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_news(){
        return array('First_Name' => 'Lich - 2', 'Last_Name' => 'Truong - 2');
    }
}
?>