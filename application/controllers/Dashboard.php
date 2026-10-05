<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->model('Patient_model');
        $this->load->model('Appointment_model');

        $data = [
            'title' => 'Dashboard | CareFlow',
            'total_patients' => $this->Patient_model->count_all(),
            'upcoming_count' => $this->Appointment_model->count_upcoming(),
            'upcoming_appointments' => $this->Appointment_model->get_upcoming(5)
        ];

        $this->load->view('dashboard', $data);
    }
}
