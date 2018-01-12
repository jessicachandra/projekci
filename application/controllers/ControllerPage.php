<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPage extends CI_Controller {

	public function index()
	{
		// ini kalau salah link , kembali ke home
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('isi');
		$this->load->view('layout/footer');

	}

	public function lihat_pelangi()
	{

		$this->load->template('pelangi');


	}
	public function lihat_cicak()
	{

		$this->load->template('cicak');


	}
	public function lihat_kereta()
	{

		$this->load->view('kereta');

	}

	public function lihat_balon()
	{
		$this->load->view('balonku');

	}
	public function lihat_kebunku()
	{

		$this->load->view('kebunku');
	

	}
}
