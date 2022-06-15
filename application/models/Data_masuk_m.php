<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_masuk_m extends CI_Model
{
    public function get($id = null)
    {
        return $this->db->get('form_tamu');
        $this->db->from('form_tamu');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get("SELECT * FROM form_tamu  ORDER BY tanggal DESC");
        return $query;
    }
    public function data()
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='1'");
        return $query;
    }
    public function ubah($data, $where)
    {
        return $this->db->update('form_tamu', $data, $where);
    }
    public function del($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('form_tamu');
    }
    public function detail_data($id = null)
    {
        $query = $this->db->get_where('form_tamu', array('id' => $id))->row();
        return $query;
    }
    public function tampil_tgl($tgl1, $tgl2)
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'");
        return $query->result();
    }
    public function tampil_tgl1($tgl1, $tgl2)
    {
        $level = $this->fungsi->user_login()->level;
        $query = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='1' AND tanggal BETWEEN '$tgl1' AND '$tgl2'", "SELECT * FROM form_tamu WHERE status_kasek='$1'");
        return $query->result();
    }
    public function alasan($data, $where)
    {
        return $this->db->update('form_tamu', $data, $where);
    }
}
