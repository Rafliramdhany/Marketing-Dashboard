<?php defined('BASEPATH') or exit('No direct script access allowed');

class Reports_m extends CI_Model
{
    public $table = 'data_request';
    public $status = 'status';

    function total_rows()
    {
        $this->db->where($this->status, 'completed');
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
