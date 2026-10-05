<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Settings | CareFlow',
            'app_name' => 'CareFlow',
            'app_version' => '1.0.0',
            'environment' => 'Local Development',
            'database' => $this->db->conn_id ? 'Connected' : 'Disconnected'
        ];

        $this->load->view('settings', $data);
    }
}
