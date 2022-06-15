<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_tamu extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('form_m');
    }
    public function index()
    {
        $this->load->view('form');
    }
    public function savedata()
    {
        /*Check submit button */
        if ($this->input->post('save')) {
            $data['tanggal'] = $this->input->post('tanggal');
            $data['nama_visitor'] = $this->input->post('nama_visitor');
            $data['nomor_telepon'] = $this->input->post('nomor_telepon');
            $data['email'] = $this->input->post('email');
            $data['unit_kerja'] = $this->input->post('unit_kerja');
            $data['pendamping'] = $this->input->post('pendamping');
            $data['tujuan'] = $this->input->post('tujuan');
            $data['signed'] = $_POST['signed'];
            $folderPath = "./assets/tanda_tangan/";
            if (empty($_POST['signed'])) {
                echo "Kosong";
            } else {
                $image_parts = explode(";base64,", $_POST['signed']);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = $folderPath . uniqid() . '.' . $image_type;
                file_put_contents($file, $image_base64);
            }
            $data['keterangan'] = $this->input->post('keterangan');
            $data['time_in'] = $this->input->post('time_in');
            $data['time_out'] = $this->input->post('time_out');
            $data['foto'] = $_POST['foto'];
            $destinationPath = "./assets/foto/";
            $web_capture_part = explode(";base64,", $_POST['foto']);
            $image_type_aux = explode("foto/", $web_capture_part[0]);
            $image_type = $image_type_aux[2];
            $image_base = base64_decode($web_capture_part[1]);
            $myimgName = uniqid() . '.png';
            $file = $destinationPath . $myimgName;
            file_put_contents($file, $image_base);

            $nik = $_FILES['nik'];
            if ($nik = '') {
            } else {
                $config['upload_path'] = './assets/tanda_pengenal/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['file_name'] = 'ktp-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('nik')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $nik = $this->upload->data('file_name');
                }
            }
            $data['nik'] = $nik;
            $response = $this->form_m->saverecords($data);
            if ($response == true) {
                $this->session->set_flashdata('success', 'Data Berhasil di simpan');
                redirect('form_tamu/detail_form');
            } else {
                $this->session->set_flashdata('error', 'Data tidak tersimpan');
            }
        }
    }
    public function search()
    {
        $keyword = $this->input->get('keyword');
        $keyword2 = $this->input->get('keyword2');
        $detail =   $this->form_m->ambil_data($keyword, $keyword2);
        $data = array(
            'keyword'    => $keyword,
            'keyword2'    => $keyword2,
            'data'        => $detail
        );
        $this->load->view('detail_form', $data);
    }
    public function detail_form()
    {
        $this->load->view('detail_form');
    }
}
