<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment extends CI_Controller
{
    public function index()
    {
        $this->load->model('Treatment_model');

        $data = [
            'title' => 'Treatments | CareFlow',
            'treatments' => $this->Treatment_model->get_all(),
            'active_count' => $this->Treatment_model->count_active()
        ];

        $this->load->view('treatments', $data);
    }
}
