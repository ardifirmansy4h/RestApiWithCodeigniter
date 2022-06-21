<?php 

use GuzzleHttp\Client;

class Rumahsakit_model extends CI_model {
    private $_client;

    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost/UTS_Ardi/utsm/api/',
            'auth' => ['ardi' , 'firmansyah'] 
        ]);
    }
    public function getAllRumahsakit()
    {
        // return $this->db->get('tb_rumahsakit')->result_array();
        $respone = $this->_client->request('GET', 'rumahsakit', [
          'query' =>  [
              'login' => 'lele'
          ]
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result['Data'];
    }
    public function getRumahsakitById($id)
    {
        // return $this->db->get_where('tb_rumahsakit', ['id' => $id])->row_array();

        $respone = $this->_client->request('GET', 'rumahsakit', [
          'query' =>  [
              'login' => 'lele', 
              'id' => $id
          ]
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result['Data'][0];
    }

    public function tambahDataRumahsakit()
    {
        $data = [
            "nama_rs" => $this->input->post('nama_rs', true),
            "nama_pendiri" => $this->input->post('nama_pendiri', true),
            "alamat" => $this->input->post('alamat', true),
            "tahun_berdiri" => $this->input->post('tahun_berdiri', true),
            "izin" => $this->input->post('izin', true),
            "no_hp" => $this->input->post('no_hp', true),
            "login" => "lele"
        ];

        // $this->db->insert('tb_rumahsakit', $data);
        $respone = $this->_client->request('POST', 'rumahsakit', [
            'form_params' => $data
          ]);
          $result = json_decode($respone->getBody()->getContents(), true);
          return $result;
    }

    public function hapusDataRumahsakit($id)
    {
        // $this->db->delete('tb_rumahsakit', ['id' => $id]);
        $respone = $this->_client->request('DELETE', 'rumahsakit', [
            'form_params' =>  [ 
                'login' => 'lele',
                'id' => $id
            ]
          ]);
          $result = json_decode($respone->getBody()->getContents(), true);
        return $result;
    }


    public function ubahDataRumahsakit()
    {
        $data = [
            "nama_rs" => $this->input->post('nama_rs', true),
            "nama_pendiri" => $this->input->post('nama_pendiri', true),
            "alamat" => $this->input->post('alamat', true),
            "tahun_berdiri" => $this->input->post('tahun_berdiri', true),
            "izin" => $this->input->post('izin', true),
            "no_hp" => $this->input->post('no_hp', true),
            "id" => $this->input->post('id', true),
            "login" => "lele"
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('tb_rumahsakit', $data);
        $respone = $this->_client->request('PUT', 'rumahsakit', [
            'form_params' => $data
          ]);
          $result = json_decode($respone->getBody()->getContents(), true);
          return $result;
    }

    // public function cariDataMahasiswa()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('jurusan', $keyword);
    //     $this->db->or_like('nrp', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('mahasiswa')->result_array();
    // }
}