<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_m extends CI_Model
{

    public function tampil_data($id = null)
    {
        return $this->db->get('form_tamu');
        $this->db->from('form_tamu');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->query("SELECT * FROM form_tamu ORDER BY tanggal Desc");
        return $query;
    }
    public function data()
    {

        $query = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='1'");
        return $query;
    }
    function persetujuan()
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE status='0' and status_kasek='1'");
        return $query;
    }
    function diizinkan()
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE status='1'and status_kasek='1'");
        return $query;
    }
    function ditolak()
    {
        $query = $this->db->query("SELECT *  FROM form_tamu WHERE status='2'");
        return $query;
    }
    function persetujuan_kasek()
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='0'");
        return $query;
    }
    function diizinkan_kasek()
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='1'");
        return $query;
    }
    function ditolak_kasek()
    {
        $query = $this->db->query("SELECT *  FROM form_tamu WHERE status_kasek='2'");
        return $query;
    }
    function saverecords($data)
    {
        $this->db->insert('form_tamu', $data);
        return true;
    }
    public function ambil_data($keyword, $keyword2)
    {
        $query = $this->db->query("SELECT * FROM form_tamu WHERE nama_visitor LIKE '%$keyword%' AND tanggal LIKE '%$keyword2%'");
        return $query->result();
    }
    public function graph()
    {
        $data = $this->db->query("SELECT tanggal,status, count(*) as status FROM form_tamu  WHERE status='1' group by tanggal");
        return $data->result();
    }
    public function grafik()
    {
        $data = $this->db->query("SELECT tanggal,status_kasek, count(*) as status_kasek FROM form_tamu  WHERE status_kasek='1' group by tanggal");
        return $data->result();
    }
    public function add_scan($data, $where)
    {
        return $this->db->update('form_tamu', $data, $where);
    }
}
