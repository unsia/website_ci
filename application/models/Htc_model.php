<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Htc_model extends CI_Model
{
    public function getTotalOnline()
    {
        $query = "SELECT *, COUNT( * ) AS total FROM form_htc WHERE kehadiran = 'Offline'";

        return $this->db->query($query);
    }

    public function getDataHtc()
    {
        $this->db->select('*');
          $this->db->from('form_htc');

          return $this->db->get();
    }
}
