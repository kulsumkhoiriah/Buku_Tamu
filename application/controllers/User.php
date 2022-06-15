<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        check_not_login();
        $this->load->model('user_m');
        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi Password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan Password')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah  di pakai, silahkan ganti');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', ' Data Berhasil di simpan');
                redirect('user');
            }
            $this->session->set_flashdata('error', 'Data Tidak ditambahkan');
        }
    }
    public function edit($id)
    {

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
            );
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
            );
        }
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah  di pakai, silahkan ganti');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($this->form_validation->run() == false) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script>
                alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('user') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
?>
                <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">
                <script src="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js"></script>

                <body></body>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Selamat Data Berhasil terimpan!'
                    }).then((result) => {
                        window.location = '<?= site_url('dashboard') ?>';

                    })
                </script>

            <?php
            }
        }
    }
    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah  di pakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function del($id)
    {
        $this->user_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil di hapus');</script>";
        }
        echo "<script>window.location='" . site_url('user') . "';</script>";
    }
    public function edit_profile($id)
    {

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
            );
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
            );
        }
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah  di pakai, silahkan ganti');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($this->form_validation->run() == false) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit_profile', $data);
            } else {
                echo "<script>
                alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('dashboard') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
            ?>
                <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">
                <script src="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js"></script>

                <body></body>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Selamat Data Berhasil tersimpan!'
                    }).then((result) => {
                        window.location = '<?= site_url('dashboard') ?>';

                    })
                </script>

<?php
            }
        }
    }
    public function detail()
    {
        $user_id = $this->fungsi->user_login()->user_id;
        $where = array('user_id' => $user_id);
        $data['user'] = $this->user_m->edit_data($where, 'user')->result();
        $this->template->load('template', 'user/detail', $data);
    }
}
