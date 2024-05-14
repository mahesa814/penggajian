<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run()==FALSE) {
			$this->load->view('register');
		}else{
			$nik = $this->input->post('nik');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$jabatan = $this->input->post('jabatan');
			$nama_pegawai = $this->input->post('nama_pegawai');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$status = $this->input->post('status');

			


				$data = [
					'nik' 			=> $nik,
					'nama_pegawai' 	=> $nama_pegawai,
					'username' 		=> $username,
					'password' 		=> $password,
					'jenis_kelamin' => $jenis_kelamin,
					'jabatan' 		=> $jabatan,
					'tanggal_masuk' => date('Y-m-d'),
					'status' 		=> $status,
					'hak_akses' 	=> 2,
					'photo' 		=> null,
				];
				$cek = $this->ModelPenggajian->insert_data($data,'data_pegawai');
				$this->session->set_userdata('hak_akses',$data['hak_akses']);
				$this->session->set_userdata('nama_pegawai',$data['nama_pegawai']);
				$this->session->set_userdata('photo',$data['photo']);
				$this->session->set_userdata('id_pegawai',$data['id_pegawai']);
				$this->session->set_userdata('nik',$data['nik']);
				switch ($data['hak_akses']) {
					case 1 : redirect('admin/dashboard');
						break;
					case 2 : redirect('pegawai/dashboard');
						break;
					default:
						break;
				}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('nik','nik','required');
		$this->form_validation->set_rules('jabatan','jabatan','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('nama_pegawai','nama_pegawai','required');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_rules('password','password','required');
	}

}
