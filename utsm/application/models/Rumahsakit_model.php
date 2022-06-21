<?php

class Rumahsakit_model extends CI_Model{
	public function getRumahsakit($id = null){
		if($id === null){
			return $this->db->get('tb_rumahsakit')->result_array();
		}else{
			return $this->db->get_where('tb_rumahsakit', ['id' => $id])->result_array();
		}
		
	}
	public function deleteRumahsakit($id){
		$this->db->delete('tb_rumahsakit', ['id' => $id]);
		return $this->db->affected_rows(); 
	}
	public function tambahRumahsakit($data){
		$this->db->insert('tb_rumahsakit', $data);
		return $this->db->affected_rows();
	}
	public function ubahRumahsakit($data, $id){  
		$this->db->update('tb_rumahsakit', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}
}
