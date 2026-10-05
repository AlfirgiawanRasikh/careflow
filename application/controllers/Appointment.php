<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller
{
    public function index()
    {
        $this->load->model('Appointment_model');

        $data = [
            'title' => 'Appointments | CareFlow',
            'appointments' => $this->Appointment_model->get_all()
        ];

        $this->load->view('appointments', $data);
    }
}
