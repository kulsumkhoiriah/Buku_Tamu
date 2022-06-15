<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
		$this->load->model('form_m');
	}
	public function index()
	{
		$data['graph'] = $this->form_m->graph();
		$data['grafik'] = $this->form_m->grafik();
		$this->template->load('template', 'dashboard',$data);
	}
}
