<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Sugeng Rawuh Mas Ganang Adjie, selamat belajar Web Programming";
        //$this->load->view('view-latihan1);
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
        
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->Model_latihan1->jumlah($nil1, $nil2);

        $this->load->view('view-latihan1', $data);
    }
}