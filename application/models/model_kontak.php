<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_kontak extends CI_Model
{
    function insertKontak($data)
    {
        $this->db->insert('kontak', $data);
    }
}
?>