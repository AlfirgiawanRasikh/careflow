<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model
{
    public function get_billing_summary()
    {
        return $this->db
            ->query('EXEC GetBillingSummary')
            ->row();
    }

    public function get_appointment_summary()
    {
        return $this->db
            ->select('status, COUNT(*) AS total')
            ->from('appointments')
            ->group_by('status')
            ->order_by('total', 'DESC')
            ->get()
            ->result();
    }
}
