<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller
{
    public function index()
    {
        $this->load->model('Billing_model');

        $data = [
            'title' => 'Billing | CareFlow',
            'billings' => $this->Billing_model->get_all(),
            'unpaid_count' => $this->Billing_model->count_unpaid(),
            'total_paid' => $this->Billing_model->total_paid()
        ];

        $this->load->view('billing', $data);
    }
}
