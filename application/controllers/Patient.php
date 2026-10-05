<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller
{
    public function index()
    {
        $this->load->model('Patient_model');

        $data = [
            'title' => 'Patients | CareFlow',
            'patients' => $this->Patient_model->get_all(),
            'total_patients' => $this->Patient_model->count_all()
        ];

        $this->load->view('patients', $data);
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->load->model('Patient_model');

        $this->form_validation->set_rules(
            'medical_record_number',
            'Medical Record Number',
            'required|trim|max_length[20]'
        );

        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim|max_length[100]'
        );

        $this->form_validation->set_rules(
            'gender',
            'Gender',
            'required'
        );

        $this->form_validation->set_rules(
            'birth_date',
            'Birth Date',
            'required'
        );

        $this->form_validation->set_rules(
            'phone',
            'Phone',
            'trim|max_length[20]'
        );

        $this->form_validation->set_rules(
            'address',
            'Address',
            'trim|max_length[255]'
        );

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Add Patient | CareFlow';

            $this->load->view('patient_create', $data);
            return;
        }

        $patient = [
            'medical_record_number' => $this->input->post('medical_record_number', TRUE),
            'name' => $this->input->post('name', TRUE),
            'gender' => $this->input->post('gender', TRUE),
            'birth_date' => $this->input->post('birth_date', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'address' => $this->input->post('address', TRUE)
        ];

        $this->Patient_model->create($patient);

        redirect('patient');
    }

    public function edit($id)
    {
        $this->load->model('Patient_model');

        $patient = $this->Patient_model->get_by_id($id);

        if (!$patient) {
            show_404();
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules(
            'medical_record_number',
            'Medical Record Number',
            'required|trim|max_length[20]'
        );

        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim|max_length[100]'
        );

        $this->form_validation->set_rules(
            'gender',
            'Gender',
            'required'
        );

        $this->form_validation->set_rules(
            'birth_date',
            'Birth Date',
            'required'
        );

        $this->form_validation->set_rules(
            'phone',
            'Phone',
            'trim|max_length[20]'
        );

        $this->form_validation->set_rules(
            'address',
            'Address',
            'trim|max_length[255]'
        );

        if ($this->form_validation->run() === FALSE) {

            $data = [
                'title' => 'Edit Patient | CareFlow',
                'patient' => $patient
            ];

            $this->load->view('patient_edit', $data);
            return;
        }

        $data = [
            'medical_record_number' => $this->input->post('medical_record_number', TRUE),
            'name' => $this->input->post('name', TRUE),
            'gender' => $this->input->post('gender', TRUE),
            'birth_date' => $this->input->post('birth_date', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'address' => $this->input->post('address', TRUE)
        ];

        $this->Patient_model->update($id, $data);

        redirect('patient');
    }

    public function delete($id)
    {
        $this->load->model('Patient_model');

        $patient = $this->Patient_model->get_by_id($id);

        if (!$patient) {
            show_404();
        }

        $this->Patient_model->delete($id);

        redirect('patient');
    }
}
