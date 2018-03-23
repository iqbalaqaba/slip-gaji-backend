<?php

/**
*  Controller ini
*/

class Crud extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$data['crud'] = $this->m_data->tampil_data();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function proses_input(){

		$data_karyawan = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'nik' => $this->input->post('nik'),
			'departemen' => $this->input->post('departemen'),
			'level' => $this->input->post('level'),
			'active' => $this->input->post('active')
		);

		$id_user = $this->m_data->tambah_akun($data_karyawan);

		$data_gaji = array(
			'gaji_pokok' => $this->input->post('gaji_pokok'),
			'tunj_jabatan' => $this->input->post('tunj_jabatan'),
			'tunj_pulsa' => $this->input->post('tunj_pulsa'),
			'bpjs_kes' => $this->input->post('bpjs_kes'),
			'bpjs_kerja' => $this->input->post('bpjs_kerja'),
			'ganti_rugi' => $this->input->post('ganti_rugi'),
			'kelebihan_telf' => $this->input->post('kelebihan_telf'),
			'pinjaman' => $this->input->post('pinjaman'),
			'id_user' => $id_user
		);

		$proses = $this->m_data->tambah_gaji($data_gaji);
		redirect('crud/index');
	}

	/*
	function tambah_aksi(){
		$id_user = $this->input->post('id_user');
		$gaji_pokok = $this->input->post('gaji_pokok');
		$tunj_jabatan = $this->input->post('tunj_jabatan');
		$tunj_pulsa = $this->input->post('tunj_pulsa');
		$bpjs_kes = $this->input->post('bpjs_kes');
		$bpjs_kerja = $this->input->post('bpjs_kerja');
		$prorata_pinjaman = $this->input->post('prorata_pinjaman');
		$ganti_rugi = $this->input->post('ganti_rugi');
		
		$data = array(
			'id_user' => $id_user, 
			'gaji_pokok' => $gaji_pokok, 
			'tunj_jabatan' => $tunj_jabatan, 
			'tunj_pulsa' => $tunj_pulsa, 
			'bpjs_kes' => $bpjs_kes, 
			'bpjs_kerja' => $bpjs_kerja, 
			'prorata_pinjaman' => $prorata_pinjaman,
			'ganti_rugi' => $ganti_rugi
		);

		$this->m_data->input_data($data,'tbl_gaji');
		redirect('crud/index');
	}

	*/
}