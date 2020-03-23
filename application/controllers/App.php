<?php


defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'open Ci web',
            'content' => 'pages/home'
        ];
        $this->load->view('theme/template', $data);
    }
}

/* End of file App.php */
