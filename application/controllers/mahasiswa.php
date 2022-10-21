<?php
class Mahasiswa extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-mahasiswa');
    }
    public function cetak()
    {
     {
            $data = [
                'namamahasiswa' => $this->input->post('namamahasiswa'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')
            ];

            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}