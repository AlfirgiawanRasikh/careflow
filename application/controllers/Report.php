<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function index()
    {
        $this->load->model('Report_model');

        $data = [
            'title' => 'Reports | CareFlow',
            'billing_summary' => $this->Report_model->get_billing_summary(),
            'appointment_summary' => $this->Report_model->get_appointment_summary()
        ];

        $this->load->view('reports', $data);
    }
}
