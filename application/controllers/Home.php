<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $content = $this->load->view('home', array(), TRUE);
        $this->template->load(array(), $content);
    }
}
