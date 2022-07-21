<?php
class Grafik_m extends CI_Model
{
    function Jum_buku_jurusan()
    {
        $this->db->group_by('jenbuku');
        $this->db->select('jenbuku');
        $this->db->select("count(*) as total");
        return $this->db->from('data_buku_chart')
            ->get()
            ->result();
    }
}
