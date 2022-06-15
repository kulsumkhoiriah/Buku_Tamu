<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['data_masuk_m', 'user_m', 'form_m']);
    }
    public function index()
    {
        $data['data_masuk'] = $this->data_masuk_m->get()->result();
        $data['data_masuk_kadev'] = $this->data_masuk_m->data()->result();
        $this->template->load('template', 'Data_Tamu/Data_Masuk', $data);
    }
    function ubah()
    {
        $id = $this->input->post('id');
        $nama_visitor = $this->input->post('nama_visitor');
        $status = $this->input->post('status');
        $status_kasek = $this->input->post('status_kasek');
        $data = array(
            'id' => $id,
            'nama_visitor'  => $nama_visitor,
            'status' => $status,
            'status_kasek' => $status_kasek,
        );
        $where = array(
            'id' => $id
        );
        $this->data_masuk_m->ubah($data, $where, 'form_tamu');
        $this->session->set_flashdata('success', 'Data Berhasil di simpan');
        redirect('Data_masuk');
    }
    function ubah_kasek()
    {
        $id = $this->input->post('id');
        $nama_visitor = $this->input->post('nama_visitor');
        $status_kasek = $this->input->post('status_kasek');
        $data = array(
            'id' => $id,
            'nama_visitor'  => $nama_visitor,
            'status_kasek' => $status_kasek,
        );
        $where = array(
            'id' => $id
        );
        $this->data_masuk_m->ubah($data, $where, 'form_tamu');
        $this->session->set_flashdata('success', 'Data Berhasil di simpan');
        redirect('Data_masuk');
    }
    public function del($id)
    {

        $this->data_masuk_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di hapus');
            helper_log("delete", "berhasil menghapus");
            redirect('Data_masuk');
        }
    }
    public function detail($id)
    {
        $this->load->model('data_masuk_m');
        $detail =   $this->data_masuk_m->detail_data($id);
        $data['detail'] = $detail;
        $this->template->load('template', 'Data_Tamu/detail_datamasuk', $data);
    }
    public function data_persetujuan()

    {
        $this->template->load('template', 'data_persetujuan');
    }
    public function disetujui($id)
    {
        $sql = "UPDATE form_tamu SET status='1' WHERE id=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('success', 'Data Berhasil di simpan');
        redirect('Data_masuk/data_persetujuan');
    }

    public function ditolak($id)
    {
        $sql = "UPDATE form_tamu SET status='2' WHERE id=$id";
        $this->db->query($sql);
    }
    public function disetujui_kasek($id)
    {
        $sql = "UPDATE form_tamu SET status_kasek='1' WHERE id=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('success', 'Data Berhasil di simpan');
        redirect('Data_masuk/data_persetujuan');
    }

    public function ditolak_kasek($id)
    {
        $sql = "UPDATE form_tamu SET status_kasek='2' WHERE id=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('success', 'Data Berhasil di simpan');
        redirect('Data_masuk/data_persetujuan');
    }

    function pdf()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Data Tamu';

        // filename dari pdf ketika didownload
        $file_pdf = 'Data_tamu';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "Landscape";
        $data['data_masuk'] = $this->data_masuk_m->get()->result();
        $data['data_masuk_kadev'] = $this->data_masuk_m->data()->result();


        // run dompdf

        $tgl1 = $this->input->post('tgl_a');
        $tgl2 = $this->input->post('tgl_b');
        $level = $this->fungsi->user_login()->level;
        $data['data_masuk'] = $this->data_masuk_m->tampil_tgl($tgl1, $tgl2);
        $data['data_masuk_kadev'] = $this->data_masuk_m->tampil_tgl1($tgl1, $tgl2, $level);
        $html = $this->load->view('Data_tamu/cetak_pdf', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function print()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Data Tamu';

        // filename dari pdf ketika didownload
        $file_pdf = 'Data_tamu';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "Landscape";
        $data['data_masuk'] = $this->data_masuk_m->get()->result();
        $data['data_masuk_kadev'] = $this->data_masuk_m->data()->result();
        $html = $this->load->view('Data_tamu/laporan_pdf', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
    public function alasan()
    {
        $id = $this->input->post('id');
        $alasan = $this->input->post('alasan');
        $status = $this->input->post('status');
        $status_kasek = $this->input->post('status_kasek');
        $data = array(
            'id' => $id,
            'alasan' => $alasan,
            'status' => $status,
            'status_kasek' => $status_kasek,
        );
        $where = array(
            'id' => $id
        );
        $this->form_m->add_scan($data, $where, 'form_tamu');
?>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">
        <script src="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js"></script>

        <body></body>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Berhasil Tersimpan!'
            }).then((result) => {
                window.location = '<?= site_url('Data_masuk/data_persetujuan') ?>';
            })
        </script>

<?php

    }
}
