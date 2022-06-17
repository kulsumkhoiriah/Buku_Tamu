<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['form_m', 'user_m']);
    }
    public function index()
    {
        $data['tampil_data'] = $this->form_m->tampil_data()->result();
        $this->template->load('template', 'scan_in', $data);
    }
    function ubah()
    {
        $id = $this->input->post('id');
        $time_in_aktual = $this->input->post('time_in_aktual');
        $data = array(
            'id' => $id,
            'time_in_aktual' => $time_in_aktual,
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
                text: 'Selamat Login anda berhasil!'
            }).then((result) => {
                window.location = '<?= site_url('scan') ?>';
            })
        </script>

    <?php

    }
    function ubah_out()
    {
        $id = $this->input->post('id');
        $time_out_aktual = $this->input->post('time_out_aktual');
        $data = array(
            'id' => $id,
            'time_out_aktual' => $time_out_aktual,
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
                text: 'Selamat Login anda berhasil!'
            }).then((result) => {
                window.location = '<?= site_url('scan') ?>';
            })
        </script>

<?php

    }
    public function scan_out()
    {
        $data['tampil_data'] = $this->form_m->tampil_data()->result();
        $this->template->load('template', 'scan_out', $data);
    }
}
