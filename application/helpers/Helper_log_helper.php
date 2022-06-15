<?php
defined('BASEPATH') or exit('No direct script access allowed');
function helper_log($tipe = "", $str = "")
{
    $CI =&get_instance();
    if (strtolower($tipe)== 'login'){
        $log_tipe =0;
    }
    else if (strtolower($tipe)== 'delete'){
        $log_tipe =1;
    }else{
        $log_tipe = 3;
    }

    // parameter
    $param['log_user'] = $CI->session->userdata('user_id');
    $param['log_tipe'] = $log_tipe;
    $param['log_desc'] = $str;
    //load model log
    $CI->load->model('m_log');
    //save to database
    $CI->m_log->save_log($param);
}
?>