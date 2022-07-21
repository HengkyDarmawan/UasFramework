<?php
class Buku_m extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('data_buku')->result_array();
    }
    public function tambah_data()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'pencipta' => $this->input->post('pencipta', true),
            'tglterbit' => $this->input->post('tglterbit', true)
        ];
        $this->db->insert('data_buku', $data);
    }
    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_buku');
    }
    public function getDataById($id)
    {
        return $this->db->get_where('data_buku', ['id' => $id])->row_array();
    }
    public function update_data()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'pencipta' => $this->input->post('pencipta', true),
            'tglterbit' => $this->input->post('tglterbit', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_buku', $data);
    }
}
