<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get('patients')
            ->result();
    }

    public function count_all()
    {
        return $this->db
            ->count_all('patients');
    }

    public function create($data)
    {
        $sql = "
            EXEC CreatePatient
                @MedicalRecordNumber = ?,
                @Name = ?,
                @Gender = ?,
                @BirthDate = ?,
                @Phone = ?,
                @Address = ?
        ";

        return $this->db->query($sql, [
            $data['medical_record_number'],
            $data['name'],
            $data['gender'],
            $data['birth_date'],
            $data['phone'],
            $data['address']
        ]);
    }

    public function get_by_id($id)
    {
        return $this->db
            ->where('id', $id)
            ->get('patients')
            ->row();
    }

    public function update($id, $data)
    {
        $sql = "
            EXEC UpdatePatient
                @PatientId = ?,
                @MedicalRecordNumber = ?,
                @Name = ?,
                @Gender = ?,
                @BirthDate = ?,
                @Phone = ?,
                @Address = ?
        ";

        return $this->db->query($sql, [
            $id,
            $data['medical_record_number'],
            $data['name'],
            $data['gender'],
            $data['birth_date'],
            $data['phone'],
            $data['address']
        ]);
    }

    public function delete($id)
    {
        $sql = "
            EXEC DeletePatient
                @PatientId = ?
        ";

        return $this->db->query($sql, [$id]);
    }
}
