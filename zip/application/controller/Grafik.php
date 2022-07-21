<?php

class Grafik extends CI_Controller
{
    function index()
    {
        $data['hasil'] = $this->grafik_m->Jum_buku_jurusan();
        $this->load->view('grafik/grafik', $data);
    }
}
