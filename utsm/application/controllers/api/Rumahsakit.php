<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class Rumahsakit extends REST_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Rumahsakit_model', 'rsk'); 
		$this->methods['index_get']['limit'] = 100;
		$this->methods['index_delete']['limit'] = 100;
	}   

	public function index_get(){
		$id = $this->get('id'); 
		if ($id === null){
			$rumahsakit = $this->rsk->getRumahsakit();
		}else{
			$rumahsakit = $this->rsk->getRumahsakit($id);
		}

		if($rumahsakit) {
			$this->response([
				'status' => true,
				'Data' => $rumahsakit
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => false,
				'Pesan' =>'Id tak ditemukan'
			], REST_Controller::HTTP_NOT_FOUND);

		}
	}
	public function index_delete(){
		$id = $this->delete('id');

		if ($id === null) {
			$this->response([
				'status' => false,
				'Pesan' =>'Id kosong'
			], REST_Controller::HTTP_BAD_REQUEST);
		} else {
			if ($this->rsk->deleteRumahsakit($id)> 0) {
				$this->response([
					'status' => true,
					'Pesan' =>'Deleted'
				], REST_Controller::HTTP_OK);
			} else {
				$this->response([
					'status' => true,
					'message' =>'Id tak ditemukan'
				], REST_Controller::HTTP_BAD_REQUEST);

			}

		}
	}
	public function index_post(){
		$data = [
			'nama_rs' => $this->post('nama_rs'), 
			'nama_pendiri' => $this->post('nama_pendiri'), 
			'alamat' => $this->post('alamat'), 
			'tahun_berdiri' => $this->post('tahun_berdiri'), 
			'izin' => $this->post('izin'), 
			'no_hp' => $this->post('no_hp')

	];
	if($this->rsk->tambahRumahsakit($data)>0){
		$this->response([
			'status' => true,
			'Pesan' =>'Berhasil Ditambah'
		], REST_Controller::HTTP_CREATED);
	}else{
		$this->response([
			'status' => false,
			'message' =>'Gagal Ditambah'
		], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function index_put(){
		$id = $this->put('id');
		$data = [
			'nama_rs' => $this->put('nama_rs'), 
			'nama_pendiri' => $this->put('nama_pendiri'), 
			'alamat' => $this->put('alamat'), 
			'tahun_berdiri' => $this->put('tahun_berdiri'), 
			'izin' => $this->put('izin'), 
			'no_hp' => $this->put('no_hp')

	];
	if($this->rsk->ubahRumahsakit($data, $id)>0) 
	{
		$this->response([
			'status' => true,
			'Pesan' =>'Berhasil Diubah'
		], REST_Controller::HTTP_CREATED);

		
	}else{
		$this->response([
			'status' => false,
			'message' =>'Gagal Diubah'
		], REST_Controller::HTTP_BAD_REQUEST);

	}

	}

} 
