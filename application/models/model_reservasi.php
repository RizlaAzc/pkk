<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_reservasi extends CI_Model
{
    function insertReservasi($data)
    {
        $this->db->insert('reservasi', $data);
    }
}
?>