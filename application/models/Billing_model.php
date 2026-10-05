<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Billing_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->select('
                billings.id,
                billings.invoice_number,
                billings.amount,
                billings.payment_status,
                billings.payment_method,
                billings.paid_at,
                patients.name AS patient_name,
                patients.medical_record_number,
                treatments.name AS treatment_name
            ')
            ->from('billings')
            ->join('patients', 'patients.id = billings.patient_id')
            ->join('treatments', 'treatments.id = billings.treatment_id')
            ->order_by('billings.id', 'DESC')
            ->get()
            ->result();
    }

    public function count_unpaid()
    {
        return $this->db
            ->where('payment_status', 'Unpaid')
            ->count_all_results('billings');
    }

    public function total_paid()
    {
        $result = $this->db
            ->select_sum('amount')
            ->where('payment_status', 'Paid')
            ->get('billings')
            ->row();

        return $result->amount ?? 0;
    }
}
