<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->select('
                appointments.id,
                appointments.appointment_date,
                appointments.appointment_time,
                appointments.treatment_name,
                appointments.status,
                appointments.notes,
                patients.medical_record_number,
                patients.name AS patient_name,
                patients.phone
            ')
            ->from('appointments')
            ->join(
                'patients',
                'patients.id = appointments.patient_id',
                'inner'
            )
            ->order_by('appointments.appointment_date', 'ASC')
            ->order_by('appointments.appointment_time', 'ASC')
            ->get()
            ->result();
    }

    public function get_upcoming($limit = 5)
    {
        return $this->db
            ->select('
                appointments.id,
                appointments.appointment_date,
                appointments.appointment_time,
                appointments.treatment_name,
                appointments.status,
                patients.name AS patient_name
            ')
            ->from('appointments')
            ->join(
                'patients',
                'patients.id = appointments.patient_id',
                'inner'
            )
            ->where(
                'appointments.appointment_date >= CAST(GETDATE() AS DATE)',
                null,
                false
            )
            ->order_by('appointments.appointment_date', 'ASC')
            ->order_by('appointments.appointment_time', 'ASC')
            ->limit($limit)
            ->get()
            ->result();
    }

    public function count_upcoming()
    {
        return $this->db
            ->from('appointments')
            ->where(
                'appointment_date >= CAST(GETDATE() AS DATE)',
                null,
                false
            )
            ->count_all_results();
    }
}
