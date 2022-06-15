<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->load->view('login');
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'user_id' => $row->user_id,
                    'level' => $row->level,
                );
                $this->session->set_userdata($params);
                helper_log("login","berhasil login");
                ?>
                    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">  
                    <script src="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js" ></script>
                    <body></body>
                    <script>
                        Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Selamat Login anda berhasil!'
                        }).then((result)=>{
                            window.location='<?=site_url('dashboard') ?>';

                        })
                    </script>

                <?php
            } else {
                ?>
                    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">  
                    <script src="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js" ></script>
                    <body></body>
                    <script>
                        Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Periksa Kembali Username dan Password anda !'
                        }).then((result)=>{
                            window.location='<?=site_url('auth/login') ?>';
                        })
                    </script>

                <?php
            }
        }
    }
    public function logout()
    {
        $params = array('user_id', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
