<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {
	public function index()
	{
        echo "<h1>Perkenalkan</h1>";
        echo"Nama saya Ganang Aji Suseno
        Saya tinggal di daerah Gemolong
        olah raga yang saya sukai adalah
        Bulutangkis";

		$this->load->view('welcome_message');
	}
}
