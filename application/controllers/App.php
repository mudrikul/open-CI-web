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

    public function login()
    {
        $data = [
            'title' => 'Login',
            'content' => 'pages/login_page'
        ];
        $this->load->view('theme/template', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar Akun',
            'content' => 'pages/register_page'
        ];
        $this->load->view('theme/template', $data);
    }
}

/* End of file App.php */
