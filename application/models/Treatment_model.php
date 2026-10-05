<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get('treatments')
            ->result();
    }

    public function count_active()
    {
        return $this->db
            ->where('status', 'Active')
            ->count_all_results('treatments');
    }
}
