<?php
class Fungsi
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function user_login()
    {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }
    public function count_datamasuk()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->data()->num_rows();
    }
    public function count_persetujuan()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->persetujuan()->num_rows();
    }
    public function count_diizinkan()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->diizinkan()->num_rows();
    }
    public function count_ditolak()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->ditolak()->num_rows();
    }

    public function count_datamasuk_kasek()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->tampil_data()->num_rows();
    }
    public function count_persetujuan_kasek()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->persetujuan_kasek()->num_rows();
    }
    public function count_diizinkan_kasek()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->diizinkan_kasek()->num_rows();
    }
    public function count_ditolak_kasek()
    {
        $this->ci->load->model('form_m');
        return $this->ci->form_m->ditolak_kasek()->num_rows();
    }
}
