<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HAM extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'HALO ATM Machine';
		$dataSend['navbar'] = 'HAM';
		$this->load->view('Ham/ham',$dataSend);
	}
}
